<?php
/* Smarty version 4.3.2, created on 2023-10-15 03:23:06
  from '/opt/lampp/htdocs/tpe2/TPE---WEB2-/templates/filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652b3efa0545e4_34820947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83f7af5f6a6d4c7d3cc2bb30c8e59359cc336376' => 
    array (
      0 => '/opt/lampp/htdocs/tpe2/TPE---WEB2-/templates/filter.tpl',
      1 => 1697332976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652b3efa0545e4_34820947 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Campeones por Facciones</h1>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ProductAndCategorie']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['product']->value->TIPO;?>
</li>
    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<a href="categories" type="button" class="btn btn-link">Volver a la tabla</a>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
