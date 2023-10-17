<?php
/* Smarty version 4.3.2, created on 2023-10-17 15:12:47
  from 'C:\xampp\htdocs\TPE---WEB2-\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652e884fa4ab38_19139273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a03271373f8b0e3f33b361e2ca5dd9cc0b0b2bf8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE---WEB2-\\templates\\home.tpl',
      1 => 1697548364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652e884fa4ab38_19139273 (Smarty_Internal_Template $_smarty_tpl) {
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
        <img src="https://cdn.pixabay.com/photo/2014/08/26/21/48/sweatshirts-428607_1280.jpg" alt="Producto 1">
        <h3>Buzos</h3>
    </div>
    <div class="product">
        <img src="https://cdn.pixabay.com/photo/2016/04/19/13/39/store-1338629_1280.jpg" alt="Producto 2">
        <h3>Remeras</h3>
    </div>
    <div class="product">
        <img src="https://media.istockphoto.com/id/1148893548/es/foto/elegantes-vaqueros-tienda-de-ropa-stands-escaparate-boutique.jpg?s=1024x1024&w=is&k=20&c=ABEdeccmk0lrESSescKAvpd1A6U1371x4MIs3we8f-k=" alt="Producto 3">
        <h3>Pantalones</h3>
    </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
