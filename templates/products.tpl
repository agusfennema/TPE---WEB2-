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
    {foreach from=$products item=$product}
      <tr>
      <td>{$product->ID_producto}</td>
      <td>{$product->TIPO}</td>
      <td>{$product->TALLE}</td>
      <td><span>$</span>{$product->PRECIO}</td>
      <td><a href='detalle/{$product->ID_producto}' type='button'>Detalles</a></td>
<<<<<<< HEAD
      {if verify}
      <td><a href='delete/{$product->ID_producto}' type='button'>Borrar</a></td> 
      <td><a href='edit/{$product->ID_producto}' type='button'>Editar</a></td> 
      {/if}
=======
      <td><a href='delete/{$product->ID_producto}' type='button'>Borrar</a></td> 
      <td><a href='edit/{$product->ID_producto}' type='button'>Editar</a></td> 
>>>>>>> 7606daf98209a674aa9b47fb707f6d1a4ff710a0
      </tr>
      {/foreach}
    </tbody>
  </table>
  {include file="formAddProduct.tpl"}
  