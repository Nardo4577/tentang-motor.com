<?php
//menyertakan code dari file koneksi
include "koneksi.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tentang_mesin.com</title>
    <link rel="icon" href="img/logo.png"/> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
 
    <nav class="navbar navbar-expand-lg bg-body-tertiary stiky-top">
      
        <div class="container">
            <a class="navbar-brand" href="#">tentang_motor.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                  <ul class="navbar-nav mb-2 mb-lg-0">
                     <a href='logout.php'>logout</a>
  <li class="nav-item dropdown">
    <button class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center"
      id="bd-theme"
      type="button"
      aria-expanded="false"
      data-bs-toggle="dropdown"
      data-bs-display="static"
      aria-label="Toggle theme (auto)">
      <i class="bi bi-moon-stars-fill theme-icon-active me-2"></i>
      <span class="d-lg-none" id="bd-theme-text">Ganti Tema</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-theme" style="--bs-border-radius: .5rem;">
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
          <i class="bi bi-sun-fill me-2 opacity-50"></i>
          Terang
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
          <i class="bi bi-moon-stars-fill me-2 opacity-50"></i>
          Gelap
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
          <i class="bi bi-circle-half me-2 opacity-50"></i>
          Otomatis
        </button>
      </li>
    </ul>
  </li>
</ul>
                    <li class="nav-item">
                        <a class="nav-link" href = "#">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href = "#article">article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href = "#gallery">gallery</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href = "#Schedule">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href = "#About Me"> About Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="hero" class="text-center p-5 bg-danger-subtle text-sm-start">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-item-center">
                <img src="images (2).jpg" class="img-fluid" width="300">
                <div>
                    <h1 class="fw bold display-4">otomotif zone</h1>
                    <h4 class="lead display-6">tentang_permesinan</h4>
                    <span id="tanggal"></span>
<span id="jam"></span>
                </div>
            </div>
        </div> 
    </section>
    <section id="article" class="text-center p-5">
        <div class="container">
            <h1 class="fw bold display-4 pb-3">artikel</h1>
            
            <div class="row row-cols-1 row-cols-lg-3 g-4">
              								<?php
        $sql = "SELECT * FROM article ORDER BY tanggal DESC";
        $hasil = $conn->query($sql); 

        while ($row = $hasil->fetch_assoc()){
 
        ?>
                <!---col bagain--->
                <div class="col">
                    <div class="card h-100">
                        <img src="<?= $row["gambar"]?>"class ="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row["gambar"]?></h5>
                            <p class="card-text">"<?= $row["isi"]?>"</P>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">"<?= $row["tanggal"]?>"</small>
                        </div>
                    </div>
                </div>
      <?php
        }
      ?>
<!---col end--->

    </section>
    <section id="gallery" class="text-center p-5 bg-danger-subtle">
        <div class="container">
            <h1 class="fw bold display-4 pb-3">gallery</h1>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="photo-1609630875171-b1321377ee65.avif" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="am-syahrul-L3AxyzU55gA-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="zac-wolff-Ptx8G07I6xI-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="max-itin-xlhl7rI2M4I-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="ewan-z-bvUbSxRl4Wg-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section id="Schedule" class="text-center p-5">
        <h1 class="fw bold display-4 pb-3">scedule</h1>

      
        <div class="row">
            <div class="col-sm-3 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body">
                    <i class="bi bi-book"></i>
                  <h5 class="card-title">membaca</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                    <i class="bi bi-laptop"></i>
                  <h5 class="card-title">menulis</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
          <br>
            <div class="col-sm-3 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body">
                    <i class="bi bi-people"></i>
                  <h5 class="card-title">diskusi</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                    <i class="bi bi-bicycle"></i>
                  <h5 class="card-title">olahraga</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body">
                    <i class="bi bi-film"></i>
                  <h5 class="card-title">movie</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                    <i class="bi bi-bag"></i>
                  <h5 class="card-title">belanja</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
          </div>

    </section>
    <section id="About Me" class="text-center p-5 bg-danger-subtle">
        <h1 class="fw bold display-4 pb-3">About Me</h1>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Accordion Item #1
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the first item’s accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
                  Accordion Item #2
                
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the second item’s accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Accordion Item #3
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item’s accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>

        </section>
        <!-- Tombol Back to Top -->
    <button
      id="backToTop"
      class="btn btn-danger rounded-circle position-fixed bottom-0 end-0 m-3 d-none"
    >
      <i class="bi bi-arrow-up" title="Back to Top"></i>
    </button>
    ...
    <footer class="text-center p-5">
      <div><i class="bi bi-whatsapp"></i> <i class="bi bi-instagram"></i></div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript">
      function tampilwaktu(){
  const waktu = new Date();
  const tanggal = waktu.getDate();
const bulan = waktu.getMonth();
const tahun = waktu.getFullYear();
const jam = waktu.getHours();
const menit = waktu.getMinutes();
const detik = waktu.getSeconds();
const arrBulan = ["1", "2", "3", "4","5","6","7","8","9","10","11","12"];

const tanggal_full = tanggal + "/" + arrBulan[bulan] + "/" + tahun;
const jam_full = jam + ":" + menit + ":" + detik;

document.getElementById("tanggal").innerHTML = tanggal_full;
document.getElementById("jam").innerHTML = jam_full;
      }
