<?php
/* Smarty version 4.3.2, created on 2023-10-15 23:49:06
  from 'C:\xampp\htdocs\TPE---WEB2-\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652c5e52eb6ab3_57137315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '883b4388c4a8e555fcec29ca7593a1b45702034a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE---WEB2-\\templates\\header.tpl',
      1 => 1697406542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652c5e52eb6ab3_57137315 (Smarty_Internal_Template $_smarty_tpl) {
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
                </li>
            </ul>
            <?php if (!(isset($_SESSION['USER_ID']))) {?>
            <button class="btn"><a href="login">Login</a></button>
            <?php } else { ?>
            <button class="btn"><a href="logout">Logout(<?php echo $_SESSION['USER_EMAIL'];?>
)</a></button>
            <?php }?>
        </nav>
    </header><?php }
}
