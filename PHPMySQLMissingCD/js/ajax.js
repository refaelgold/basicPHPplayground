
// A $( document ).ready() block.
$( document ).ready(function() {

    /* Attach a submit handler to the form */
    $("#createUserForm").submit(function(event) {
        /* Stop form from submitting normally */
        event.preventDefault();

        /* Clear result div*/
        $("#result").html('');

        /* Get some values from elements on the page: */
        var values = $(this).serialize();

        /* Send the data using post and put the results in a div */
        $.ajax({
            url: "scripts/create_user.php",
            type: "post",
            data: values,
            success: function(){
                alert("success");
                $("#result").html('Submitted successfully');
            },
            error:function(){
                alert("failure");
                $("#result").html('There is error while submit');
            }
        });
    });
});

