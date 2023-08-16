function SubmitFormData() {
    var x = $("#x_value").val(); // gets it by the id of the input not by name like php
    var y = $("#y_value").val();
    var z = $("#z_value").val();
    console.log(x + " " + y + " " + z);
    $.post("php/lesson5_1.php", { x_value: x, y_value: y, z_value: z },
    function(data) {
        $('#xyzForm')[0].reset();
        $('#xyzResults').html(data);
    }
    );
}
function SubmitRadiusFormData() {
    var radius = $("#radius_value").val(); // gets it by the id of the input not by name like php
    console.log("Radius: " + radius);
    $.post("php/lesson5_2.php", { radius_value: radius },
    function(data) {
        $('#radiusForm')[0].reset();
        $('#radiusResults').html(data);
    }
    );
}