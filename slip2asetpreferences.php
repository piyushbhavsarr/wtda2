<?php
$expire = time() + 60*60*24*30;
setcookie("font_style", $_POST["font_style"], $expire);
setcookie("font_size", $_POST["font_size"], $expire);
setcookie("font_color", $_POST["font_color"], $expire);
setcookie("bg_color", $_POST["bg_color"], $expire);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Set Preferences</title>
</head>
<body>
    <h2>Selected Preferences:</h2>
    <?php
    echo "Font Style: ".$_POST["font_style"]."<br>";
    echo "Font Size: ".$_POST["font_size"]."px<br>";
    echo "Font Color: ".$_POST["font_color"]."<br>";
    echo "Background Color: ".$_POST["bg_color"]."<br>";
    ?>
    <form action="slip2adisplay_preferences.php" method="post">
        <input type="submit" value="Submit">
    </form>
</body>
</html>