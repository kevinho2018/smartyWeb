<?php
/* Smarty version 3.1.32, created on 2018-09-22 11:26:28
  from '/Applications/XAMPP/xamppfiles/htdocs/0_htdocs/smartyWeb/allMember.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba60ac45d30a1_59405833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e1425f7d4443309f1765abea16cfd89f8b62c76' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/0_htdocs/smartyWeb/allMember.html',
      1 => 1537608359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba60ac45d30a1_59405833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11631581725ba60ac459f3c7_25650874';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="z_css/style.css">
  <!-- <link rel="stylesheet" href="z_css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="z_css/jquery.toast.css">
  <?php echo '<script'; ?>
 src="z_js/reuseHTML.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"><?php echo '</script'; ?>
>
  <title>All Member</title>
</head>

<body>
  <header class="site-header dark-bg" style="background-color: #2196F3;" id="navbar">
  </header>

  <form action="" method="POST" name="">
    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Delete</th>
      </tr>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['members']->value, 'one');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['one']->value) {
?>
      <tr>
        <td id="<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
</td>
        <td id="<?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</td>
        <td id="<?php echo $_smarty_tpl->tpl_vars['one']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value['email'];?>
</td>
        <td id="<?php echo $_smarty_tpl->tpl_vars['one']->value['password'];?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value['password'];?>
</td>
        <td><a href="" style="color:red">Delete</a></td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
  </form>

  <a href="allMember.php" style="text-decoration: underline; color:#0000FF">重新整理</a>

  <div id="medium"></div>

  <footer class="site-footer" id="footer"></footer>

  <?php echo '<script'; ?>
 src="z_js/jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="z_js/jquery.toast.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    header();
    medium();
    footer();
  <?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
