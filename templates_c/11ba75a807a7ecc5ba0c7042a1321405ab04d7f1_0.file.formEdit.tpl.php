<?php
/* Smarty version 4.3.2, created on 2023-10-16 00:50:33
  from 'C:\xampp\htdocs\TPE---WEB2-\templates\formEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652c6cb91af473_26799939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11ba75a807a7ecc5ba0c7042a1321405ab04d7f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE---WEB2-\\templates\\formEdit.tpl',
      1 => 1697410203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652c6cb91af473_26799939 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form class="form-edit" method="POST">
    <div>
        <label>Categoria</label>
        <input type="text" name="ID_categoria_fk">
    </div>
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
?>

<?php }
}
