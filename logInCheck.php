<?php
include './z_DBLogIn.php';

$email = $_POST['email'];
$passwd = $_POST['password'];

try {
    $db = new PDO($dsn, $user, $DBpassword);
    $sql = "SELECT * FROM member WHERE mEmail = ? AND mPassword = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$email, $passwd]);

    // 判斷是否有資料
    if ($stmt->rowCount() === 1) {
        $post = $stmt->fetch(PDO::FETCH_ASSOC);
        session_start();

        $_SESSION['id'] = $post['mID'];
        $_SESSION['name'] = $post['mName'];
        $_SESSION['email'] = $post['mEmail'];
        $_SESSION['pwd'] = $post['mPassword'];

        header("Location: main.php");
    } else {
        echo "帳號密碼錯誤！！";
    }

} catch (PDOException $e) {
    print "Couldn't connect to the database: <br>" . $e->getMessage();
}
