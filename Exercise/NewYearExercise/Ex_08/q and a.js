$("#accordion .panel:not(:first)").hide();
$("#accordion button").click(function(){

    $accordion = $(this).next();
    if ($accordion.is(':hidden') === true) {
        $("#accordion .panel").slideUp();
        $accordion.slideDown();
    } else {
        $accordion.slideUp();
    }
});