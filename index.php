<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="description"
      content="Login and Registration Form with HTML, CSS and JavaScript"
    />
    <meta
      name="keywords"
      content="HTML, CSS, JavaScript, Login and Registration Form"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="manifest" href="manifest.json" />
    <link rel="favicon" href="favicon.ico" />
    <title>Login</title>
  </head>
  <body>
    <h1>Hola Mundo</h1>
    <button onclick="generate-nonce.php">Haz clic aquí</button>
    <script nonce="<?php$nonce?>">
      function mostrarMensaje() {
        alert("¡Hola, este es un mensaje desde JavaScript inline!");
      }
    </script>
    <div class="l-form">
      <div class="shape1"></div>
      <div class="shape2"></div>

      <div class="form">
        <img src="assets/img/authentication.svg" alt="" class="form__img" />

        <form action="" class="form__content">
          <h1 class="form__title">Welcome</h1>

          <div class="form__div form__div-one">
            <div class="form__icon">
              <i class="bx bx-user-circle"></i>
            </div>

            <div class="form__div-input">
              <label for="" class="form__label">Username</label>
              <input type="text" class="form__input" />
            </div>
          </div>

          <div class="form__div">
            <div class="form__icon">
              <i class="bx bx-lock"></i>
            </div>
            <div class="form__div-input">
              <label for="" class="form__label">Password</label>
              <input type="password" class="form__input" />
            </div>
          </div>
          <a href="#" class="form__forgot">Forgot Password?</a>

          <input type="submit" class="form__button" value="Login" />

          <div class="form__social">
            <span class="form__social-text">Our login with</span>

            <a href="#" class="form__social-icon"
              ><i class="bx bxl-facebook"></i
            ></a>
            <a href="#" class="form__social-icon"
              ><i class="bx bxl-google"></i
            ></a>
            <a href="#" class="form__social-icon"
              ><i class="bx bxl-instagram"></i
            ></a>
          </div>
        </form>
      </div>
    </div>
    <script src="assets/js/main.js"></script>
  </body>
</html>