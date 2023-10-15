<?php
/* Smarty version 4.3.2, created on 2023-10-15 23:53:56
  from 'C:\xampp\htdocs\TPE---WEB2-\templates\loginForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652c5f74df7277_40413574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85f09892fe943115f8e5d0bc9d83c4f80e8c204f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE---WEB2-\\templates\\loginForm.tpl',
      1 => 1697047068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_652c5f74df7277_40413574 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="formulario">
    <form action="validate" method="POST" class="sub-form">
        <div class="upper-form">
            <h2>Login Form</h2>
            <label for="username">Username</label><br>
            <input type="text" name="email"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br>
            <div class="btn-login">
                <button type="submit" class="btn-form-login">Login</button>
            </div>
        </div>
        <div class="button-form">
            <div class="no-account">Don't have an account?</div>
            <a href="validate" class="signup">Signup</a>
        </div>
    </form>
</div>
<?php }
}
