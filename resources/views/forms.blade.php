<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="assests/css/form.css">
</head>
<body style="display:flex; align-items:center; justify-content:center;">
<div class="login-page">
  <div class="form">
    <form class="register-form" method="POST" action="{{ route('register') }}">
      <h2>Register</h2>
      <input type="text" name="name" placeholder="Full Name *" required/>
      <input type="email" name="email" name placeholder="Email *" required/>
      <input type="password" name="password" placeholder="Password *" required/>
      <input type="password" name="password_confirmation" placeholder="Confirm Password *" required/>
      <button type="submit" class="btn">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Create
      </button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="post" action="savedata.php">
      <h2></i> Login</h2>
      <input type="text" name="email" placeholder="email" required />
      <input type="password" name="password" placeholder="Password" required/>
      <button type="submit" class="btn">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Sign In
      </button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assests/js/form.js"></script>
</body>
</html>

