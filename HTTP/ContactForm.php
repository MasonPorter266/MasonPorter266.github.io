<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>How to Tech Tutorials</title>
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="ContactFormCSS.css">

<?php
$to="duane.erickson@mtchs.org ";
$subject="Formail Message";
$from=$_REQUEST['emailAddress'];
$message="Name: ".$_REQUEST['fullName']."\nPhone: ".$_REQUEST['phoneNumber']. "\nMessage: ".$_REQUEST['comments'];
$spamCheck=$_REQUEST['address'];

if($spamCheck)
	die("Don't send this email");
else {
	mail($to,$subject,$message,$from);
}

?>
</head>

<main>
<body>
<header>
<nav>
<ul>
<li>
<a href="TutorialPage.html">Tutorials</a></li><li>
<a href="AboutPage.html">About</a></li><li>
<a href="MainPage.html">Home</a></li>
</ul>
</nav>
</header>
<article>
Why am i seeing this? You are seeing this because your browser is disabling elements.
</article>
<section>
How to Technology Tutorials
<div>
Thanks for contacting us!
</div>
</section>
<footer>
<table width="1550" border="0">
  <tbody>
    <tr>
      <td>© Copyright 2016, Meridian Technical Charter High School. All Rights Reserved.</td>
<td>
<script>
var mydate=new Date()
var year=mydate.getYear()
if (year < 1000)
year+=1900
var day=mydate.getDay()
var month=mydate.getMonth()
var daym=mydate.getDate()
if (daym<10)
daym="0"+daym
var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
document.write("<small><font color='000000' face='Arial'><b>"+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+"</b></font></small>")
</script>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
<img src="Sociallogos.png" width="228" height="64" alt=""/>
</td>
    </tr>
  </tbody>
</table>
</footer>
</body>
</main>
</html>