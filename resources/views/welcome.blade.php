<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Simbah</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="img/Logo.ico"  sizes="16x16">
<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
  <a href="#" class="w3-bar-item w3-button">Link 5</a>
</nav>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-green w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-small w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white"></i> <img src="img/Logo.ico">
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-green">ABOUT US</a>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-green">BERITA</a>
  <a href="#pricing" class="w3-bar-item w3-button w3-hide-small w3-hover-green">AKOMODASI</a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-green">KONTAK</a>
  <div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-green">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-green">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-green">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#work" class="w3-bar-item w3-button">Work</a>
    <a href="#pricing" class="w3-bar-item w3-button">Price</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="img/gambar2.png" style="width:100%;min-height:350px;max-height:600px;">

</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4>Oh snap! We just showed you a modal..</h4>
      <h5>Because we can <i class="fa fa-smile-o"></i></h5>
    </header>
    <div class="w3-container">
      <p>Cool huh? Ok, enough teasing around..</p>
      <p>Go to our <a class="w3-text-teal" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
    </div>
    <footer class="w3-container w3-teal">
      <p>Modal footer</p>
    </footer>
  </div>
</div>

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>Sistem Pengolahan</h2>
<p>Berikut Step pada Sistem Pengolahan SIMBAH</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="img/memilah.jpg"  style="width:55%" class="w3-square w3-hover-opacity">
  <h3>Memilah</h3>
  <p>Pengguna disarankan untuk memilah sampah secara merata agar pembagian tertata dengan rapi</p>
</div>

<div class="w3-quarter">
  <img src="img/timbangan.jpg"  style="width:52%" class="w3-square w3-hover-opacity">
  <h3>Menimbang</h3>
  <p>Limbah Akan di Timbang Dengan Kualifikasi Pemesanan Akomodasi yang Sudah di Tentukan Oleh Pihak SIMBAH</p>
</div>

<div class="w3-quarter">
  <img src="img/olahan.jpg"  style="width:45%" class="w3-square w3-hover-opacity">
  <h3>Mengolah</h3>
  <p>Limbah di olah dengan memisahkan olahan masing-masing agar menjadi oalahan yang baik dan dapat digunakan kembali dengan prosedur yang berlaku</p>
</div>

<div class="w3-quarter">
  <img src="img/hasil.jpg"  style="width:40%" class="w3-square w3-hover-opacity">
  <h3>Menghasilkan</h3>
  <p>Hasil akhir dari limbah yang dapat digunakan kembali akan diletakan pada gerai, kemudian konsumen juga dapat merequest sampah yang sudah di berikan</p>
</div>

</div>
</div>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>Berita</h2>
<p>Dari sekitar 189.000 ton per bulan sampah plastik yang dihasilkan perkotaan Pulau Jawa, hanya sekitar 11,83% atau kurang lebih 22.000 ton per bulan sampah yang dikumpulkan kemudian didaur ulang.

"Sekitar 88,17% masih diangkut ke TPA atau berserakan di lingkungan," kata Direktur Sustainable Waste Indonesia (SWI), Dini Trisyanti dalam webinar 'Selamat Kolaborasi Menuju Kehidupan Lestari' di Jakarta, Rabu (19/8).

Demikian data yang dipaparkan itu berdasarkan hasil sebuah studi mengenai tentang rantai nilai sampah plastik, khususnya di Pulau Jawa yang dilakukan sepanjang Oktober 2019 hingga 20 Februari 2020.

Riset itu dilakukan Unilever Indonesia bekerja sama dengan Sustainable Waste Indonesia (SWI) dan Indonesian Plastic Recyclers (IPR).

Dini memaparkan, dari sekitar 22.000 ton sampah plastik yang dikumpulkan, sebanyak 83% berasal dari pemulung. Lalu 15,2% dari Tempat Pengolahan Sampah Terpadu (TPST) ataupun Tempat Pengolahan Sampah 3R (TPS3R). Hanya 1,5% berasal dari Bank Sampah</p>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="img/berita1.jpeg" style="width:100%;">
  <div class="w3-container">
  <h3>Jawa Barat</h3>
  <p> Pemerintah Daerah Provinsi Jawa Barat berkomitmen untuk terus mendorong pengelolaan sampah berbasis digital sebagai upaya untuk menerapkan konsep ekonomi sirkular.
