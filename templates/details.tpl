{include file="header.tpl"}
<table class="table">
    <thead>
      <tr>
        <th scope='col'>Categoria</th>
        <th scope='col'>Producto</th>
        <th scope='col'>Tipo</th>
        <th scope='col'>Talle</th>
        <th scope='col'>Precio</th>
      </tr>
    </thead>
    <tbody>
    {foreach from=$productById item=$product}
      <tr>
      <td>{$product->ID_categoria_fk}</td>
      <td>{$product->ID_producto}</td>
      <td>{$product->TIPO}</td>
      <td>{$product->TALLE}</td>
      <td><span>$</span>{$product->PRECIO}</td>
      </tr>
      {/foreach}
    </tbody>
  </table>
