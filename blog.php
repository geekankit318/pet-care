<?php
  session_start();
  require_once('sampleLogin/dbconfig/config.php');
  //phpinfo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>PetCare | Blog</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
jQuery(document).ready(function () {
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<header>
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="index.html"><img src="images/logo.png" alt=""></a> </h1>
      <div class="menu_block">
        <nav>
          <ul class="sf-menu">
            <li class="current"><a href="home.php">Home</a></li>
            <li class="with_ul"><a href="about-us.php">About Us</a>
              <ul>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Archive</a></li>
              </ul>
            </li>
            <li><a href="services.php">Services</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contacts.php">Contacts </a></li>
            <?php 
              if($_SESSION) {
                echo '<li><a href="#">Hi! '; echo $_SESSION['username']; echo '</a>';
                echo '<ul><li><a href="sampleLogin/logout.php">Logout </a></li></ul>';
                echo '</li>';
              } else {
                echo '<li><a href="sampleLogin/login.php">Login </a>';
                  echo '<ul><li><a href="logout.php">Logout </a></li></ul>';
                echo "</li>";
              }
            ?> 
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>
<div class="content pt1">
  <div class="container_12">
    <div class="grid_7">
      <h2>Blog</h2>
      <br>
      <div class="blog"> <img src="images/page4_img1.jpg" alt="" class="img_inner fleft i1">
        <div class="extra_wrapper">
          <div class="text2 col2">Nunc fringilla diam sit amet adipi scingo bibendum turpis. </div>
          Velit feugiat urna etlort pharetra neque nisi ac nunc.Vivamus est quam dapibus ullamcolot rperolty hokibh ullamcorper. </div>
        <div class="clear"></div>
        Praesent quis orci eget diam viverra consequat. Fusce sagittis quam in pulvinar sollicitudin velit velit cursus nibh ullamcorper accumsan sem lectus ut sapien. Donec venenatis posuere velit aty convallis neque ullamcorper quis. Integer posuere ipsum eu risus sollicitudin nec varius eratylo luctus. Fusce fringilla erat ac urna pe llentesque congue. Nunc fringilla diam sit amet adipi scing bibendum turpis velit feugiat urna et pharetra neque nisi ac nunc. Vivamus est quam dapibuslok. <br>
        <a href="#" class="btn">More</a> </div>
      <div class="blog"> <img src="images/page4_img2.jpg" alt="" class="img_inner fleft i1">
        <div class="extra_wrapper">
          <div class="text2 col2">Alunc fringilla diam sit amet adipi scing bibendum turpis velit feugiat urna etlort. </div>
          Wivamus est quam dapibus ullamcolot rperolty hoki. Hibh ullamcorper accufogy msan sem lectus ut sapien. </div>
        <div class="clear"></div>
        Traesent quis orci eget diam viverra consequat. Fusce sagittis quam in pulvinar sollicitudin velit velit cursus nibh ullamcorper accumsan sem lectus ut sapien. Donec venenatis posuere velit aty convallis neque ullamcorper quis. Integer posuere ipsum eu risus sollicitudin nec varius eratylo luctus. Kusce fringilla erat ac urna pe llentesque congue. Ounc fringilla diam sit amet adipi scing bibendum turpis velit feugiat urna et pharetra neque nisi ac nunc. Vivamus est quam dapibuslok. Ullamco rper imperdiet nec euismod ut arcu. Nulla facilisi. Plotiam mauris lorem pulvinar vel. <br>
        <a href="#" class="btn">More</a> </div>
      <div class="blog"> <img src="images/page4_img3.jpg" alt="" class="img_inner fleft i1">
        <div class="extra_wrapper">
          <div class="text2 col2">Bunc ringillo diam sit amet adipi scing bibendum turpis velit feugiat urna ety.</div>
          Qpivamus est quam dapibus ullamcolot rperolty hoki. Kibh ullamcorper accufogy msan sem lectus ut sapien monecjoili. </div>
        <div class="clear"></div>
        Traesent quis orci eget diam viverra consequat. Fusce sagittis quam in pulvinar sollicitudin velit velit cursus nibh ullamcorper accumsan sem lectus ut sapien. Donec venenatis posuere velit aty convallis neque ullamcorper quis. Integer posuere ipsum eu risus sollicitudin nec varius eratylo luctus. Kusce fringilla erat ac urna pe llentesque congue. Ounc fringilla diam sit amet adipi scing bibendum turpis velit feugiat urna et pharetra neque nisi ac nunc. Vivamus est quam dapibuslok. ..ullamco rper imperdiet nec euismod ut arcu. Nulla facilisi. Plotiam mauris lorem pulvinar vel con <br>
        <a href="#" class="btn">More</a> </div>
      <div class="blog"> <img src="images/page4_img4.jpg" alt="" class="img_inner fleft i1">
        <div class="extra_wrapper">
          <div class="text2 col2">Plunc fringilla diam sit amet adipi scing bibendum turpis velit feugiat urna etlort. </div>
          Xamus est quam dapibus ullamcolot rperolty hoki. Lpibh ullamcorper accutol fogy msan sem lectus ut sapienolito lo. Konecjoilih venenatis posuere el. </div>
        <div class="clear"></div>
        Koraesent quis orci eget diam viverra consequat. Fusce sagittis quam in pulvinar sollicitudin velit velit cursus nibh ullamcorper accumsan sem lectus ut sapien. Aonec venenatis posuere velit aty convallis neque ullamcorper quis. Integer posuere ipsum eu risus sollicitudin nec varius eratylo luctus. Pusce fringilla erat ac urna pe llentesque congue. Kunc fringilla diam sit amet adipi scing bibendum turpis velit feugiat urna et pharetra neque nisi ac nunc. Vivamu est quam dapibusloke. ..ullamco rper imperdiet nec euismod ut arcu. Nulla facilisi. Plotiam mauris lorem. <br>
        <a href="#" class="btn">More</a> </div>
    </div>
    <div class="grid_4 prefix_1">
      <h2 class="ic1">Categories</h2>
      <ul class="list1">
        <li> <span></span>
          <div class="extra_wrapper">
            <div class="col1"><a href="#">Tuis posuere consectetur pellente</a></div>
          </div>
        </li>
        <li> <span class="cnt"></span>
          <div class="extra_wrapper">
            <div class="col1"><a href="#">Juuis posuere consectetur pellente</a></div>
          </div>
        </li>
        <li> <span></span>
          <div class="extra_wrapper">
            <div class="col1"><a href="#">Dpuis posuere honsectetur pellentio</a></div>
          </div>
        </li>
        <li> <span class="cnt"></span>
          <div class="extra_wrapper">
            <div class="col1"><a href="#">Kouis losuere honsectetur pellentit</a></div>
          </div>
        </li>
        <li> <span ></span>
          <div class="extra_wrapper">
            <div class="col1"><a href="#">Opuis posuere monsectetur pellentlo</a></div>
          </div>
        </li>
        <li> <span class="cnt"></span>
          <div class="extra_wrapper">
            <div class="col1"><a href="#">Jupuis posuere loonsectetur kellen</a></div>
          </div>
        </li>
        <li> <span class=""></span>
          <div class="extra_wrapper">
            <div class="col1"><a href="#">Kiloiy posuere onsectrytr koelltlo</a></div>
          </div>
        </li>
        <li> <span class="cnt"></span>
          <div class="extra_wrapper">
            <div class="col1"><a href="#">Derfis posuere sectetur golillentlo</a></div>
          </div>
        </li>
        <li> <span class=""></span>
          <div class="extra_wrapper">
            <div class="col1"><a href="#">Hokipuis koloosue jolonsectetur holo</a></div>
          </div>
        </li>
      </ul>
      <h2 class="head1">Recent Posts</h2>
      <ul class="list l2">
        <li> <span>
          <time datetime="2045-01-01">26<span>APR</span></time>
          </span>
          <div class="extra_wrapper">
            <div class="col1"><a href="#">Duis posuere consectetur pellentesqe</a></div>
            Sed nisi turpis, pellentesque at ultricese in dapibus in magna. Nunc easi cipit eu ante. Nullam vitae dolor. <a href="#" class="col2">Read More</a> </div>
        </li>
        <li> <span class="cnt">
          <time datetime="2045-01-01">27<span>APR</span></time>
          </span>
          <div class="extra_wrapper">
            <div class="col1"><a href="#">Kuuis posuere consectetur pellentes</a></div>
            Eed nisi turpis, pellentesque at ultricesy in dapibus. Nunc easi diam risulacerate ut scelerisque et sus ante. <a href="#" class="col2">Read More</a> </div>
        </li>
        <li> <span>
          <time datetime="2045-01-01">28<span>APR</span></time>
          </span>
          <div class="extra_wrapper">
            <div class="col1"><a href="#">Opuis posuere honsctetur pellentesyt</a></div>
            Koed joliko hokino lytocio. Nunc easiloto diam sujo placerat ut scelerisque suyto scipit ante. Ullam ullcper. <a href="#" class="col2">Read More</a></div>
        </li>
        <li> <span class="cnt">
          <time datetime="2045-01-01">29<span>APR</span></time>
          </span>
          <div class="extra_wrapper">
            <div class="col1"><a href="#">Opuis posuere honsctetur pellentesyt</a></div>
            Koed joliko hokino lytocio. Nunc easiloto diam sujo placerat ut scelerisque suyto scipit ante. Ullam ullcper. <a href="#" class="col2">Read More</a></div>
        </li>
      </ul>
    </div>
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
      <p>The PetCare Company &copy; 2017 | <a href="#">Privacy Policy</a> | Design by: <a href="http://geekankit318.github.io">Ankit Dutta</a></p>
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>