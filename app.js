$(document).ready(function () {
    $(".btn").on("click", function () {
        // var button = $(event.relatedTarget);
        // console.log(button);
       
        var btnNomPren = $(this).data("recupbtn");
        console.log(btnNomPren);
        var recupValue = $("#letexte").val();

        console.log(recupValue);
        console.log(btnNomPren);
        $.ajax({
            url: "script.php",
            method: "POST",
            dataType: "html",
            data: {
                action: btnNomPren,
                aenvoyer:recupValue
            },
            success: function (arg) {
                if(btnNomPren){
                $("#nomPren").html(arg);
                $("#letexte").val("");
                }
            }
        });



    });

    
    function refresh() {
        var rafraichir = $(this).data("autorefr");
        $.ajax({
            url: "script.php",
            method: "POST",
            dataType: "html",
            data: {autorefresh : rafraichir},
            success: function (argument) {
                $("#script").html(argument);
            }
        });
    }
    refresh(console.log("passe"));
    setInterval(function(){refresh()},3000);

});