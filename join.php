<?php
include './z_DBLogIn.php';

if (isset($_POST["id"]) || isset($_POST["name"]) ||
    isset($_POST["email"]) || isset($_POST["pwd"])) {

    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $re_pwd = $_POST["re_pwd"];

    try {
        $db = new PDO($dsn, $user, $DBpassword);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // 可用
        $affectedRows = $db->exec(
            "INSERT INTO member (mID, mName, mEmail, mPassword)
                    VALUES ('$id', '$name', '$email', '$pwd')");
        echo $affectedRows;

        // 可用
        // $sql = "INSERT INTO member (mID, mName, mEmail, mPassword)
        //         VALUES (?, ?, ?, ?)";
        // $stmt = $db->prepare($sql);
        // $stmt->execute([$id, $name, $email, $pwd]);

    } catch (PDOException $e) {
        print "Couldn't connect to the database: <br>" . $e->getMessage();
    }

    session_start();

    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['pwd'] = $pwd;

    header("Location: main.php");

} else {

    header("Location: 0_index.html");
}
