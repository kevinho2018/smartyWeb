<?php
include "z_DBLogIn.php";

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    try {
        $db = new PDO($dsn, $user, $DBpassword);

        $sql = "DELETE FROM member WHERE mID = ?";

        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);

        echo ("ID：$id 已刪除");

    } catch (PDOException $e) {
        print "Couldn't connect to the database: <br>" . $e->getMessage();
    }

} else {
    echo "你沒有給我參數";
}