setInterval(tampilwaktu, 1000); 
</script>
<script type="text/javascript"> 
  const backToTop = document.getElementById("backToTop");
  			window.addEventListener("scroll", function () {
        				if (window.scrollY > 300) {
          backToTop.classList.remove("d-none");
          backToTop.classList.add("d-block");
        } else {
          backToTop.classList.remove("d-block");
          backToTop.classList.add("d-none");
        }
      });

  backToTop.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
</script>
    
    <script>
        /*!
         * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
         * Copyright 2011-2025 The Bootstrap Authors
         * Licensed under the Creative Commons Attribution 3.0 Unported License.
         */

        (() => {
         'use strict'
        
         const getStoredTheme = () => localStorage.getItem('theme')
         const setStoredTheme = theme => localStorage.setItem('theme', theme)
        
         const getPreferredTheme = () => {
         const storedTheme = getStoredTheme()
         if (storedTheme) {
         return storedTheme
         }
        
         return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
         }
        
         const setTheme = theme => {
          if (theme === 'auto') {
          document.documentElement.setAttribute('data-bs-theme', (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'))
         } else {
         document.documentElement.setAttribute('data-bs-theme', theme)
         }
         }
        
         setTheme(getPreferredTheme())
        
         const showActiveTheme = (theme, focus = false) => {
         const themeSwitcher = document.querySelector('#bd-theme')
        
        if (!themeSwitcher) {
         return
         }
        
         const themeSwitcherText = document.querySelector('#bd-theme-text')
         const activeThemeIcon = themeSwitcher.querySelector('.theme-icon-active') 
         const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
         document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
         element.classList.remove('active')
             element.setAttribute('aria-pressed', 'false')
         })
        
         btnToActive.classList.add('active')
         btnToActive.setAttribute('aria-pressed', 'true')
         
            
            const iconClass = btnToActive.querySelector('i').className.replace('me-2 opacity-50', '').trim()
            activeThemeIcon.className = `${iconClass} theme-icon-active me-2`

         const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
         themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)
        
         if (focus) {
         themeSwitcher.focus()
       }
       }
        
         window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
         const storedTheme = getStoredTheme()
         if (storedTheme !== 'light' && storedTheme !== 'dark') {
         setTheme(getPreferredTheme())
         showActiveTheme(getPreferredTheme()) 
         }
         })
        
         window.addEventListener('DOMContentLoaded', () => {
         showActiveTheme(getPreferredTheme())
        
         document.querySelectorAll('[data-bs-theme-value]')
         .forEach(toggle => {
         toggle.addEventListener('click', () => {
         const theme = toggle.getAttribute('data-bs-theme-value')
         setStoredTheme(theme)
         setTheme(theme)
         showActiveTheme(theme, true)
         })
         })
         })
        })()
    </script>
    
  </body>
</html>