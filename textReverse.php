<!DOCTYPE html>
<html>
<head>
    <title> Text reversal task </title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>

<p> Reverse this text</p>
<br>

<?php
$text = "Reverse this text";

$textArray = str_split($text, 1);
echo "<br>";
for ($i = count($textArray)-1; $i>=0; $i--){
    echo $textArray[$i];
}

?>
<br>


<a href="http://validator.w3.org/check?uri=referer">
    <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
</a>
<a href="http://jigsaw.w3.org/css-validator/check/referer">
    <img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" /></a>

</body>
</html>