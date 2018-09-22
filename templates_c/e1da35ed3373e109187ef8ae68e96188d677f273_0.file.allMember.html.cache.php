<?php
/* Smarty version 3.1.32, created on 2018-08-23 12:11:35
  from '/Applications/XAMPP/xamppfiles/htdocs/0myProject/webPractice/allMember.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7e33f7b03987_32212262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1da35ed3373e109187ef8ae68e96188d677f273' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/0myProject/webPractice/allMember.html',
      1 => 1534997495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7e33f7b03987_32212262 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12664142595b7e33f7ae07f1_45282377';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="_global.css"> -->
  <title>All Member</title>
  <style>
    * {
      /* border: solid 1px black; */
    }

    td {
      padding: 5px 10px;
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Update</th>
      <th>Delete</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['members']->value, 'one');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['one']->value) {
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
 </td>
      <td><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
 </td>
      <td><?php echo $_smarty_tpl->tpl_vars['one']->value['email'];?>
 </td>
      <td><?php echo $_smarty_tpl->tpl_vars['one']->value['password'];?>
 </td>
      <td><a href="">Update</a></td>
      <td><a href="">Delete</a></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </table>
</body>

</html>
<?php }
}
