<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTPAGE</title>
    <link rel="stylesheet" href="..\css\style.css">
    <link rel="stylesheet" href="..\css\regStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    
</head>
<body>
<?php
include('navbar.php');
?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <h1>Register</h1><br>
            <div class="name">
                <label for="Name">Name:</label><br>
                <input type="name" id="name" >
            </div><br>
            <div class="username">
                <label for="Username">Username:</label><br>
                <input type="username" id="username" >
            </div><br>
            <div class="email">
                <label for="Email">Email:</label><br>
                <input type="email" id="email" >
            </div><br>
           <div class="password">
               <label for="Password">Password:</label><br>
               <input type="password" id="password" >
           </div><br>

        <input type="submit" value="Register" class="btn" id="loginButton" name="registerBtn">
        <br>
            <p id="no-acc-button">Already have an account? <a href="..\html\login.html">Sign in.</a></p>
        </form>
    </main>

<?php
include('controller.php');
include('footer.php');
?>

   
    <script src="..\js\indexJS.js"></script>
    <script src="..\js\validation.js"></script>
</body>
</html