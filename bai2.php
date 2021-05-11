<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <title>kết hợp html, css,javascript,php</title>
    <style type="text/css">
        h1 {
            color: lightpink;
        }
        .c1{
            width: 100px; height: 50px; border:1px lime solid;
            float:left;margin: 5px;
        }
    </style>

</head>

<body>
<h1>kết hợp html, css,js,php</h1>
<?php
for ($i=1;$i<=5;$i++){
    echo"\n<div class='c1'>hello PHP</div>";
}
?>
</body>

</html>