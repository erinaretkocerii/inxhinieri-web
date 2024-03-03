<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTPAGE</title>
    <link rel="stylesheet" href="..\css\style.css">
    <link rel="stylesheet" href="..\css\loginStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    
</head>
<body>
<?php  include('../snippet/navbar.php');?>
    <main>
        <form action="">
            <h1>Login</h1><br>
           <div class="email">
               <label for="Email">Email:</label><br>
               <input type="email" id="email" >
           </div><br>
           <div class="password">
            <label for="Password">Password:</label><br>
            <input type="password" id="password" >
        </div><br>
        <input type="submit" value="Login" class="btn" id="loginButton">
        <br>
            <p id="no-acc-button">Don't have an account? <a href="..\html\register.html">Sign up.</a></p>
        </form>
    </main>
    <?php  include('../snippet/footer.php');?>
   
</body>
</html>