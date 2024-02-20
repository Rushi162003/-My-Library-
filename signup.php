<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Signup</title>
  <link rel="stylesheet" href="">
</head>
<style>

:root {

/*========== Colors ==========*/
/*Color mode HSL(hue, saturation, lightness)*/
--first-color: hsl(230, 75%, 56%);
--title-color: hsl(230, 75%, 15%);
--text-color: hsl(230, 12%, 40%);
--body-color: hsl(230, 100%, 98%);
--container-color: hsl(230, 100%, 97%);
--border-color: hsl(230, 25%, 80%);

/*========== Font and typography ==========*/
/*.5rem = 8px | 1rem = 16px ...*/
--body-font: "Syne", sans-serif;
--h2-font-size: 1.25rem;
--normal-font-size: .938rem;

/*========== Font weight ==========*/
--font-regular: 400;
--font-medium: 500;
--font-semi-bold: 600;

/*========== z index ==========*/
--z-fixed: 100;
--z-modal: 1000;
}
  body {
    background-color: #FFF3CF;
    /* background-image: url(pexels-ivo-rainha-1261180.jpg); */
    height: 100vh;
    /* width: 100; */
  }


  .nav__signup {
    cursor: pointer;
}

.signup {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 1000;
    background-color: hsla(230, 75%, 15%, .1);
    backdrop-filter: blur(24px);
    -webkit-backdrop-filter: blur(24px);
    /* For safari */
    padding: 8rem 1.5rem 0;
    opacity: 0;
    pointer-events: none;
    transition: opacity .4s;
}

.signup__close {
    position: absolute;
    top: 2rem;
    right: 50rem;
    font-size: 1.5rem;
    color:  hsl(230, 75%, 15%);
    cursor: pointer;
}

:is(.nav__signup):hover {
    color: hsl(230, 75%, 56%);
}

.signup__form,
.signup__group {
    display: grid;
}

.signup__form {
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
    top: 10%;
    left: 30%;
    transform: translateX(-25px) translateY(-25%);
}

.signup__title {
    font-size:  1.25rem;
    color:  hsl(230, 75%, 15%);
}

.signup__group {
    row-gap: 1rem;
}

.signup__label {
    display: block;
    text-align: initial;
    color:  hsl(230, 75%, 15%);
    font-weight: 500;
    margin-bottom: .25rem;
}

.signup__input {
    width: 100%;
    background-color: hsl(230, 100%, 97%);
    border: 2px solid hsl(230, 25%, 80%);
    padding: 1rem;
    border-radius: .5rem;
    color:hsl(230, 12%, 40%);
}

.signup__input::placeholder {
    color:hsl(230, 12%, 40%);
}

.signup__signup {
    margin-bottom: .5rem;
}

.signup__signup a {
    color: hsl(230, 75%, 56%);
}

.signup__forgot {
    display: inline-block;
    color: hsl(230, 75%, 56%);
    margin-bottom: 1.25rem;
}

.signup__button {
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


.show-signup {
    opacity: 1;
    pointer-events: initial;
}

.show-signup .signup__form {
    transform: translateY(0rem);
}
</style>

<body>
<li><a class="ri-user-line nav__signup" id="signup-btn">Signup</a></li> <!-- id and class change -->

<div class="signup" id="signup" onsubmit="checkRadio1()">
      <form action="" class="signup__form">
        <h2 class="signup__title">Sign Up</h2>

        <div class="signup__group">
          <div>
            <label for="text" class="signup__label">Name</label>
            <input type="text" placeholder="Enter your name" id="name" class="signup__input">
          </div>

          <div>
            <label for="numbar" class="signup__label">Mobile No</label>
            <input type="number" placeholder="Write your number" id="number" class="signup__input">
          </div>

          <div>
            <label for="email" class="signup__label">Email</label>
            <input type="email" placeholder="Write your email" id="email" class="signup__input">
          </div>

          <div>
            <label for="password" class="signup__label">Password</label>
            <input type="password" placeholder="Enter your password" id="password" class="signup__input">
          </div>

          <div>
            <input type="radio" value="librarian" name="select" id="librarian">
            <lable style="color: #0a0a0a;"> Librarian </lable>
            <input type="radio" value="student" name="select" id="student">
            <lable style="color: #0a0a0a;"> Student </lable>
          </div>
        </div>

        <div>
          <p class="signup__signup" style="color:  hsl(230, 75%, 56%);">
            You have an already account? <a href="#login">Login</a>
          </p>

          <button type="submit" class="signup__button">Sign Up</button>
        </div>
      </form>

      <i class="ri-close-line signup__close" id="signup-close"><i class="fa-solid fa-xmark"></i></i>
    </div>
  
</body> 
<script>

    const signup = document.getElementById('signup'),
    signupBtn = document.getElementById('signup-btn'),
    signupClose = document.getElementById('signup-close')
  /* signup show */
  signupBtn.addEventListener('click', () => {
    signup.classList.add('show-signup')
  })

  /* signup hidden */
  signupClose.addEventListener('click', () => {
    signup.classList.remove('show-signup')
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