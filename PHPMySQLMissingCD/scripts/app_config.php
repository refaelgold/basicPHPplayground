<?php

// Set up debug mode
define("DEBUG_MODE", true);

// Site root
//define("SITE_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/phpMM/");
define("SITE_ROOT", "/home4/yellowta/www/phpMM/");

// Database connection constants
define("DATABASE_HOST", "localhost");
define("DATABASE_USERNAME", "nirgoldman");
define("DATABASE_PASSWORD", "blacksheep17");
define("DATABASE_NAME", "php_pure");




// Error reporting
if ($debug_mode) {
  error_reporting(E_ALL);
} else {
  // Turn off all error reporting
  error_reporting(0);
}

function debug_print($message) {
  if (DEBUG_MODE) {
    echo $message;
  }
}

function handle_error($user_error_message, $system_error_message) {
  session_start();
  $_SESSION['error_message'] = $user_error_message;
  $_SESSION['system_error_message'] = $system_error_message;
//  header("Location: " . get_web_path(SITE_ROOT) . "scripts/show_error.php?error_message={$user_error_message}&system_error_message={$system_error_message}");
  header("Location: " . get_web_path(SITE_ROOT) . "scripts/show_error.php");
  exit();
}

function get_web_path($file_system_path) {
  //return str_replace($_SERVER['DOCUMENT_ROOT'], '', $file_system_path);
  $main_part =  str_replace('/home4/yellowta/www', '', $file_system_path);
  $full = "{$main_part}";
  return $full;
}

