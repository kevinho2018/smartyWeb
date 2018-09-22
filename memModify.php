<?php
// 目前只做到可以用ajax修改DB內的資料，如果有修改到DB的mID，但沒有按"重新整理"，畫面上td的ID不會改變，這時繼續更新資料時是用舊td的ID，去找修改過的mID，會找不到資料更新。

include "z_DBLogIn.php";

if (isset($_POST['tdID']) || isset($_POST['sendID']) || isset($_POST['sendName']) || isset($_POST['sendEmail']) || isset($_POST['sendPwd'])) {

    $tdID = $_POST['tdID'];
    $ID = $_POST['sendID'];
    $name = $_POST['sendName'];
    $email = $_POST['sendEmail'];
    $pwd = $_POST['sendPwd'];

    try {
        $db = new PDO($dsn, $user, $DBpassword);

        $sql = "UPDATE member SET mID = ?, mName = ?, mEmail = ?, mPassword = ?WHERE member.mID = ?";

        $stmt = $db->prepare($sql);
        $stmt->execute([$ID, $name, $email, $pwd, $tdID]);

    } catch (PDOException $e) {
        print "Couldn't connect to the database: <br>" . $e->getMessage();
    }

} else {
    echo "你沒有給我參數";
}
