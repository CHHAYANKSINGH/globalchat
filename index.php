<?php  include "layouts/header.php";?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/home7.jpg" alt="Global chat">
      <div class="carousel-caption">
        <h3 style="color: yellow;font-size:200%;">Welcome to our Global chat platform</h3>
        <p style="font-weight: bold;font-size:150%;">Free to use for Everyone!</p>
      </div>
    </div>

    <div class="item">
      <img src="images/home11.jpg" alt="Global network">
      <div class="carousel-caption">
        <h3 style="color: yellow;font-size:250%;">Chat across globe</h3>
        <p style="font-weight: bold;font-size:100%;">You can chat with anyone from any country to any country</p>
      </div>
    </div>

    <div class="item">
      <img src="images/home3.jpg" alt="Versatile">
      <div class="carousel-caption">
        <h3 style="color: yellow;font-size:300%;">Versatile</h3>
        <p  style="font-weight: bold;font-size:100%;">This website is fully versatile.Easy to use on Computer as well as Mobile phones</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<section class="jumbotron text-center">
    <div class="container">
        <img src="images/logo.png" alt="logo" width="120">
        <h1 class="jumbotron-heading"><span id="typed"></span></h1>
        <p style="font-weight: bold;font-size:300%;color:purple">Steps for joining global chat</p>
        <p style="font-size:200%;">Sign-up if you are new user</p>
        <a href="register.php" class="btn btn-primary my-2">Sign-Up</a>
        <p style="font-size:200%;">Login with your email and password</p>
        <a href="login.php" class="btn btn-success my-2">Login</a>
        <p style="font-size:200%;">Click on "Open chat" and start chatting</p>
        </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.9/typed.min.js" async defer></script>
<script>
    window.onload = function () {
        console.log("loaded")
        var typed = new Typed('#typed', {
            strings: ["Welcome to Global Chat", "Free chatting website for everyone"],
            backSpeed: 15,
            smartBackspace: true,
            backDelay: 1200,
            startDelay: 1000,
            typeSpeed: 25,
            loop: true,
        });
    };
</script>

<?php include "layouts/footer.php"?>
</body>
</html>
