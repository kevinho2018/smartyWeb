<?php
require './smartyHeader.php';
session_start();

if (isset($_SESSION['id']) || isset($_SESSION['name']) ||
    isset($_SESSION['email']) || isset($_SESSION['pwd'])) {

    $smarty->assign('sID', $_SESSION['id']);
    $smarty->assign('sName', $_SESSION['name']);
    $smarty->assign('sEmail', $_SESSION['email']);
    $smarty->assign('sPwd', $_SESSION['pwd']);

    $smarty->display('memArea.html');
    $smarty->clearAllCache();
} else {
    header("Location: 0_index.html");
}
