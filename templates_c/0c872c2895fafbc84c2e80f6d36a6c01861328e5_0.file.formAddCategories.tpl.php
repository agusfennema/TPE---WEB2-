<?php
/* Smarty version 4.3.2, created on 2023-10-18 01:48:59
  from 'C:\xampp\htdocs\TPE---WEB2-\templates\formAddCategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652f1d6b3f4609_16752989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c872c2895fafbc84c2e80f6d36a6c01861328e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE---WEB2-\\templates\\formAddCategories.tpl',
      1 => 1697586514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652f1d6b3f4609_16752989 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="formulario" action="addCategorie" method="POST">
    <div>
        <label class="form-label">NUMERO CATEGORIA</label>
        <input type="text" name="ID_categoria" placeholder="Ingrese un num de cat inexistente" class="form-control" required>
    </div>
      <div>
        <label class="form-label">TIPO DE PRENDA</label>
        <input type="text" name="TIPO_DE_PRENDA" placeholder="Ingrese la categoria" class="form-control" required>
    </div>
    <div>
        <label class="form-label">DETALLE</label>
        <input type="text" name="DETALLE" placeholder="Ingrese detalles de la categoria" class="form-control" required>
    </div>
        <button type="submit" class="btn-form-login">Agregar Categoria</button>
    </form><?php }
}
