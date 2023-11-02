<?php
/* Smarty version 4.3.2, created on 2023-11-02 19:53:18
  from 'C:\xampp\htdocs\TPE---WEB2-\templates\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6543f01e7d1b51_20026809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e11870702fa360b89de2d19167ae868dcf1e2a9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE---WEB2-\\templates\\categories.tpl',
      1 => 1698951195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formAddCategories.tpl' => 1,
  ),
),false)) {
function content_6543f01e7d1b51_20026809 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table">
    <thead>
      <tr>
      <th scope='col'>Categoria</th>
      <th scope='col'>Producto</th>
      <th scope='col'>Informacion</th>
      <th scope='col'>Detalles</th>
      <th scope='col'>Borrar</th>
      <th scope='col'>Editar</th>
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
      <td><a href='detalleCategorie/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->ID_categoria;?>
' type='button'>Detalles</a></td>
      <?php if ('verify') {?>
      <td><a href='deleteCategorie/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->ID_categoria;?>
' type='button'>Borrar</a></td> 
      <td><a href='editCategorie<?php echo $_smarty_tpl->tpl_vars['categoria']->value->ID_categoria;?>
/' type='button'>Editar</a></td> 
      <?php }?>
      </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>
    <?php $_smarty_tpl->_subTemplateRender("file:formAddCategories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
