{include file="header.tpl"}
<table class="table">
    <thead>
      <tr>
      <th scope='col'>Categoria</th>
      <th scope='col'>Producto</th>
      <th scope='col'>Informacion</th>
      <th scope='col'>Detalles</th>
      <th scope='col'>Borrar</th>
      <th scope='col'>Editar</th>
      </tr>
    </thead>
    <tbody>
    {foreach from=$categories item=$categoria}
      <tr>
      <td>{$categoria->ID_categoria}</td>
      <td>{$categoria->TIPO_DE_PRENDA}</td>
      <td>{$categoria->DETALLE}</td>
      <td><a href='detalleCategorie/{$categoria->ID_categoria}' type='button'>Detalles</a></td>
      {if verify}
      <td><a href='deleteCategorie/{$categoria->ID_categoria}' type='button'>Borrar</a></td> 
      <td><a href='editCategorie{$categoria->ID_categoria}/' type='button'>Editar</a></td> 
      {/if}
      </tr>
      {/foreach}
    </tbody>
  </table>
    {include file="formAddCategories.tpl"}