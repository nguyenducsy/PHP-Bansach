var minutes = 0;
var price = 30000;

$("#length").text(minutes);



$("#minus").on("click", function() {
    if (minutes > 1) {
        minutes -= 1;
        $("#length").text(minutes);
        $("#time").text(minutes);
    }

});

$("#plus").on("click", function() {
    if (minutes < 45) {
        minutes += 1;
        $("#length").text(minutes);
        $("#time").text(minutes);
    }

});