<?php
/* Smarty version 4.3.2, created on 2023-10-04 15:54:41
  from 'C:\xampp\htdocs\TPE-WEB2\templates\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651d6ea1cdf418_53528761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9659a0810c6feee5763df7b86948bf3ff9de008f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\categories.tpl',
      1 => 1696274356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_651d6ea1cdf418_53528761 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table">
    <thead>
      <tr>
      <th scope='col'>#</th>
      <th scope='col'>Producto</th>
      <th scope='col'>Talle</th>
      <th scope='col'>Precio</th>
      <th scope='col'></th>
      <th scope='col'></th>
      <th scope='col'></th>
      </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
      <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->ID_categoria;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->TIPO_DE_PRENDA;?>
</td>
      <td><a href='detalle/<?php echo $_smarty_tpl->tpl_vars['product']->value->ID_producto;?>
' type='button'>Detalles</a></td>
      </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table><?php }
}
