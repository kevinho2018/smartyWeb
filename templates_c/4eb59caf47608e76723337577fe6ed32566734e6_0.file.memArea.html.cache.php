<?php
/* Smarty version 3.1.32, created on 2018-08-31 16:08:48
  from '/Applications/XAMPP/xamppfiles/htdocs/0myProject/smartyWeb/memArea.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b88f7902ac011_02213370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4eb59caf47608e76723337577fe6ed32566734e6' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/0myProject/smartyWeb/memArea.html',
      1 => 1535702899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b88f7902ac011_02213370 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12037601675b88f790290432_71464248';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="z_css/style.css">
  <?php echo '<script'; ?>
 src="z_js/reuseHTML.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"><?php echo '</script'; ?>
>
  <title>Member Area</title>
</head>

<body>
  <header class="site-header dark-bg" style="background-color: #2196F3;" id="navbar">
  </header>
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
  <!-- <input type="button" value="登出" onclick="logOut()"> -->

  <div id="medium"></div>

  <footer class="site-footer" id="footer"></footer>

  <?php echo '<script'; ?>
>
    function logOut() {
      // alert('您已經順利登出');
    }

    header();
    medium();
    footer();
  <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
