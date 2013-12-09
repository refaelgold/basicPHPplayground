<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->
<p>Hello world! This is HTML5 Boilerplate.</p>
<?php
/**
 * Created by PhpStorm.
 * User: רפאל
 * Date: 13/10/13
 * Time: 08:18
 */
//conection:


//$link = mysqli_connect("localhost","refaelgold","blacksheep17","php_pure") or die("Error " . mysqli_error($link));

//$link = mysqli_connect("myhost","myuser","mypassw","mybd") or die("Error " . mysqli_error($link));

//consultation:
//
//$query = "SELECT name FROM mytable" or die("Error in the consult.." . mysqli_error($link));
//
////execute the query.
//
//$result = $link->query($query);
//
////display information:
//
//while($row = mysqli_fecth_array($result)) {
//    echo $row["name"] . "<br>";
//}




$link = mysqli_connect("localhost","refaelgold","blacksheep17","php_pure") or die("Error " . mysqli_error($link));

$query ="select * from company";

$result = $link->query($query);

if(mysqli_num_rows($result) > 0 ){
    echo "<table>";
    while ($row = mysqli_fetch_array ($result)) {
        echo "<tr>";
        echo "<td>";
        echo " id: " .$row['id'];
        echo "</td>";

        echo "<td>";
        echo " name: " .$row['name'];
        echo "</td>";
        echo "<tr>";

    }
    echo "</table>";
}
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
</body>
</html>
