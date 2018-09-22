<?php
require './smartyHeader.php';
include './z_DBLogIn.php';

try {
    $db = new PDO($dsn, $user, $DBpassword);
    $sql = "SELECT * FROM member";
    $stmt = $db->query($sql);

    $count = 1;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        $members[$count]['id'] = $row['mID'];
        $members[$count]['name'] = $row['mName'];
        $members[$count]['email'] = $row['mEmail'];
        $members[$count]['password'] = $row['mPassword'];
        $smarty->assign('members', $members);

        $count++;
    }

    // else {
    //     $smarty->assign("members",
    //         $empty = array(0 => array(
    //             "id" => "無資料",
    //             "name" => "無資料",
    //             "email" => "無資料",
    //             "password" => "無資料")));
    // }

} catch (PDOException $e) {
    print "Couldn't connect to the database: <br>" . $e->getMessage();
}

$smarty->display('allMember.html');
$smarty->clearAllCache();
