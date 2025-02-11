<?php
// Include the session.php file to initialize session
require_once '../../functions/session.php';

// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect the user to the login page
    header("Location: ../../../../home/login.php");
    exit; // Make sure to stop further execution after redirecting
}
?>


<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ayo">
    <title>Limbo Music Community</title>


    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- table styles -->
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylestable.css">


    <style>

      .music-container{
            width: 70vw;;
            margin: 0px;
        }

        #ratingandcomment{
            border: 2px solid;
        }
        #song-detail{
            border: 2px solid green;
            width: 40vw;
            display: flex;
            justify-content: space-between ;
        }
        #song-detail1{
            border: 2px solid yellow;
            margin:10px;
            padding:10px;
            width:50%;
            height: 20vh;
            float: left;
        }
        #song-detail2{
            margin:10px;
            padding:10px;
            border:2px solid red;
            width:50%;
            height: 20vh;
            float: right;
        }

        #song-details3{
            border:2px solid teal;
            width:50%;
            height: 5vh;
            margin: 100px 0 0 0;
        }


      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
    <circle cx="12" cy="12" r="10"/>
    <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/>
  </symbol>
  <symbol id="cart" viewBox="0 0 16 16">
    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
  <symbol id="chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
  </symbol>
</svg>

<div class="container">
  <header class="border-bottom lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
      </div>
      <div class="col-4 text-center">
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-3 border-bottom">
    <nav class="nav nav-underline justify-content-between">
      <a class="nav-item nav-link link-body-emphasis active" href="../../index.php">Home</a>
      <h3>LIMBO</h3>
     <a class="nav-item nav-link link-body-emphasis" href="../carousel/main.php">Add to Community</a>
    </nav>
  </div>
</div>

<main class="container">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="height: 65vh; overflow: hidden;">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../../home/images/i5.jpeg" class="d-block w-100" style="height: 65vh; object-fit: cover;" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../../home/images/i4.jpeg" class="d-block w-100" style="height: 65vh; object-fit: cover;" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../../home/images/i7.png" class="d-block w-100" style="height: 65vh; object-fit: cover;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../../home/images/c1.jpeg" class="d-block w-100" style="height: 65vh; object-fit: cover;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../../home/images/c2.jpeg" class="d-block w-100" style="height: 65vh; object-fit: cover;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../../home/images/c3.jpeg" class="d-block w-100" style="height: 65vh; object-fit: cover;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../../home/images/c4.jpeg" class="d-block w-100" style="height: 65vh; object-fit: cover;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../../home/images/c5.jpeg" class="d-block w-100" style="height: 65vh; object-fit: cover;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../../home/images/c6.jpeg" class="d-block w-100" style="height: 65vh; object-fit: cover;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../../home/images/c7.jpeg" class="d-block w-100" style="height: 65vh; object-fit: cover;" alt="...">
    </div>
    </div>
</div>
<br>
<br>
<br>
  
  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Spotify's Top 50
      </h3>

      <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/37i9dQZEVXbMDoHDwVN2tF?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>



<div class="music-container" style="height: 50vh; overflow-y: auto;">
    <table class="table table-striped custom-table"  id="myTable">
        <thead>
            <tr>
                <th scope="col">SongID</th>
                <th scope="col">Title</th>
                <th scope="col">ReleaseDate</th>
                <th scope="col">Genre</th>
                <th scope="col">Album</th>
                <th scope="col">ArtistName</th>
                <th scope="col">General Thoughts</th>
                <th scope="col">Link</th>
                <th scope="col">Rating</th>

            </tr>
        </thead>
        <?php
          include '../../functions/getRecords.php';
          // Loop through data and generate table rows
          foreach ($rows as $row) {
              echo generateTableRow($row);
          }
        ?>
        </tbody>
    </table>
</div>

        <h3>Scroll back up to add your song!</h3>
        



    </div>

    <div class="col-md-4" style="height: 10vh;">
        <div>
          <h4 class="fst-italic">Recent news</h4>
          <ul class="list-unstyled">
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="https://nr.apple.com/dX8r4D1qM8" target="_blank">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><image x="0" y="0" width="100%" height="100%" href="../blog/images/apn.png" preserveAspectRatio="xMidYMid slice" /></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">The App Store, Spotify, and Europe’s thriving digital music market</h6>
                  <small class="text-body-secondary">March 4, 2024</small>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="https://techcrunch.com/2024/02/22/as-possible-ec-fine-nears-apple-claims-spotify-is-trying-to-get-limitless-access-to-its-tools-without-paying/" target="_blank">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><image x="0" y="0" width="100%" height="100%" href="../blog/images/spo.jpg" preserveAspectRatio="xMidYMid slice" /></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">Apple reveals new details about Spotify’s business as possible EU fine nears</h6>
                  <small class="text-body-secondary">JFebruary 22, 2024</small>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><image x="0" y="0" width="100%" height="100%" href="../blog/images/spo.jpg" preserveAspectRatio="xMidYMid slice" /></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">$539 million fine: Spotify alleges "artificial advantage" as Apple calls it 'freeloader'</h6>
                  <small class="text-body-secondary">Feb 23, 2024</small>
                </div>
              </a>
            </li>
          </ul>
        </div>
    </div>
  </div>
</main>

<footer class="py-5 text-center text-body-secondary bg-body-tertiary">
  <p class="mb-0">
    <a href="#">Back to top</a>
  </p>
</footer>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
