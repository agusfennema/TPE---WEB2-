<?php
/* Smarty version 4.3.2, created on 2023-09-29 14:56:40
  from '/opt/lampp/htdocs/tpe2/TPE---WEB2-/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6516c988e4b546_88611903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36d39a8cad7a473ac8dc5f3f11742582dde28855' => 
    array (
      0 => '/opt/lampp/htdocs/tpe2/TPE---WEB2-/templates/home.tpl',
      1 => 1695992196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6516c988e4b546_88611903 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="../TPE---WEB2-/images/tienda-ropa-borrosa-centro-comercial.jpg" id="carousel1" class="d-block w-100 h-50" alt="imagen">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <button type="button" class="btn btn-dark">Dark</button>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="../TPE---WEB2-/images/hombre-desenfocado-eligiendo-camisa-barandilla-tienda.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <button type="button" class="btn btn-dark">Dark</button>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../TPE---WEB2-/images/tienda-ropa-efecto-borroso.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <button type="button" class="btn btn-dark">Dark</button>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</body>
</html><?php }
}
