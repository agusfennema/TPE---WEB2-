<?php
/* Smarty version 4.3.2, created on 2023-09-29 21:26:46
  from '/opt/lampp/htdocs/tpe2/TPE---WEB2-/templates/formAddProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651724f61efc17_52772069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65d471bda7da325b5bfdd943b52e6385b9ad8a5d' => 
    array (
      0 => '/opt/lampp/htdocs/tpe2/TPE---WEB2-/templates/formAddProduct.tpl',
      1 => 1696015557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651724f61efc17_52772069 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="form" action="add" method="POST">
    <div class="mb-3">
    <label class="form-label">ID Producto</label>
    <input type="text" name="id_producto" class="form-control">
    </div>
    <div class="mb-3">
    <label class="form-label">Producto</label>
    <input type="text" name="producto" class="form-control">
    </div>
    <div class="mb-3">
    <label class="form-label">TALLE</label>
    <input type="text" name="talle" class="form-control">
    </div>
    <div class="mb-3">
    <label class="form-label">PRECIO</label>
    <input type="text" name="precio" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary mt-2">Agregar Producto</button>
    </form<?php }
}
