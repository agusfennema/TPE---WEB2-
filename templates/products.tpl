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
      {if verify}
      <td><a href='delete/{$product->ID_producto}' type='button'>Borrar</a></td> 
      <td><a href='edit/{$product->ID_producto}' type='button'>Editar</a></td> 
      {/if}
      </tr>
      {/foreach}
    </tbody>
  </table>
      <h3> Selecciona un producto</h3>
      <form method="POST" action="filter">
            <select name="selected" class="form-selected">                                              
                {foreach from=$products item=$producto }
                    <option value="{$producto->ID_producto}">{$producto->TIPO}</option>
                {/foreach}
                </select>
            <button type="submit">Ver productos</button>
        </form>
  {include file="formAddProduct.tpl"}
  