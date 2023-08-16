<!DOCTYPE html>
<html lang="en">
<!-- 
    Things covered in this lesson:
    1. How to link html and css
    2. JQuery and how it is easier to get elements in the dom compared to JS
    3. If we submit form through a javascript function then there's no page reload
    4. id and class selectors for css
    5. Various php math related functions
    6. Emmet snippets for creating html and css snippets. We define them by creating a directory for the snippets
       then we can link it in settings > Emmet: Extensions Path 
 -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="./js/submit.js"></script>
    <script>
        SubmitFormData()
    </script>
</head>

<body>
    <div id="container">
        <div id="formContainer">
            <form id="xyzForm" method="post">
                <label>x:</label>
                <input type="number" step="0.0001" id="x_value" name="x_value" />
                <label>y:</label>
                <input type="number" step="0.0001" id="y_value" name="y_value" />
                <label>z:</label>
                <input type="number" step="0.0001" id="z_value" name="z_value" />
                <input type="button" onclick="SubmitFormData()" value="Calculate" />
            </form>
            <div id="xyzResults">

            </div>
        </div>
        <div id="formContainer">
            <form id="radiusForm" method="post">
                <label>Value:</label>
                <input type="number" step="0.0001" id="radius_value" name="radius_value" />
                <input type="button" onclick="SubmitRadiusFormData()" value="Calculate" />
            </form>
            <div id="radiusResults">
<!-- sin
432.928 
705.072 

cos
-19.072 
253.072
 -->
                
            </div>
            <div>
            <svg viewBox="0 0 500 500" width="500" height="500" xmlns="http://www.w3.org/2000/svg" xmlns:bx="https://boxy-svg.com">
                    <path style="fill: rgb(216, 216, 216); stroke: rgb(0, 0, 0); transform-origin: 569px 117px;" transform="matrix(0.918631017208, 0, 0, 0.918631017208, -319.000031530857, 132.99997061491)" d="M 674.747805267 31.367115749 A 136.072 136.072 0 1 1 569 -19.072 L 569 117 Z" bx:shape="pie 569 117 0 136.072 51 360 1@6ec87c2b" />
                </svg>
            </div>
        </div>
    </div>
</body>

</html>