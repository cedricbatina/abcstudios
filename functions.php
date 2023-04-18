<?php

require "connection.php";

setlocale(LC_TIME, 'fr_FR.utf8'); // set the locale to French

function check_login()
{
	if (empty($_SESSION['info'])) {

		header("Location: login.php");
		die;
	}
}
