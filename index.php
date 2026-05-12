<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PORTFOLIO - ALVARO</title>
        <!-- Accueil CSS -->
        <link rel="stylesheet" href="assets/css/accueil.css">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
        <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">

        <style>

            body {
                background-color: #f8f9fa;

            }
            .navbar {
                background: #000;
                font-family: 'Cinzel', sans-serif;
                display: flex;
                height: 80px;
                position: sticky;
                top: 0;
                z-index: 1000; /* pour qu’elle passe au-dessus du contenu */
                padding: 10px;
                transition: transform 0.3s ease;
            }
            .navbar-logo {
                height: 80px;
                width: auto;
            }
            .navbar-nav .nav-link {
                color: white !important;
            }
            .navbar-nav .nav-link:hover {
                text-decoration: underline;
            }
            .welcome-section {
                padding: 100px 0;
                text-align: center;
                background: #fff;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                margin: 30px auto;
                border-radius: 10px;
                max-width: 900px;
            }
            nav .container {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            nav a {
                color: white;
                text-decoration: none;
                margin-left: 15px;
            }

            nav a:hover {
                text-decoration: underline;
            }

            #toggleNav {
                position: fixed;
                top: 10px;
                right: 10px;
                background: #000;
                color: #fff;
                border: none;
                padding: 5px 8px;
                cursor: pointer;
                z-index: 1100;
                border-radius: 4px;
            }

            #toggleNav:hover {
                background: #333;
            }
        </style>
    </head>
    
</html>
