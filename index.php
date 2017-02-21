<?php


if ($_GET['start']) {
  shell_exec('/var/www/cgi-bin/start.sh');
}
if ($_GET['stop']) {
  shell_exec('/var/www/cgi-bin/stop.sh');
}
if ($_GET['vup']) {
  shell_exec('/var/www/cgi-bin/vup.sh');
}
if ($_GET['vdown']) {
  shell_exec('/var/www/cgi-bin/vdown.sh');
}
if ($_GET['mute']) {
  shell_exec('/var/www/cgi-bin/mute.sh');
}
?>


<!DOCTYPE html>
<html>
<head>
<style>

.greenButton {
        -webkit-border-radius: 60;
        -moz-border-radius: 60;
        border-radius: 60px;
        text-shadow: 1px 1px 4px #666666;
        font-family: Arial;
        color: #ffffff;
        font-size: 40px;
        padding: 20px 40px 20px 40px;
        border: solid #1f628d 6px;
	background-color:#44c767;
	border:6px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
}
.greenButton:hover {
	background-color:#5cbf2a;
}
.greenButton:active {
	position:relative;
	top:1px;
}

.redButton {
        border-radius: 60px;
        text-shadow: 1px 1px 4px #666666;
        font-family: Arial;
        color: #ffffff;
        font-size: 40px;
        padding: 20px 40px 20px 40px;
        border: solid #963f3f 6px;
	-moz-box-shadow:inset 0px 39px 0px -24px #e67a73;
	-webkit-box-shadow:inset 0px 39px 0px -24px #e67a73;
	box-shadow:inset 0px 39px 0px -24px #e67a73;
	background-color:#e4685d;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	text-decoration:none;
	text-shadow:0px 1px 0px #b23e35;
}
.redButton:hover {
	background-color:#eb675e;
}
.redButton:active {
	position:relative;
	top:1px;
}



.btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 60;
  -moz-border-radius: 60;
  border-radius: 60px;
  text-shadow: 1px 1px 4px #666666;
  font-family: Arial;
  color: #ffffff;
  font-size: 40px;
  padding: 20px 40px 20px 40px;
  border: solid #1f628d 6px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
.btn:active {
        position:relative;
        top:1px;
}

</style>
</head>
<body>
<center>

<a href="/screen1"><img width="200" src="images/remoteicon.jpg"></img></a>
<h1>Screen 1</h1>

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;text-align:center;padding:40px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;}
.tg .tg-yw4l{vertical-align:center}
</style>
<table  width="500" class="tg">
  <tr>
    <td class="tg-yw4l">
<a href="?start=true" class="greenButton">Start</a>
</td>
    <td class="tg-yw4l">
<div class="btn:hover"><a href="?vup=true" class="btn">Vol Up</a></div>
</td>
  </tr>
  <tr>
    <td class="tg-yw4l">
<div class="btn:hover"><a href="?stop=true" class="redButton">Stop</a></div>
</td>
    <td class="tg-yw4l">
<div class="btn:hover"><a href="?vdown=true" class="btn">Vol Down</a></div>
</td>
  </tr>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l">
<a href="?mute=true" class="btn">Mute</a>
</td>
  </tr>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
  </tr>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
  </tr>
</table>
</center>
</body>
</html>
