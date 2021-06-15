<!DOCTYPE html>
<html lang="en">
<title>Katalog D'BLOUN</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="icon" type="image/png" href="https://jmyvda.dm.files.1drv.com/y4pqdSOzMaoEntXeWMfigYWoBd0WBESYzQVbd57TXMukIwJF28-By70cDEjL5g2ojloJaJCzT7jMGWL4pIAcCjs-MTyeRnjtoW7OmTQE0iDG8oTKfdnoJ4n2hb_qWibJDvo-Ewc_o3pWpNckbqacg11RHcmNky1sZzOitcXTYsaKsi7lFezgr8uPgISCProGyBriJHelOQZuR5gEdsA8SeS1g/D%27Bloun%20Logo.png"/>
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-quarter img{margin-bottom: -6px; cursor: pointer}
.w3-quarter img:hover{opacity: 0.6; transition: 0.3s}
</style>
<body class="w3-light-grey">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-black w3-animate-right w3-top w3-text-light-grey w3-large" style="z-index:3;width:250px;font-weight:bold;display:none;right:0;" id="mySidebar">
  <a href="javascript:void()" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-32">✕</a> 
  <a href="http://localhost/TubesTekWeb/index.php/User/" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">HALAMAN AWAL</a>
  <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">KATALOG</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">HUBUNGI KAMI</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-white w3-xlarge w3-padding-16">
  <span class="w3-left w3-padding">KATALOG KAMI</span>
  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content" style="max-width:1600px;margin-top:83px">



<!-- Edit yang mulai dari sini sampai komentar gw di bawah.
     Usahain satu barisnya dari brand yang sama, apa aja. Di alt, tulisin model atau mereknya, oc ;) -->

  <!-- Photo grid -->

<?php
  $query = "SELECT * FROM jaket WHERE jaket.id_jaket AND jaket.merk_jaket AND jaket.size_jaket AND jaket.harga_jaket AND jaket.jenis_jaket AND jaket.path_gambar"
  $tampil = mysqli_query()
  ?>

  <?php
  foreach ($jaket as $jkt) {
    $path_loc = $jkt['path_gambar'];
    if ($path_loc == NULL) {
      echo "anjay bisa";
      //$def_path = "https://6kpdpa.dm.files.1drv.com/y4pcQDSs7bagEzUaKo6nxOhztdudD0JuIV31fvwLfl2rU1s8KCCpaDVNqOb3LCNkVQNl4LbgjdUlIjKUTPBOCJXQ1qepmw7VPZuZmoaIY1GOStyQ4OLEd91Y_BazYqVz9rKVWTVgJ_U1cj5l5H1u6bDZfN4D6-axT_uUtJJGbipwIWoazpqosTpDMMDnNBXNElp8o5fHz9cMpjiR38cCsrK6g/no%20item.png"
    }
  }

  ?>
  <!-- File orisinil -->
  <div class="w3-row w3-grayscale-min">
    <div class="w3-quarter">
      <img src="/w3images/girl.jpg" style="width:100%" onclick="onClick(this)" alt="Canoeing again">
      <img src="/w3images/boy.jpg" style="width:100%" onclick="onClick(this)" alt="Quiet day at the beach. Cold, but beautiful">
      <img src="/w3images/girl.jpg" style="width:100%" onclick="onClick(this)" alt="The Beach. Me. Alone. Beautiful">
   </div>
    
   <div class="w3-quarter">
      <img src="/w3images/girl_train.jpg" style="width:100%" onclick="onClick(this)" alt="A girl, and a train passing">
      <img src="/w3images/man_bench.jpg" style="width:100%" onclick="onClick(this)" alt="Waiting for the bus in the desert">
      <img src="/w3images/natureboy.jpg" style="width:100%" onclick="onClick(this)" alt="Nature again.. At its finest!">
    </div>
    
    <div class="w3-quarter">
      <img src="/w3images/man_bench.jpg" style="width:100%" onclick="onClick(this)" alt="Waiting for the bus in the desert">
      <img src="/w3images/girl_mountain.jpg" style="width:100%" onclick="onClick(this)" alt="What a beautiful scenery this sunset">
      <img src="/w3images/closegirl.jpg" style="width:100%" onclick="onClick(this)" alt="The Beach. Me. Alone. Beautiful">
    </div>

    <div class="w3-quarter">
      <img src="/w3images/natureboy.jpg" style="width:100%" onclick="onClick(this)" alt="A boy surrounded by beautiful nature">
      <img src="/w3images/girl_train.jpg" style="width:100%" onclick="onClick(this)" alt="A girl, and a train passing">
      <img src="/w3images/boy.jpg" style="width:100%" onclick="onClick(this)" alt="Quiet day at the beach. Cold, but beautiful">
    </div>
  </div>
  <!-- Akhir file orisinil -->
<!-- Yep, done UwU -->

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  
  <!-- Contact section -->
  <div class="w3-container w3-light-grey w3-padding-32 w3-padding-large" id="contact">
    <div class="w3-content" style="max-width:600px">
      <h4 class="w3-center"><b>HUBUNGI KAMI</b></h4>
      <p>Untuk pertanyaan lebih lanjut mengenai kami maupun situs kami, mohon gunakan formulir di bawah ini :D</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-section">
          <label>Nama</label>
          <input class="w3-input w3-border" type="text" name="Name" required>
        </div>
        <div class="w3-section">
          <label>Surel</label>
          <input class="w3-input w3-border" type="text" name="Email" required>
        </div>
        <div class="w3-section">
          <label>Pesan</label>
          <input class="w3-input w3-border" type="text" name="Message" required>
        </div>
        <button type="submit" class="w3-button w3-block w3-black w3-margin-bottom">Kirim Pesan</button>
      </form>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-grey">  
    <div class="w3-row-padding">
      <div class="w3-half">
        <h3>INFO</h3>
        <p>Kami tidak menyediakan tempat untuk membeli produk, melainkan hanyalah menampilkan katalog produk-produk rekanan kami.</p>      
      </div>

      <div class="w3-half">
        <h3>TAG POPULER</h3>
        <p>
          <span class="w3-tag w3-black w3-margin-bottom">Tren terkini</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Mantel</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Cardigan</span>
          <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Sweater</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Disain Original</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Jaket</span>
          <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Model terbatas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Cardinal</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Kenzo</span>
          <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Pegunungan</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Uniqlo</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Lainnya</span>
          <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Info</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Stok</span>
        </p>
      </div>
    </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24">
  <p>Kelompok 6 &copy; FSI 2021</p>
  </div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>


</body>
</html>
