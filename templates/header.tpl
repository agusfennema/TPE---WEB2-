<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
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
            {if !isset($smarty.session.USER_ID)}
            <button class="btn"><a href="login">Login</a></button>
            {else}
            <button class="btn"><a href="logout">Logout({$smarty.session.USER_EMAIL})</a></button>
            {/if}
        </nav>
    </header>