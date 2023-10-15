<?php
/* Smarty version 4.3.2, created on 2023-10-15 02:56:53
  from '/opt/lampp/htdocs/tpe2/TPE---WEB2-/templates/formAddProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652b38d55a1946_81307525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65d471bda7da325b5bfdd943b52e6385b9ad8a5d' => 
    array (
      0 => '/opt/lampp/htdocs/tpe2/TPE---WEB2-/templates/formAddProduct.tpl',
      1 => 1697331406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652b38d55a1946_81307525 (Smarty_Internal_Template $_smarty_tpl) {
?> <!-- Se crea un formulario para insertar nuevos productos a la tabla  -->
<form class="formulario" action="add" method="POST">
    <div>
        <label class="form-label">Categoria</label>
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
