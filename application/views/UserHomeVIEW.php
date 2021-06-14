<!DOCTYPE html>
<html>
<title>D'BLOUN</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="https://jmyvda.dm.files.1drv.com/y4pqdSOzMaoEntXeWMfigYWoBd0WBESYzQVbd57TXMukIwJF28-By70cDEjL5g2ojloJaJCzT7jMGWL4pIAcCjs-MTyeRnjtoW7OmTQE0iDG8oTKfdnoJ4n2hb_qWibJDvo-Ewc_o3pWpNckbqacg11RHcmNky1sZzOitcXTYsaKsi7lFezgr8uPgISCProGyBriJHelOQZuR5gEdsA8SeS1g/D%27Bloun%20Logo.png"/>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('https://i.redd.it/2zap1jt56tm41.jpg');
  min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("https://i.redd.it/ic5s4xjpzok31.jpg");
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url("https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/30ad1b63-8948-4565-8aad-2ce668b4d388/dcgmkhp-8a9e0e96-3c01-44d2-9ad1-191cf7632157.jpg/v1/fill/w_1024,h_1536,q_75,strp/kirito___ordinal_scale_by_jake_peter_pan_dcgmkhp-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTUzNiIsInBhdGgiOiJcL2ZcLzMwYWQxYjYzLTg5NDgtNDU2NS04YWFkLTJjZTY2OGI0ZDM4OFwvZGNnbWtocC04YTllMGU5Ni0zYzAxLTQ0ZDItOWFkMS0xOTFjZjc2MzIxNTcuanBnIiwid2lkdGgiOiI8PTEwMjQifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.Crub3NEwBepwtzmyGyLP0OJ86ilsP6EPvIyCrZ5b-04");
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">BERANDA</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> TENTANG</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PRODUK</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> MASUK</a>
    
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">TENTANG</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PRODUK</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">MASUK</a>
    
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">TOKO <span class="w3-hide-small">JAKET</span> D'BLOUN</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">TENTANG KAMI</h3>
  <p class="w3-center"><em>Kelompok</em></p>
  
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><i class="fa fa-user w3-margin-right"></i>FSI UNJANI</b></p><br>
      <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t1.6435-9/83868279_113438276884007_6728300237527449600_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=09cbfe&_nc_eui2=AeHhJmTxovQA9NEqE2XDSoY2SDXBreQPWIFINcGt5A9YgfG-yGqnyip0g_K6nDHui8Ln8BfuufEOTHiqpbwGlQpG&_nc_ohc=kC7xcy2GpmoAX8R6tqV&_nc_ht=scontent.fbdo9-1.fna&oh=24ffbabfcbe3ded920e969e0facfc9e4&oe=60CBE4B2" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Fakultas Sains dan Informatika UNJANI" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>3411141151 Rangga Kusumah Cokro Suyitno</p>
      <p>3411171004 Rachma Dhian Agusputranto</p>
      <p>3411171010 Yanuar Ikhsan Saputra</p>
      <p>3411171021 Ghiffary Naufal</p>
    </div>
  </div>
  
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">14+</span><br>
    Merek Terkenal Yang Bekerja Sama
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">55+</span><br>
    Desain Original
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">89+</span><br>
    Ulasan Positif Kurator Ternama
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">1.500.000+</span><br>
    Pengguna Aktif
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">DESAIN JAKET</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">PRODUK KAMI</h3>
  

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="https://www.belstaff.com/dw/image/v2/BDNW_PRD/on/demandware.static/-/Sites-belstaff_master_catalog/default/dw6a889941/products/KELLAND_JACKET_TARP_71020815C61N015860132_LK.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Belstaff">
    </div>

    <div class="w3-col m3">
      <img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/47e22b5a-9cf8-4b46-bf50-f2417e9062f4/sportswear-reissue-williwaw-woven-jacket-vlXn18.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Nike">
    </div>

    <div class="w3-col m3">
      <img src="https://media.gucci.com/style/DarkGray_Center_0_0_2400x2400/1616007603/655469_XJDHN_4120_002_100_0000_Light-Sweatshirt-with-25-Gucci-Eschatology-and-Blind-for-Love-1921-print.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Gucci">
    </div>

    <div class="w3-col m3">
      <img src="https://image.uniqlo.com/UQ/ST3/WesternCommon/imagesgoods/425042/item/goods_32_425042.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Uniqlo">
    </div>
  </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">MASUK</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">MASUK ADMIN</h3>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="https://jmyvda.dm.files.1drv.com/y4pqdSOzMaoEntXeWMfigYWoBd0WBESYzQVbd57TXMukIwJF28-By70cDEjL5g2ojloJaJCzT7jMGWL4pIAcCjs-MTyeRnjtoW7OmTQE0iDG8oTKfdnoJ4n2hb_qWibJDvo-Ewc_o3pWpNckbqacg11RHcmNky1sZzOitcXTYsaKsi7lFezgr8uPgISCProGyBriJHelOQZuR5gEdsA8SeS1g/D%27Bloun%20Logo.png" class="w3-image w3-round" style="width:100%">
    </div>
    <div class="w3-col m8 w3-panel">
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Surel" required name="Surel">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="password" placeholder="Kata sandi" required name="Kata sandi">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Pin Autentikasi" required name="Pin Autentikasi">
        <button class="w3-button w3-black w3-right" type="submit">
          <a href="http://localhost/TubesTekWeb/index.php/Admin/">
          <i class="fa fa-paper-plane"></i> Masuk
          </a>
        </button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
