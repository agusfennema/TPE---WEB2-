<?php
/* Smarty version 4.3.2, created on 2023-10-15 23:48:35
  from 'C:\xampp\htdocs\TPE---WEB2-\templates\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652c5e33c28f77_59836073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e11870702fa360b89de2d19167ae868dcf1e2a9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE---WEB2-\\templates\\categories.tpl',
      1 => 1697318962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_652c5e33c28f77_59836073 (Smarty_Internal_Template $_smarty_tpl) {
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
      <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->DETALLE;?>
</td>
      </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>
  <h3> Selecciona una categoria</h3>
  <form method="POST" action="filter">
        <select name="selected" class="form-selected">                                              
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->ID_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->TIPO_DE_PRENDA;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        <button type="submit"> Elegir </button>
    </form><?php }
}
