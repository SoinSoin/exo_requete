$(document).ready(function () {
    $(".btn").on("click", function (event) {
        // var button = $(event.relatedTarget);
        // console.log(button);
        var btnNomPren = $(this).data("recupbtn");
        console.log(btnNomPren);
        $.ajax({
            url: "script.php",
            method: "POST",
            dataType: "html",
            data: {action:btnNomPren},
            success: function (arg) {
                $( "#nomPren" ).html(arg);
                
            }
        });

    });


});