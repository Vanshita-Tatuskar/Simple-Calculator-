<?php

if (isset($_POST['sub'])) {
    $txt1 = $_POST['number1'];
    $txt2 = $_POST['number2'];
    $oprnd = $_POST['sub'];

    if ($oprnd == "+")
        $res = $txt1 + $txt2;
    else if ($oprnd == "-")
        $res = $txt1 - $txt2;
    else if ($oprnd == "x")
        $res = $txt1 * $txt2;
    else if ($oprnd == "/")
        $res = $txt1 / $txt2;
        echo "$res";
}
?>