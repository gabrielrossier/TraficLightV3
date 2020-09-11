<?php
require_once("Class/TrafficLight.php");
session_start();
$Light = isset($_SESSION['myLight'])? $_SESSION['myLight'] : new TrafficLight();
if (isset($_GET['next'])) {
    
    $Light->isNextRequired();
}
elseif (isset($_GET['HS']))
{
    $Light->requireHS();
}


?>




<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <title>ExerciseLooper</title>
    <link rel="stylesheet" media="all" href="CSS/Stylesheet.css"/>
</head>
<body>

<div class="Light">

    <div class="<?= $Light->red ? "CircleRed" : "CircleOff" ?>"></div>
    <div class="<?= $Light->yellow ? "CircleYellow" : "CircleOff" ?>"></div>
    <div class="<?= $Light->green ? "CircleGreen" : "CircleOff" ?>"></div>

</div class="buttons">
<a class="btn" href="index.php?next=">&#xbb;</a>
<a class="btn" href="index.php?HS="> HS</a>
</body>
