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
      <td>{$categoria->DETALLE}</td>
      {if verify}
      <td><a href='deleteCategorie/{$categoria->ID_categoria}' type='button'>Borrar</a></td> 
      <td><a href='editCategorie{$categoria->ID_categoria}/' type='button'>Editar</a></td> 
      {/if}
      </tr>
      {/foreach}
    </tbody>
  </table>
  <h3> Selecciona una categoria para ver los productos existentes</h3>
  <form method="POST" action="filter">
        <select name="selected" class="form-selected">                                              
            {foreach from=$categories item=$categoria }
                <option value="{$categoria->ID_categoria}">{$categoria->TIPO_DE_PRENDA}</option>
            {/foreach}
            </select>
        <button type="submit">Ver productos</button>
    </form>
    {include file="formAddCategories.tpl"}