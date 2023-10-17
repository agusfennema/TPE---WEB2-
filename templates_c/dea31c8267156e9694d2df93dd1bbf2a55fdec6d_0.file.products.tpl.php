<?php
/* Smarty version 4.3.2, created on 2023-10-17 02:16:54
  from 'C:\xampp\htdocs\TPE---WEB2-\templates\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652dd276d8d881_30871771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dea31c8267156e9694d2df93dd1bbf2a55fdec6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE---WEB2-\\templates\\products.tpl',
      1 => 1697501812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formAddProduct.tpl' => 1,
  ),
),false)) {
function content_652dd276d8d881_30871771 (Smarty_Internal_Template $_smarty_tpl) {
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
      <?php if ('verify') {?>
      <td><a href='delete/<?php echo $_smarty_tpl->tpl_vars['product']->value->ID_producto;?>
' type='button'>Borrar</a></td> 
      <td><a href='edit/<?php echo $_smarty_tpl->tpl_vars['product']->value->ID_producto;?>
' type='button'>Editar</a></td> 
      <?php }?>
      </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>
      <h3> Selecciona un producto</h3>
      <form method="POST" action="filter">
            <select name="selected" class="form-selected">                                              
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->ID_producto;?>
"><?php echo $_smarty_tpl->tpl_vars['producto']->value->TIPO;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <button type="submit">Ver productos</button>
        </form>
  <?php $_smarty_tpl->_subTemplateRender("file:formAddProduct.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }
}
