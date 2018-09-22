<?php
/* Smarty version 3.1.32, created on 2018-08-18 17:33:52
  from '/Applications/XAMPP/xamppfiles/htdocs/0myProject/webPractice/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b77e800e47037_39420512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e079ab2d411d9031d4bb42c9fbd4189c1b163131' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/0myProject/webPractice/main.tpl',
      1 => 1534584768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b77e800e47037_39420512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3220883255b77e800e1bcb5_39881856';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_global.css">
    <title>main.php</title>
</head>
<body>
    <h1>main.php</h1>

    <a href="memArea.php"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
    <input type="button" value="登出" onclick="logOut()">

    <?php echo '<script'; ?>
>
        function logOut(){
            alert('您已經順利登出');
        }
    <?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
