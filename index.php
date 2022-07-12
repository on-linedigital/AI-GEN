<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <title>AI Generated Images | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://assets.race-life.net/website/img/favicon.ico">
    <link rel="icon" type="image/png" href="https://assets.race-life.net/website/img/favicon.png">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="https://race-life.net">
    <meta name="twitter:title" content="Race-Life // Store">
    <meta name="twitter:description"
        content="Race-Life offers virtual and IRL racing communities for all car enthusiasts.">
    <meta name="twitter:image" content="https://assets.race-life.net/website/img/twitter-img/hub/homepage.png">
    <meta name="twitter:site" content="@racelifenet">
    <meta name="twitter:creator" content="@thefrontlinegen">

    <!-- Import CSS -->
    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        crossorigin="anonymous">

    <!-- Import Javascript -->
    <script type="text/javascript" src="/js/index.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



</head>

<body oncopy="return false" oncut="return false" onpaste="return false">
    <!-- Loading Screen -->
    <div id="loading">
        <img id="" src="./assets/img/loading.png" alt="Loading..." />
    </div>

    <!-- Cookie Popup -->
    <div id="cookiePopup">
        <h4>Cookie Consent</h4>
        <p>Our website uses cookies to provide your browsing experience and relavent informations. Before continuing to
            use our website, you agree & accept of our <a class="cookie_link" href="/privacy-policy">Cookie & Privacy
                Policy</a>.</p>
        <button id="acceptCookie">Accept</button>
    </div>

    <!-- Header -->
    <header id="navbar">
        <nav class="navbar-container container">
            <a href="/"><img id="HEADER_IMAGE"
                    src="./assets/img/header.png" width="150" height="48"
                    onmouseover="hover(this);" onmouseout="unhover(this);" /></a>
            <button type="button" id="navbar-toggle" aria-controls="navbar-menu" aria-label="Toggle menu"
                aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div id="navbar-menu" aria-labelledby="navbar-toggle">
                <ul class="navbar-links">
                    <li class="navbar-item"><a class="navbar-link" href="#about"><i class="fa-brands fa-instagram"></i></a></li>
                   <li class="navbar-item"><a class="navbar-link" href="#about"><i class="fa-brands fa-twitter"></i></a></li>
                   <li class="navbar-item"><a class="navbar-link" href="#about"><i class="fa-solid fa-money-bills"></i></a></li>
                  </ul>
            </div>
        </nav>
    </header>
  
<div class="slider">
  <img class="mySlides" src="./assets/img/1.png">
  <img class="mySlides" src="./assets/img/2.png">
  <img class="mySlides" src="./assets/img/3.png">
  <img class="mySlides" src="./assets/img/4.png">
  <img class="mySlides" src="./assets/img/5.png">
  <img class="mySlides" src="./assets/img/6.png">
</div>
<div class="collections-ctr">
<p class="collections-title">Collections</p>
<div class="collections-img-ctr"><img class="collection-img" src="./assets/img/1.png"/><p class="collection-img-title"/>title</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
  <!--
<div class="nft-container">
<p class="title">We make art, well not us, our AI.</p></div>
        <footer class="footer">
            <div class="footer__addr">
                <a href="https://race-life.net"><img id="FOOTER_IMAGE"
                        src="/a" onmouseover="hover(this);"
                        onmouseout="unhover(this);" /></a>


                <address>
                    <a class="footer__btn" href="mailto:example@gmail.com">Contact Us</a>

                </address>
            </div>

            <ul class="footer__nav">
                <li class="nav__item">
                    <h2 class="nav__title">Media</h2>

                    <ul class="nav__ul">
                        <li>
                            <a href="https://race-life.net/branding">Branding Assets</a>
                        </li>

                        <li>
                            <a href="mailto:press@race-life.net">Get In Touch</a>
                        </li>

                        <li>
                            <a href="https://race-life.net/collab">Collaborations</a>
                        </li>
                    </ul>
                </li>

                <li class="nav__item nav__item--extra">
                    <h2 class="nav__title">Quick Links</h2>

                    <ul class="nav__ul nav__ul--extra">
                        <li>
                            <a href="https://patreon.com/racelifenet">Patreon</a>
                        </li>

                        <li>
                            <a href="https://shop.race-life.net">Shop</a>
                        </li>

                        <li>
                            <a href="https://discord.race-life.net">Discord</a>
                        </li>

                        <li>
                            <a href="https://status.race-life.net">Race-Life Status</a>
                        </li>

                        <li>
                            <a href="/team">Our Team</a>
                        </li>

                        <li>
                            <a href="/rent-a-server">Server Rentals</a>
                        </li>
                    </ul>
                </li>

                <li class="nav__item">
                    <h2 class="nav__title">Legal</h2>

                    <ul class="nav__ul">
                        <li>
                            <a href="/privacy-policy">Privacy Policy</a>
                        </li>

                        <li>
                            <a href="#"></a>
                        </li>

                        <li>
                            <a href="/sitemap.xml">Sitemap</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="legal">
                <p>&copy; <a id="YEAR"></a> <a href="https://race-life.net">Race-Life</a>. All rights reserved.</p>

                <div class="legal__links">
                    <span>Made with <i class="fa-solid fa-heart fa-fade"></i> by <a
                            href="https://genisis-software.net">Genisis Software</a>.</span>
                </div>
            </div>
        </footer> -->

        <!-- Import Javascript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
        <script>
    const navbarToggle = navbar.querySelector("#navbar-toggle");
    const navbarMenu = document.querySelector("#navbar-menu");
    const navbarLinksContainer = navbarMenu.querySelector(".navbar-links");
    let isNavbarExpanded = navbarToggle.getAttribute("aria-expanded") === "true";

const toggleNavbarVisibility = () => {
        isNavbarExpanded = !isNavbarExpanded;
    navbarToggle.setAttribute("aria-expanded", isNavbarExpanded);
};

    navbarToggle.addEventListener("click", toggleNavbarVisibility);

navbarLinksContainer.addEventListener("click", (e) => e.stopPropagation());
    navbarMenu.addEventListener("click", toggleNavbarVisibility);

    // set cookie according to you
    var cookieName= "Race-Life GDPR Compliance";
    var cookieValue="Cookie Banner";
    var cookieExpireDays= 30;

    // when users click accept button
    let acceptCookie= document.getElementById("acceptCookie");
    acceptCookie.onclick= function(){
        createCookie(cookieName, cookieValue, cookieExpireDays);
}

    // function to set cookie in web browser
    let createCookie= function(cookieName, cookieValue, cookieExpireDays){
        let currentDate = new Date();
    currentDate.setTime(currentDate.getTime() + (cookieExpireDays*24*60*60*1000));
    let expires = "expires=" + currentDate.toGMTString();
    document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
    if(document.cookie){
        document.getElementById("cookiePopup").style.display = "none";
  }else{
        alert("We could not save our cookies, please make sure your have cookies enabled for our whole site. If this still doesn't work, email us via: cookies@race-life.net. If our website is being displayed on another site, we can not set cookies. Please open our site in another tab.");
  }

 }

    // get cookie from the web browser
    let getCookie= function(cookieName){
        let name = cookieName + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
    while (c.charAt(0) == ' ') {
        c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
    return "";
}
    // check cookie is set or not
    let checkCookie= function(){
        let check=getCookie(cookieName);
    if(check==""){
        document.getElementById("cookiePopup").style.display = "block";
    }else{

        document.getElementById("cookiePopup").style.display = "none";
    }
}
    checkCookie();
        </script>
        <script>
    $(window).on('load', function () {
        $('#loading').hide();
  })
        </script>
</body>

</html>