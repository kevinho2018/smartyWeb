<?php
/* Smarty version 3.1.32, created on 2018-09-08 11:04:06
  from '/Applications/XAMPP/xamppfiles/htdocs/0_htdocs/smartyWeb/main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b939086aeebe6_60628393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd270c23213c251d5c43714885eae4e1d1a655d16' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/0_htdocs/smartyWeb/main.html',
      1 => 1535547550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b939086aeebe6_60628393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16953988605b939086ac7fe5_19904915';
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
  <title>main.php</title>
</head>

<body>
  <header class="site-header dark-bg" style="background-color: #2196F3;" id="navbar">
  </header>
  <h1>main.php</h1>
  <a href="memArea.php"><?php echo $_smarty_tpl->tpl_vars['sName']->value;?>
</a>

  <div id="medium"></div>

  <footer class="site-footer" id="footer"></footer>

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
