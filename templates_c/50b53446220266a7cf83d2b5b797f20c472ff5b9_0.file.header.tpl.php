<?php
/* Smarty version 4.3.2, created on 2023-10-04 17:55:18
  from 'C:\xampp\htdocs\TPE-WEB2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651d8ae674e928_11558199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50b53446220266a7cf83d2b5b797f20c472ff5b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\header.tpl',
      1 => 1696434804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651d8ae674e928_11558199 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo&family=Nunito:wght@300&family=Poppins:wght@300&family=Roboto:wght@300&family=Tilt+Neon&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
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
                        <a href="categories">Remeras</a>
                        <a href="categories">Pantalones</a>
                        <a href="categories">Buzos</a>
                        <a href="categories">Camperas</a>
                        <a href="categories">Jeans</a>
                    </div>
                </li>
            </ul>
            <button class="btn"><a href="login">Login</a></button>
        </nav>
    </header><?php }
}
