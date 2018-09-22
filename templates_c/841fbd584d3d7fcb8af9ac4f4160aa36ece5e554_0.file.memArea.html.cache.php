<?php
/* Smarty version 3.1.32, created on 2018-08-23 20:36:37
  from '/Applications/XAMPP/xamppfiles/htdocs/0myProject/webPractice/memArea.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7eaa55536b27_52571709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '841fbd584d3d7fcb8af9ac4f4160aa36ece5e554' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/0myProject/webPractice/memArea.html',
      1 => 1535027774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7eaa55536b27_52571709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '19540632635b7eaa554fb468_14741927';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Member Area</title>
  <style>
    * {
      border: solid 1px black;
    }
  </style>
</head>

<body>
  <h1>Member Area</h1>

  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
    </tr>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['sID']->value;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['sName']->value;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['sEmail']->value;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['sPwd']->value;?>
</td>
    </tr>
  </table>
  <input type="button" value="登出" onclick="logOut()">

  <?php echo '<script'; ?>
>
    function logOut() {
      // alert('您已經順利登出');
    }
  <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
