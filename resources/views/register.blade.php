<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EduSync | Suivez Votre Succès Académique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Add Font Awesome CDN for academic-themed icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-6m4gyMcLHz6VcncbQg5yGrh4qWXSAYDPYmPVraFAT6z5sjcJ4p8f+gny5ZinP+mW"
        crossorigin="anonymous">
    <style>
        /* Custom CSS for styling */
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #333;
        }

        .form-control {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 12px;
            font-size: 18px;
            width: 100%;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 12px 30px;
            font-size: 20px;
            color: white;
            transition: background-color 0.3s;
            display: block;
            margin: 0 auto; /* Centre le bouton horizontalement */
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Academic-themed icons */
        .icon-academic {
            font-size: 48px;
            color: #007bff;
            margin-bottom: 20px;
        }

        /* New styles for a modern and professional look */
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
        }

        .icon {
            font-size: 24px;
            color: #007bff;
            margin-right: 10px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            text-align: center;
            color: white;
        }

        .footer {
            text-align: center;
            color: #777;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1><i class="fas fa-graduation-cap icon-academic"></i> <b>Inscription</b></h1>
                </div>
                <div class="card-body form-container">
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label"><i class="fas fa-user icon"></i> Nom</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="John Doe" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"><i class="fas fa-envelope icon"></i> Adresse e-mail</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label"><i class="fas fa-lock icon"></i> Mot de passe</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary"><i class="fas fa-arrow-right icon"></i> S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
            <p class="footer">&copy; 2023 EduSync. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>