Guna mewujudkan komitmen tersebut, Pemerintah Daerah Provinsi Jawa Barat berkolaborasi dengan Octopus sebagai mitra dalam pengelolaan sampah, terutama sampah botol plastik.</p>
  <p>https://jabarprov.go.id/index.php/news/42262/2021/05/06/Jabar-Komitmen-Kelola-Sampah-Berbasis-Digital</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="img/berita2.jpeg" style="width:100%">
  <div class="w3-container">
  <h3>Jawa Tengah</h3>
  <p>Provinsi Jateng menilai pelaksanaan pengelolaan sampah di Kabupaten Cirebon patut menjadi percontohan di beberapa kabupaten/ kota di Jateng. Demikian diutarakan Ketua Komisi D, Alwin Basri, saat berdiskusi dengan Dinas Lingkungan Hidup Kabupaten Cirebon</p>
  <p>https://dprd.jatengprov.go.id/2021/08/27/pengelolaan-sampah-perlu-pembenahan/</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="img/berita3.jpeg" style="width:100%">
  <div class="w3-container">
  <h3>Jawa Timur</h3>
  <p>penanganan timbulan sampah hasil aktifitas manusia yang kian tahun makin tak terkendali, DPRD Prov. Jatim bersama Pemprov Jatim saat ini sedang melakukan revisi perda sampah. Hal ini mengingat Jawa Timur merupakan salah satu provinsi penyumbang sampah terbesar.</p>
  <p>Sumber Berita: http://dlh.jatimprov.go.id/berita-penanganan-dan-pengendalian-sampah-regional-di-jawa-timur.html#ixzz77mjApX8g
Under Creative Commons License: Attribution Non-Commercial No Derivatives</p>
  </div>
  </div>
</div>

</div>

<!-- Container -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
  style="position:absolute;top:-28px;right:24px">+</a>
</div>

<!-- Pricing Row -->
<div class="w3-row-padding w3-center w3-padding-64" id="pricing">
    <h2>AKOMODASI</h2>
    <p>Akomodasi Merupakan Salah Satu Pilihan Untuk Memenuhi Kebutuhan Pelanggan </p><br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-green">
          <p class="w3-xlarge">EASY</p>
        </li>
        <li class="w3-padding-16"><b>5 Kg</b> Berat Isi</li>
        <li class="w3-padding-16"><b>2 Kg</b> Reuse</li>
        <li class="w3-padding-16"><b>1/5 Kg</b> Reduce</li>
        <li class="w3-padding-16"><b>1/5 Kg</b> Recycle</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-rupiah"></i> Rp 10.000</h2>
          <span class="w3-opacity">Per 1x Ambil</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-button w3-green w3-padding-large"><i class="fa fa-check"></i> Daftar</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-orange">
          <p class="w3-xlarge">MEDIUM</p>
        </li>
        <li class="w3-padding-16"><b>15 Kg</b> Berat Isi</li>
        <li class="w3-padding-16"><b>5 Kg</b> Reuse</li>
        <li class="w3-padding-16"><b>5 Kg</b> Reduce</li>
        <li class="w3-padding-16"><b>5 Kg</b> Recyle</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-rupiah"></i> Rp 20.000</h2>
          <span class="w3-opacity">Per 1x Ambil</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-button w3-orange w3-padding-large"><i class="fa fa-check"></i> Daftar</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-red">
          <p class="w3-xlarge">HARD</p>
        </li>
        <li class="w3-padding-16"><b>30 Kg</b> Berat Isi</li>
        <li class="w3-padding-16"><b>10 Kg</b> Reuse</li>
        <li class="w3-padding-16"><b>10 Kg</b> Reduce</li>
        <li class="w3-padding-16"><b>10 Kg</b> Recycle</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-rupiah"></i> Rp 30.000</h2>
          <span class="w3-opacity">Per 1x Ambil</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-button w3-red w3-padding-large"><i class="fa fa-check"></i> Daftar</button>
        </li>
      </ul>
    </div>
</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-green w3-bottombar">Kontak Kami</span></div>
      <h3>Alamat Lengkap</h3>
      <p>Jln Ketinting Selatan No 18 Kode Pos 71226 </p>
      <p><i class="fa fa-map-marker w3-text-black w3-xlarge"></i>  Surabaya,Indonesia</p>
      <p><i class="fa fa-phone w3-text-black w3-xlarge"></i>  +62 8347-4949-0001</p>
      <p><i class="fa fa-envelope-o w3-text-black w3-xlarge"></i>  SIMBAHINAJA@gmail.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
      <div class="w3-section">      
        <label>Nama Lengkap</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="Email" required>
      </div>
      <div class="w3-section">      
        <label>Kritik & Saran</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
      <input class="w3-check" type="checkbox" checked name="Like">
      <label>Tandai Jika Suka</label>
      <button type="submit" class="w3-button w3-right w3-theme" href="{{url('">Kirim</button>
      </form>
    </div>
  </div>
</div>


<!-- Image of location/map -->
<img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%;">

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-center">
    <span class="w3-text w3-padding w3-green w3-hide-small">SIMBAH</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
  <p><a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">www.SIMBAHINAJA.com</a></p>
</footer>

<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
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
