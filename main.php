<?php
require './smartyHeader.php';
session_start();

$smarty->assign('sName', $_SESSION['name']);

$smarty->display('main.html');
