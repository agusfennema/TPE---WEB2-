<?php
/* Smarty version 4.3.2, created on 2023-10-12 00:00:08
  from '/opt/lampp/htdocs/tpe2/TPE---WEB2-/templates/loginForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65271ae84a1644_57737586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb29faa54f6d28d3daae1376ee5c38dbdc6caa2b' => 
    array (
      0 => '/opt/lampp/htdocs/tpe2/TPE---WEB2-/templates/loginForm.tpl',
      1 => 1697061469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_65271ae84a1644_57737586 (Smarty_Internal_Template $_smarty_tpl) {
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
