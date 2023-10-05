<?php
/* Smarty version 4.3.2, created on 2023-10-04 23:39:21
  from '/opt/lampp/htdocs/tpe2/TPE---WEB2-/templates/formEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651ddb89f358f3_24909192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bb0beb520ea42f5365f96c0a922da36676c3fa0' => 
    array (
      0 => '/opt/lampp/htdocs/tpe2/TPE---WEB2-/templates/formEdit.tpl',
      1 => 1696455560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_651ddb89f358f3_24909192 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form class="form" method="POST">
    <div>
        <label>TIPO</label>
        <input type="text" name="TIPO">
    </div>
    <div>
        <label>TALLE</label>
        <input type="text" name="TALLE">
    </div>
    <div>
        <label>PRECIO</label>
        <input type="text" name="PRECIO">
    </div>
    <button class="btn" type="submit">Editar Producto</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
