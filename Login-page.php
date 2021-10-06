
<DOCTYPE>    
<HTML>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <div class="container">
            <form class="form form--hidden" id="createAccount">
                <h1 class="form__title">Create Account</h1>
                <div class="form__message form__message--error"></div>
                <div class="form__input-group">
                    <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username">
                    <td><?=$_SESSION['name']?></td>
                    <div class="form__input-error-message"></div>
                </div> 
                <div class="form__input-group">
                    <input type="password" class="form__input" autofocus placeholder="Password">
                    <td><?=$password?></td>
                    <div class="form__input-error-message"></div>
                </div>
                <div class="form__input-group">
                    <input type="text" class="form__input" autofocus placeholder="Email Address">
                    <td><?=$email?></td>
                    <div class="form__input-error-message"></div>
                </div>
                <div class="form__input-group">
                    <input type="password" class="form__input" autofocus placeholder="Confirm password">
                    <div class="form__input-error-message"></div>
                </div>
                <button class="form__button" href="Home.html" type="submit">Continue</button>
                <p class="form__text">
                    <a class="form__link" href="./" id="linkLogin">Already have an account? Sign in</a>
                </p>
            </form>
        </div>
        <script src="main.js"></script>
    </body>
    
</HTML>