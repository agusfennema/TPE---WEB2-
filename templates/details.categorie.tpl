{include file="header.tpl"}
<table class="table">
    <thead>
      <tr>
        <th scope='col'>ID_categoria</th>
        <th scope='col'>Categoria</th>
        <th scope='col'>Informacion</th>
      </tr>
    </thead>
    <tbody>
    {foreach from=$categorieById item=$categorie}
      <tr>
      <td>{$categorie->ID_categoria}</td>
      <td>{$categorie->TIPO_DE_PRENDA}</td>
      <td>{$categorie->DETALLE}</td>
      </tr>
      {/foreach}
    </tbody>
  </table>