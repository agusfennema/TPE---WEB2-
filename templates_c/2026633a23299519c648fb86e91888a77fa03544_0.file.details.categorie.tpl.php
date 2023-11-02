<?php
/* Smarty version 4.3.2, created on 2023-11-02 20:21:42
  from 'C:\xampp\htdocs\TPE---WEB2-\templates\details.categorie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6543f6c6c99098_30879010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2026633a23299519c648fb86e91888a77fa03544' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE---WEB2-\\templates\\details.categorie.tpl',
      1 => 1698952900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6543f6c6c99098_30879010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table">
    <thead>
      <tr>
        <th scope='col'>ID_categoria</th>
        <th scope='col'>Categoria</th>
        <th scope='col'>Informacion</th>
      </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorieById']->value, 'categorie');
$_smarty_tpl->tpl_vars['categorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->do_else = false;
?>
      <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['categorie']->value->ID_categoria;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['categorie']->value->TIPO_DE_PRENDA;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['categorie']->value->DETALLE;?>
</td>
      </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table><?php }
}
