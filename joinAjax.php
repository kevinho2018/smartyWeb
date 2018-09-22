<?php
include "z_DBLogIn.php";

$IDText = $_POST['IDText'];
try {
    $db = new PDO($dsn, $user, $DBpassword);
    $sql = "SELECT * FROM member WHERE mID = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$IDText]);

    // 判斷是否有資料
    if ($stmt->rowCount() === 1) {
        $post = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "無法使用此帳號";
    } else {
        echo "此帳號可使用！！";
    }

} catch (PDOException $e) {
    print "Couldn't connect to the database: <br>" . $e->getMessage();
}
