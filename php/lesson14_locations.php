<?php
include("lesson14_header.html");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locations</title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="./../js/lesson14_submit.js" ></script>
    <script>
        GetCookies("");
    </script>
</head>

<body>
    <div class="main">
        <h1>Locations page</h1>
        <label>This is the location page, this is where we list out all the secret locations of the underground society</label>
        <label>Enter your favorite locations in the world</label>
        <form id="locationForm" method="post">
            <input type="text" id="location">
            <input type="button" name="button" onclick="SubmitLocationForm()" value="Add location">
        </form>
        <div id="results"></div>
    </div>
</body>

</html>
<style>
    body {
        background-color: black;
        color: white;

    }

    .main {
        display: flex;
        align-items: center;
        flex-direction: column;
    }
</style>
<?php
include("lesson14_footer.html");
?>