<?php
/* Smarty version 4.3.2, created on 2023-10-16 22:18:11
  from 'C:\xampp\htdocs\TPE---WEB2-\templates\formAddCategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652d9a83e8b4e7_77363619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c872c2895fafbc84c2e80f6d36a6c01861328e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE---WEB2-\\templates\\formAddCategories.tpl',
      1 => 1697487480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d9a83e8b4e7_77363619 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="formulario" action="addCategorie" method="POST">
    <div>
        <label class="form-label">Categoria</label>
        <input type="text" name="ID_categoria" class="form-control">
    </div>
      <div>
        <label class="form-label">Tipo de prenda</label>
        <input type="text" name="TIPO_DE_PRENDA" class="form-control">
    </div>
    <div>
        <label class="form-label">Detalle</label>
        <input type="text" name="DETALLE" class="form-control">
    </div>
        <button type="submit" class="btn-form-login">Agregar Categoria</button>
    </form><?php }
}
