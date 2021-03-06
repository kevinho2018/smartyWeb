<?php
/* Smarty version 3.1.32, created on 2018-09-08 08:05:25
  from '/Applications/MAMP/htdocs/smartyWeb/allMember.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9382c562d056_45807871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24cae17dff4b957a8267ec86b7dafe35146806b8' => 
    array (
      0 => '/Applications/MAMP/htdocs/smartyWeb/allMember.html',
      1 => 1535981588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9382c562d056_45807871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '607834685b9382c55a5d92_90138409';
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
        <th>Edit</th>
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
        <td id="<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
button">
          <button type="button" onclick="edit('<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['one']->value['email'];?>
','<?php echo $_smarty_tpl->tpl_vars['one']->value['password'];?>
')">
            Edit
          </button>
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

    // 存td標籤的ID，給done函式使用
    let tdID;
    let tdName;
    let tdEmail;
    let tdPWD;
    // 存input標籤的ID
    let inputID;
    let inputName;
    let inputEmail;
    let inputPwd;

    let alreadyEdited = 0; // 0是無修改，1是已修改

    function edit(id, name, email, pwd) {
      // 判斷前一次的修改是否已儲存，沒有就先儲存，才能轉換成可輸入的畫面，有儲存就跳過。
      if (alreadyEdited === 1) {
        // 儲存前，先確認是否有輸入資料，沒有就跳出本函式，要求先輸入資料
        if (document.getElementById(inputID).value === "") {
          alert("請填入資料");
          return;
        } else if (document.getElementById(inputName).value === "") {
          alert("請填入資料");
          return;
        } else if (document.getElementById(inputEmail).value === "") {
          alert("請填入資料");
          return;
        } else if (document.getElementById(inputPwd).value === "") {
          alert("請填入資料");
          return;
        }
        done(); // 執行儲存，回到無修改狀態。
      }

      // 以下1,2,3是將畫面轉換成可輸入的樣子
      // 1.此變數的值，是為了讓input標籤有ID，以及看到資料修改前的內容，所做的準備。
      let tdID_value = document.getElementById(id).textContent
      let tdName_value = document.getElementById(name).textContent
      let tdEmail_value = document.getElementById(email).textContent
      let tdPwd_value = document.getElementById(pwd).textContent

      // 2.為input標籤提供ID，例：inputtest1，避免input的ID與td的ID重複
      inputID = "input" + tdID_value;
      inputName = "input" + tdName_value;
      inputEmail = "input" + tdEmail_value;
      inputPwd = "input" + tdPwd_value;

      // 3.修改資料。將input標籤加上ID，並呈現資料修改前的內容。
      document.getElementById(id).innerHTML =
        "<input type='text' id='" + inputID + "' value=" + tdID_value + ">";
      document.getElementById(name).innerHTML =
        "<input type='text' id='" + inputName + "' value=" + tdName_value + ">";
      document.getElementById(email).innerHTML =
        "<input type='text' id='" + inputEmail + "' value=" + tdEmail_value + ">";
      document.getElementById(pwd).innerHTML =
        "<input type='text' id='" + inputPwd + "' value=" + tdPwd_value + ">";

      // 將td的ID存入全域變數，讓done函式儲存時，能找到原本td的位置。
      tdID = id;
      tdName = name;
      tdEmail = email;
      tdPWD = pwd;

      alreadyEdited = 1;
    }

    // 儲存input標籤的值，用作存入DB和存入td
    let inputIDValue;
    let inputNameValue;
    let inputEmailValue;
    let inputPwdValue;

    function done() {
      // 取input標籤的值
      inputIDValue = document.getElementById(inputID).value;
      inputNameValue = document.getElementById(inputName).value;
      inputEmailValue = document.getElementById(inputEmail).value;
      inputPwdValue = document.getElementById(inputPwd).value;

      // 存入td
      document.getElementById(tdID).innerHTML = inputIDValue;
      document.getElementById(tdName).innerHTML = inputNameValue;
      document.getElementById(tdEmail).innerHTML = inputEmailValue;
      document.getElementById(tdPWD).innerHTML = inputPwdValue;

      trigger();

      // 清空input和td的ID，讓這次的修改完成
      tdID = null;
      tdName = null;
      tdEmail = null;
      tdPWD = null;
      inputID = null;
      inputName = null;
      inputEmail = null;
      inputPwd = null;
      alreadyEdited = 0; // 回到無修改，表示結束這次的修改

    }

    // ajax 儲存修改過的資料進DB
    let sendSrt;
    let httpRequest;

    function trigger() {
      sendStr =
        "tdID=" + tdID +
        "&sendID=" + inputIDValue +
        "&sendName=" + inputNameValue +
        "&sendEmail=" + inputEmailValue +
        "&sendPwd=" + inputPwdValue;

      httpRequest = new XMLHttpRequest();

      if (!httpRequest) {
        alert("Giving up :( Cannot create an XMLHTTP instance");
        return false;
      }
      httpRequest.onreadystatechange = function () {
        try {
          if (this.readyState === XMLHttpRequest.DONE) {
            //檢查 request 目前狀態， 4 為資訊交換完成
            if (httpRequest.status === 200) {
              //檢查伺服器傳回的 HTTP 狀態碼

              showToast("修改完成", this.response);
            } else {
              alert("There was a problem with the request.");
            }
          }
        } catch (e) {
          alert("Caught Exception: " + e.description);
        }
      };

      httpRequest.open("POST", "./allMemModify.php", true);
      httpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      httpRequest.send(sendStr);
    }

    function showToast(heading, message) {
      $.toast({
        text: message,
        heading: heading,
        icon: 'success',
        showHideTransition: 'fade',
        allowToastClose: true,
        hideAfter: 3000,
        stack: 5,
        position: 'top-right',
        textAlign: 'left',
        loader: true,
        loaderBg: '#9ec600',
      });
    }

  <?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
