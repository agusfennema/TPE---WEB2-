<?php
/* Smarty version 4.3.2, created on 2023-10-16 22:33:29
  from 'C:\xampp\htdocs\TPE---WEB2-\templates\formAddProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652d9e19ed6893_92659083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c655ae813b0f0647212970ed65f185f353dc888' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE---WEB2-\\templates\\formAddProduct.tpl',
      1 => 1697485582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d9e19ed6893_92659083 (Smarty_Internal_Template $_smarty_tpl) {
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
