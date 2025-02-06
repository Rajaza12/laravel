<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="text-center">
            <h1 class="mb-4">Bienvenue sur notre site</h1>
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="{{ route('inscription.create') }}" class="btn btn-primary btn-block">Page d'inscription</a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('inscription.index') }}" class="btn btn-secondary btn-block">Liste des inscriptions</a>
            </li>
        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

