<?php
/* Smarty version 4.3.2, created on 2023-10-15 23:48:31
  from 'C:\xampp\htdocs\TPE---WEB2-\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652c5e2f163ef6_93328787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a03271373f8b0e3f33b361e2ca5dd9cc0b0b2bf8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE---WEB2-\\templates\\home.tpl',
      1 => 1696428908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652c5e2f163ef6_93328787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="hero">
    <div class="hero-content">
        <h1>ANNYVIA</h1>
        <p>Encuentra las últimas tendencias en moda</p>
        <button class="shop-btn">Comprar Ahora</button>
    </div>
</section>

<section class="featured-products">
    <h2>Productos Destacados</h2>
    <div class="product">
        <img src="product1.jpg" alt="Producto 1">
        <h3>Producto 1</h3>
        <p>Descripción del producto 1.</p>
    </div>
    <div class="product">
        <img src="product2.jpg" alt="Producto 2">
        <h3>Producto 2</h3>
        <p>Descripción del producto 2.</p>
    </div>
    <div class="product">
        <img src="product3.jpg" alt="Producto 3">
        <h3>Producto 3</h3>
        <p>Descripción del producto 3.</p>
    </div>
    <div class="product">
        <img src="product4.jpg" alt="Producto 4">
        <h3>Producto 4</h3>
        <p>Descripción del producto 4.</p>
    </div>
    <div class="product">
        <img src="product5.jpg" alt="Producto 5">
        <h3>Producto 5</h3>
        <p>Descripción del producto 5.</p>
    </div>
    <div class="product">
        <img src="product6.jpg" alt="Producto 6">
        <h3>Producto 6</h3>
        <p>Descripción del producto 6.</p>
    </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
