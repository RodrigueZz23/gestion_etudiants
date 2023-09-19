<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EduSync | Suivez Votre Succès Académique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">EduSync</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <nav class="nav-bar">
              <a class="nav-link larger-link " href="{{ url('/home20') }}">Home</a>
            <a class="nav-link larger-link " href="{{ url('/results20') }}">Résultats</a>
            <a class="nav-link larger-link " href="{{ url('/schooling20') }}">Scolarité</a>
            <a class="nav-link larger-link " href="{{ url('/schedule20') }}">Plannig de cours</a>
            <a class="nav-link larger-link color" href="{{ url('/news20') }}">News</a>


    </nav>
                </li>

            </ul>
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
          </div>
        </div>
    </nav>

    <style>
   .nav-bar {
    display: flex;
    padding: 10px;

  }
  .nav-link {
    text-decoration: none;
    color: #333;
    padding: 10px;
    transition: background-color 0.3s, color 0.3s;
  }

  .nav-link:hover {
    background-color: red;
    color: #fff;
  }



  body {
    font-family: 'Poppins', sans-serif;
        }


    .larger-link {
    font-size: 20px;
    }
    .color{
    color:#dc3545;
    }


    .navbar-brand {
        color: black; /* Couleur par défaut du texte */
    }



    </style>

<div class="container">
  <img src="images/i1.png" alt="Annonce 1">
  <img src="images/i2.png" alt="Annonce 2">
  <img src="images/i3.png" alt="Annonce 3">
  <img src="images/i4.png" alt="Annonce 4">
  <img src="images/i5 (1).png" alt="Annonce 4">
  <img src="images/i6.png" alt="Annonce 6">
  <img src="images/i7 (3).png" alt="Annonce 7">

  <img src="images/i1.png" alt="Annonce 1">
  <img src="images/i2.png" alt="Annonce 2">
  <img src="images/i3.png" alt="Annonce 3">
  <img src="images/i4.png" alt="Annonce 4">
  <img src="images/i5 (1).png" alt="Annonce 4">
  <img src="images/i6.png" alt="Annonce 6">
  <img src="images/i7 (3).png" alt="Annonce 7">
  <img src="images/i1.png" alt="Annonce 1">
  <img src="images/i2.png" alt="Annonce 2">
  <img src="images/i3.png" alt="Annonce 3">
  <img src="images/i4.png" alt="Annonce 4">
  <img src="images/i5 (1).png" alt="Annonce 4">
  <img src="images/i6.png" alt="Annonce 6">
  <img src="images/i7 (3).png" alt="Annonce 7">
  <img src="images/i1.png" alt="Annonce 1">
  <img src="images/i2.png" alt="Annonce 2">
  <img src="images/i3.png" alt="Annonce 3">
  <img src="images/i4.png" alt="Annonce 4">
  <img src="images/i5 (1).png" alt="Annonce 4">
  <img src="images/i6.png" alt="Annonce 6">
  <img src="images/i7 (3).png" alt="Annonce 7">
  <img src="images/i1.png" alt="Annonce 1">
  <img src="images/i2.png" alt="Annonce 2">
  <img src="images/i3.png" alt="Annonce 3">
  <img src="images/i4.png" alt="Annonce 4">
  <img src="images/i5 (1).png" alt="Annonce 4">
  <img src="images/i6.png" alt="Annonce 6">
  <img src="images/i7 (3).png" alt="Annonce 7">
  <img src="images/i1.png" alt="Annonce 1">
  <img src="images/i2.png" alt="Annonce 2">
  <img src="images/i3.png" alt="Annonce 3">
  <img src="images/i4.png" alt="Annonce 4">
  <img src="images/i5 (1).png" alt="Annonce 4">
  <img src="images/i6.png" alt="Annonce 6">
  <img src="images/i7 (3).png" alt="Annonce 7">




</div>
<style>
  .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .container img {
    width: 30%;
    margin: 10px;
    transition: transform 0.2s ease-in-out;
  }

  .container img:hover {
    transform: scale(1.05); /* Effet de zoom au survol */
  }

  .image-caption {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.7); /* Fond semi-transparent pour le texte */
    color: white;
    padding: 5px;
    text-align: center;
    opacity: 0;
    transition: opacity 0.2s ease-in-out;
  }

  .container:hover .image-caption {
    opacity: 1; /* Affiche le texte au survol */

  }

  @media (max-width: 768px) {
    .container img {
      width: 100%; /* Les images occupent 100% de la largeur de l'écran */
    }
  }

</style>

<style>
        /* Style pour le bouton */
        #scrollButton {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 50%;
            padding: 10px;
            cursor: pointer;
            transition: opacity 0.3s, transform 0.3s;
            z-index: 1000;
            opacity: 0;
            transform: scale(0.8);
        }

        #scrollButton.show {
            opacity: 1;
            transform: scale(1);
        }

        #scrollButton:hover {
            background-color: #2980b9;
        }

        /* Style pour l'icône flèche */
        .scroll-icon {
            width: 20px;
            height: 20px;
            fill: currentColor;
        }
    </style>
     <button id="scrollButton" onclick="scrollTopFunction()">
        <svg class="scroll-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 16h-2v-6H8l4-4 4 4h-3z"/>
        </svg>
    </button>

    <div style="height: 2000px;">
        <!-- Contenu pour simuler une page longue -->
    </div>

    <script>
        // Affiche le bouton de défilement lorsque l'utilisateur fait défiler la page
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            var scrollButton = document.getElementById("scrollButton");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollButton.classList.add("show");
            } else {
                scrollButton.classList.remove("show");
            }
        }

        // Défilement en haut lorsque le bouton est cliqué
        function scrollTopFunction() {
            document.body.scrollTop = 0; // Pour Safari
            document.documentElement.scrollTop = 0; // Pour les autres navigateurs
        }
    </script>
