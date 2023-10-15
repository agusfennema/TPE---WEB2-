{include file = "header.tpl"}
<h1>Campeones por Facciones</h1>
<ul>
{foreach from=$ProductAndCategorie item=$product}
    <li>{$product->TIPO}</li>
    
{/foreach}
</ul>
<a href="categories" type="button" class="btn btn-link">Volver a la tabla</a>
{include file = "footer.tpl"}