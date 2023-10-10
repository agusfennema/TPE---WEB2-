<?php
/* Smarty version 4.3.2, created on 2023-10-09 21:31:03
  from '/opt/lampp/htdocs/tpe2/TPE---WEB2-/templates/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652454f7440a28_73506310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d8e7c9b40bd23cff522df4e4dfdf68b41e6e79b' => 
    array (
      0 => '/opt/lampp/htdocs/tpe2/TPE---WEB2-/templates/products.tpl',
      1 => 1696879856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formAddProduct.tpl' => 1,
  ),
),false)) {
function content_652454f7440a28_73506310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ('logged') {?>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
      <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['product']->value->ID_producto;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['product']->value->TIPO;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['product']->value->TALLE;?>
</td>
      <td><span>$</span><?php echo $_smarty_tpl->tpl_vars['product']->value->PRECIO;?>
</td>
      <td><a href='detalle/<?php echo $_smarty_tpl->tpl_vars['product']->value->ID_producto;?>
' type='button'>Detalles</a></td>
      <td><a href='delete/<?php echo $_smarty_tpl->tpl_vars['product']->value->ID_producto;?>
' type='button'>Borrar</a></td> 
      <td><a href='edit/<?php echo $_smarty_tpl->tpl_vars['product']->value->ID_producto;?>
' type='button'>Editar</a></td>
      </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>
  <?php $_smarty_tpl->_subTemplateRender("file:formAddProduct.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }
}
}
