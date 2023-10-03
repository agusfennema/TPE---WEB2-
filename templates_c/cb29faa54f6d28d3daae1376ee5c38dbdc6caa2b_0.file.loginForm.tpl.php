<?php
/* Smarty version 4.3.2, created on 2023-10-03 18:21:58
  from '/opt/lampp/htdocs/tpe2/TPE---WEB2-/templates/loginForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651c3fa63b3c24_65332405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb29faa54f6d28d3daae1376ee5c38dbdc6caa2b' => 
    array (
      0 => '/opt/lampp/htdocs/tpe2/TPE---WEB2-/templates/loginForm.tpl',
      1 => 1696350041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_651c3fa63b3c24_65332405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="form">
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
</div><?php }
}
