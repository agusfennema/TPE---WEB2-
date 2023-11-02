{include file="header.tpl"}

<table class="tableProduct">
    <thead>
      <tr>
      <th class='col'>#</th>
      <th scope='col'>Categoria</th>
      <th scope='col'>Producto</th>
      <th scope='col'>Talle</th>
      <th scope='col'>Precio</th>
      <th scope='col'></th>
      <th scope='col'></th>
      <th scope='col'></th>
      </tr>
    </thead>
    <tbody>
    {foreach from=$products item=$product}
      <tr>
        <td>{$product->ID_categoria_fk}</td>
        <td>{$product->ID_producto}</td>
        <td>{$product->TIPO}</td>
        <td>{$product->TALLE}</td>
      <td><span>$</span>{$product->PRECIO}</td>
      <td><a href='detalle/{$product->ID_producto}' type='button'>Detalles</a></td>
      {if verify}
      <td><a href='delete/{$product->ID_producto}' type='button'>Borrar</a></td> 
      <td><a href='edit/{$product->ID_producto}' type='button'>Editar</a></td> 
      {/if}
      </tr>
      {/foreach}
    </tbody>
  </table>
  {include file="formAddProduct.tpl"}
  