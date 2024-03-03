<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="..\css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="..\css\aboutStyle.css">
    <link rel="stylesheet" href="..\css\slider.css">s
</head>
<body>
<header>
        <div class="container">
            <div class="navbar">
                
                <nav>
                    <ul id="menuItems">
                        <li><a href="..\html\index.html">Home</a></li>
                        <li><a href="">Books</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="..\html\about.html">About Us</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </nav>
                
            </div>
        </div>

</div>

</header>

    
<main>

    <h1>Welcome to the Bookstore</h1>
    <div class="slider">
        <div class="sliderImages">
        <img src="..\Img\books.jpg" alt=""><img src="..\Img\books2.jpg" alt=""><img src="..\Img\books3.jpg" alt="">
        </div>
        <div class="buttons">
            <label onclick="showPht1()">1</label>
            <label onclick="showPht2()">2</label>
            <label onclick="showPht3()">3</label>

        </div>
        
        <br>
        
    </div>
    <div class="text">
        <h1>About Us</h1>
        <p>We are a small startup company based in Kosovo. We belive that books are essential for human developement and are a grat source of knowledge. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore ad possimus deserunt provident eveniet iusto! Provident magnam sit ad qui quod expedita consequatur minima optio iure illo. Nisi, neque quod?</p>
        <p><strong>Need more information?<a href="..\html\contact.html">  Contact us.</a></strong> </p>  
        </div>
</main>
  

<?php
include('footer.php');
?>
    <script src="..\js\indexJS.js"></script>
    <script>
        var pht1 = document.querySelector("img");
        function showPht1() {
            pht1.style.marginLeft="0";
        }
        function showPht2() {
            pht1.style.marginLeft="-33%";
        }
        function showPht3() {
            pht1.style.marginLeft="-66%";
        }
    </script>
</body>
</html