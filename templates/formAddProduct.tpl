 <!-- Se crea un formulario para insertar nuevos productos a la tabla  -->
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
    </form>