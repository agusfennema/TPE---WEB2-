<?php
/* Smarty version 4.3.2, created on 2023-10-04 17:46:52
  from '/opt/lampp/htdocs/tpe2/TPE---WEB2-/templates/formAddProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651d88ec8af986_23549299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65d471bda7da325b5bfdd943b52e6385b9ad8a5d' => 
    array (
      0 => '/opt/lampp/htdocs/tpe2/TPE---WEB2-/templates/formAddProduct.tpl',
      1 => 1696434217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651d88ec8af986_23549299 (Smarty_Internal_Template $_smarty_tpl) {
?> <!-- Se crea un formulario para insertar nuevos productos a la tabla  -->
<form class="formulario" action="add" method="POST">
    <div >
        <label class="form-label">ID Producto</label>
        <input type="text" name="ID_producto" class="form-control">
    </div>
    <div>
        <label class="form-label">ID Categoria</label>
        <input type="text" name="ID_categoria_fk" class="form-control">
    </div>
      <div>
        <label class="form-label">Tipo</label>
        <input type="text" name="TIPO" class="form-control">
    </div>
    <div>
        <label class="form-label">TALLE</label>
        <input type="text" name="TALLE" class="form-control">
    </div>
    <div>
        <label class="form-label">PRECIO</label>
        <input type="text" name="PRECIO" class="form-control">
    </div>
        <button type="submit" class="btn-form-login">Agregar Producto</button>
    </form><?php }
}
