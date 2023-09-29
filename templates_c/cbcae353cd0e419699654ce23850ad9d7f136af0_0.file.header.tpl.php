<?php
/* Smarty version 4.3.2, created on 2023-09-29 16:25:28
  from '/opt/lampp/htdocs/tpe2/TPE---WEB2-/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6516de58b91cd2_11368986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbcae353cd0e419699654ce23850ad9d7f136af0' => 
    array (
      0 => '/opt/lampp/htdocs/tpe2/TPE---WEB2-/templates/header.tpl',
      1 => 1695997525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516de58b91cd2_11368986 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Annyvia</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">ANNYVIA</div>
            <ul class="nav-list">
                <li><a href="home">Home</a></li>
                <li><a href="products">Products</a></li>
                <li class="dropdown">
                    <a href="categories">Categories</a>
                    <div class="dropdown-content">
                        <a href="#">Category 1</a>
                        <a href="#">Category 2</a>
                        <a href="#">Category 3</a>
                    </div>
                </li>
            </ul>
            <button class="btn">Login</button>
        </nav>
    </header><?php }
}
