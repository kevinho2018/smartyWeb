<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>z_test</title>
</head>
<body style="background: black; color: lightgray; font-family: 'source code pro';">
</body>
</html>
<?php
    $test = 0; //這是一個變數，值為1

    echo '$test' ;      //狀況一
    echo '<br>';

    echo "$test" ;      //狀況二
    echo '<br>';

    echo " '$test' " ;  //狀況三
    echo '<br>';

    echo ' "$test" ' ;  //狀況四
    echo '<br>';

    $test2 = 100;
    echo (" $test2 ");

    echo '<br>';

    $aaa = 333;
    settype($aaa, "string");
    var_dump($aaa);
?>