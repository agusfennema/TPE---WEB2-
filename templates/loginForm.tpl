{include file="header.tpl"}

<div class="formulario">
    <form action="validate" method="POST" class="sub-form">
        <div class="upper-form">
            <h2>Login Form</h2>
            <label for="username">Username</label><br>
            <input type="text" name="email"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br>
            <div class="btn-login">
                <button type="submit" class="btn-form-login">Login</button>
            </div>
        </div>
        <div class="button-form">
            <div class="no-account">Don't have an account?</div>
            <a href="validate" class="signup">Signup</a>
        </div>
    </form>
</div>
