<?php
$page=$_GET['page'];

switch($page)
{
	case "1";
	include "home2.php";
	break;

	case "2";
	include "login.php";
	break;

	case "3";
	include "signup.php";
	break;

	case "4";
	include "about.php";
	break;

	case "5";
	include "portofolio.php";
	break;
}
?>