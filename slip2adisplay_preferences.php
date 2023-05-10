<!DOCTYPE html>
<html>
<head>Displaying Preferences<br>
    <title>Display Preferences</title>
</head>
<body style="<?php
if(isset($_COOKIE["bg_color"])) {
    echo "background-color: ".$_COOKIE["bg_color"].";";
}
if(isset($_COOKIE["font_style"])) {
    echo " font-family: ".$_COOKIE["font_style"].";";
}
if(isset($_COOKIE["font_size"])) {
    echo " font-size: ".$_COOKIE["font_size"]."px;";
}
if(isset($_COOKIE["font_color"])) {
    echo " color: ".$_COOKIE["font_color"].";";
}
?>">
    <?php
    if(isset($_COOKIE["bg_color"])) {
        echo "Background Color: ".$_COOKIE["bg_color"]."<br>";
    }
    if(isset($_COOKIE["font_style"])) {
        echo "Font Style: ".$_COOKIE["font_style"]."<br>";
    }
    if(isset($_COOKIE["font_size"])) {
        echo "Font Size: ".$_COOKIE["font_size"]."px<br>";
    }
    if(isset($_COOKIE["font_color"])) {
        echo "Font Color: ".$_COOKIE["font_color"]."<br>";
    }
    ?>
</body>
</html>