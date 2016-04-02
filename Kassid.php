<!DOCTYPE html>
<html>
<head>
    <title> Arrays Ulesanne7 </title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>


<?php

$kassid = array(

    array('nimi'=>'tom', 'vanus'=>1, 'varv'=> 'must', 'toit' => 'wiskas'),
    array('nimi'=>'jerry', 'vanus'=>2, 'varv'=> 'valge', 'toit' => 'kitekat'),
    array('nimi'=>'amelie', 'vanus'=>3, 'varv'=> 'punane', 'toit' => 'pedigree'),
    array('nimi'=>'tomas', 'vanus'=>4, 'varv'=> 'hall', 'toit' => 'nurr')

);

foreach($kassid as $kass) {
    include "Kassid.html";
}

?>
<br>


</body>
</html>