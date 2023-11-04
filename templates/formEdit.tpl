<?php require_once 'templates/header.tpl'; ?>

<form action="updateProduct/<?= $products->ID_producto; ?>" method="post" required>
    <label for="tipo">TIPO:</label>
    <input type="text" class="form-control" id="TIPO" name="TIPO" value="<?= $products->TIPO; ?>" required>

    <label class="form-label" for="talle">TALLE:</label>
    <input type="text" class="form-control" id="TALLE" name="TALLE" value="<?= $products->TALLE; ?>" required>


    <label for="precio">PRECIO:</label>
    <input type="number" class="form-control" id="PRECIO" name="PRECIO" value="<?= $products->PRECIO; ?>" required>

    <button class="btn btn-success" type="submit">Actualizar producto</button>
</form>
<?php require_once 'templates/footer.tpl'; ?>