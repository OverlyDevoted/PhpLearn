function SubmitLocationForm() {
    var location = $("#location").val();
    console.log(location);
    $.post("lesson14_addLoc.php", { location: location }, 
    function (data) {
        $('#locationForm')[0].reset();
        GetCookies(data);
    })
}

function GetCookies(prevData) {
    $.post("lesson14_getCookie.php", 
    function (data) {
        $('#locationForm')[0].reset();
        $('#results').html(prevData + data);  
    })
}