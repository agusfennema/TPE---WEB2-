{include file="header.tpl"}
<table class="table">
    <thead>
      <tr>
      <th scope='col'>#</th>
      <th scope='col'>Producto</th>
      <th scope='col'>Talle</th>
      <th scope='col'>Precio</th>
      <th scope='col'></th>
      <th scope='col'></th>
      <th scope='col'></th>
      </tr>
    </thead>
    <tbody>
    {foreach from=$categories item=$categoria}
      <tr>
      <td>{$categoria->ID_categoria}</td>
      <td>{$categoria->TIPO_DE_PRENDA}</td>
      <td><a href='detalle/{$product->ID_producto}' type='button'>Detalles</a></td>
      </tr>
      {/foreach}
    </tbody>
  </table>