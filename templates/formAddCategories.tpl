<form class="formulario" action="addCategorie" method="POST">
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
    </form>