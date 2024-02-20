<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Login</title>
  <link rel="stylesheet" href="">
</head>
<style>
  body {
    background-color: #FFF3CF;
    /* background-image: url(pexels-ivo-rainha-1261180.jpg); */
    height: 100vh;
    /* width: 100; */
  }

  /* login details  */

.nav__login {
    cursor: pointer;
}

.login {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index:1000;
    background-color: hsla(230, 75%, 15%, .1);
    backdrop-filter: blur(24px);
    -webkit-backdrop-filter: blur(24px);
    /* For safari */
    padding: 8rem 1.5rem 0;
    opacity: 0;
    pointer-events: none;
    transition: opacity .4s;
}

.login__close {
    position: absolute;
    top: 2rem;
    right: 50rem;
    font-size: 1.5rem;
    color:  hsl(230, 75%, 15%);
    cursor: pointer;
}

:is(.nav__login):hover {
    color: hsl(230, 75%, 56%);
}

.login__form,
.login__group {
    display: grid;
}

.login__form {
    background-color: hsl(230, 100%, 97%);
    padding: 2rem 1.5rem 2.5rem;
    box-shadow: 0 8px 32px hsla(230, 75%, 15%, .2);
    border-radius: 1rem;
    row-gap: 1.25rem;
    text-align: center;
    transform: translateY(-1rem);
    transition: transform .4s;
    width: 33%;
    height: 80;
    position: absolute;
    top: 20%;
    left: 30%;
    transform: translateX(-25px) translateY(-25%);
}

.login__title {
    font-size:1.25rem;
    color:  hsl(230, 75%, 15%);
}

.login__group {
    row-gap: 1rem;
}

.login__label {
    display: block;
    text-align: initial;
    color:  hsl(230, 75%, 15%);
    font-weight: 500;
    margin-bottom: .25rem;
}

.login__input {
    width: 100%;
    background-color: hsl(230, 100%, 97%);
    border: 2px solid hsl(230, 25%, 80%);
    padding: 1rem;
    border-radius: .5rem;
    color:  hsl(230, 12%, 40%);
}

.login__input::placeholder {
    color:  hsl(230, 12%, 40%);
}

.login__signup {
    margin-bottom: .5rem;
}

.login__signup a {
    color: hsl(230, 75%, 56%);
}

.login__forgot {
    display: inline-block;
    color: hsl(230, 75%, 56%);
    margin-bottom: 1.25rem;
}

.login__button {
    display: inline-block;
    background-color: hsl(230, 75%, 56%);
    width: 100%;
    color: #fff;
    font-weight: 600;
    padding: 1rem;
    border-radius: .5rem;
    cursor: pointer;
    transition: box-shadow .4s;
}

.login__button:hover {
    box-shadow: 0 4px 24px hsla(230, 75%, 40%, .4);
}

/* Show login */
.show-login {
    opacity: 1;
    pointer-events: initial;
}

.show-login .login__form {
    transform: translateY(0rem);
}

</style>

<body>
<li><a class="ri-user-line nav__login" id="login-btn">Login</a></li> <!-- id and class change -->

  <div class="login" id="login" onsubmit="checkRadio()">
    <form action="" class="login__form">
      <h2 class="login__title">Log In</h2>

      <div class="login__group">
        <div>
          <label for="email" class="login__label">Email</label>
          <input type="email" placeholder="Write your email" id="email" class="login__input">
        </div>

        <div>
          <label for="password" class="login__label">Password</label>
          <input type="password" placeholder="Enter your password" id="password" class="login__input">
        </div>

        <div>
          <input type="radio" value="librarian" name="select" id="librarian">
          <lable style="color: #0a0a0a;"> Librarian </lable>
          <input type="radio" value="student" name="select" id="student">
          <lable style="color: #0a0a0a;"> Student </lable>
        </div>
      </div>

      <div>
        <p class="login__signup" style="color:  hsl(230, 75%, 56%);">
          You do not have an account? <a href="#">Sign up</a>
        </p>

        <a href="#" class="login__forgot">
          You forgot your password
        </a>

        <button type="submit" class="login__button">Log In</button>
      </div>
    </form>

    <i class="ri-close-line login__close" id="login-close"><i class="fa-solid fa-xmark"></i></i>
  </div>
</body>
<script>
const login = document.getElementById('login'),
    loginBtn = document.getElementById('login-btn'),
    loginClose = document.getElementById('login-close')
  /* Login show */
  loginBtn.addEventListener('click', () => {
    login.classList.add('show-login')
  })
  
  /* Login hidden */
  loginClose.addEventListener('click', () => {
    login.classList.remove('show-login')
  })


  function checkbox() {
    if (document.getElementById("librarian").checked) {
      window.open("#");
    } else if (document.getElementById("student").checked) {
      window.open("#");
    } else {
      alert("Please checked the checkbox");

    }
  }
</script>

</html>