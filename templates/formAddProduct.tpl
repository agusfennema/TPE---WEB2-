 <!-- Se crea un formulario para insertar nuevos productos a la tabla  -->
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
    <?php foreach ($clientes as $cliente) { ?>
        <option value="<?= $cliente->id_cliente; ?>"><?= $cliente->nombre; ?></option>
    <?php } ?>
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
    </form>