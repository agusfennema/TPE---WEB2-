{include file="header.tpl"}

<form action="edit" class="form-edit" method="POST">
    <div>
        <label>Categoria</label>
        <input type="text" name="ID_categoria_fk">
    </div>
    <div>
        <label>TIPO</label>
        <input type="text" name="TIPO">
    </div>
    <div>
        <label>TALLE</label>
        <input type="text" name="TALLE">
    </div>
    <div>
        <label>PRECIO</label>
        <input type="text" name="PRECIO">
    </div>
    <button class="btn" type="submit">Editar Producto</button>
</form>
{include file="footer.tpl"}

