<?php
/* Smarty version 4.3.2, created on 2023-11-02 21:25:08
  from 'C:\xampp\htdocs\TPE---WEB2-\templates\formAddProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_654405a43b97e5_65548201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c655ae813b0f0647212970ed65f185f353dc888' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE---WEB2-\\templates\\formAddProduct.tpl',
      1 => 1698955675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_654405a43b97e5_65548201 (Smarty_Internal_Template $_smarty_tpl) {
?> <!-- Se crea un formulario para insertar nuevos productos a la tabla  -->
<form class="formulario" action="add" method="POST">
    <div>
        <label class="form-label">NUMERO CATEGORIA</label>
        <select name="ID_categoria_fk" class="form-control"> 
    <!--acomodar esto para que no sea hardcodeado-->
            <option value="1">1 - Remeras</option>
            <option value="2">2 - Medias</option>
            <option value="11">11 - Camperas</option>
            <option value="12">12 - Pantalon</option>
            <option value="13">13 - Buzos</option>
        </select>

<!-- HABRIA QUE HACERLO ASI PERO NO ANDA!!!
<select class="form-control" id="cliente" name="cliente" required>
    <?php echo '<?php'; ?>
 foreach ($clientes as $cliente) { <?php echo '?>'; ?>

        <option value="<?php echo '<?'; ?>
= $cliente->id_cliente; <?php echo '?>'; ?>
"><?php echo '<?'; ?>
= $cliente->nombre; <?php echo '?>'; ?>
</option>
    <?php echo '<?php'; ?>
 } <?php echo '?>'; ?>

</select> -->

    </div>
      <div>
        <label class="form-label">TIPO</label>
        <input type="text" name="TIPO" placeholder="Ingrese un tipo de prenda" class="form-control" required>
    </div>
    <div>
        <label class="form-label">TALLE</label>
        <input type="text" name="TALLE" class="form-control" required>
    </div>
    <div>
        <label class="form-label">PRECIO</label>
        <input type="text" name="PRECIO" class="form-control" required>
    </div>
        <button type="submit" class="btn-form-login">Agregar Producto</button>
    </form><?php }
}
