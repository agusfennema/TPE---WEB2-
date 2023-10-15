<?php
/* Smarty version 4.3.2, created on 2023-10-04 17:59:04
  from 'C:\xampp\htdocs\TPE-WEB2\templates\loginForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651d8bc884d073_52299004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e9c2273f7965be3f270ff8fee140a03183a1d2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\loginForm.tpl',
      1 => 1696426919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_651d8bc884d073_52299004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="formulario">
    <form action="#" class="sub-form">
        <div class="upper-form">
            <h2>Login Form</h2>
            <label for="username">Username</label><br>
            <input type="text" name="username"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br>
            <div class="btn-login">
                <button type="submit" class="btn-form-login">Login</button>
            </div>
        </div>
        <div class="button-form">
            <div class="no-account">Don't have an account?</div>
            <a href="#" class="signup">Signup</a>
        </div>
    </form>
</div>
<?php }
}
