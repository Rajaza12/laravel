<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<<<<<<< HEAD
<body class="bg-light">
    <div class="container mt-5">
        <!-- Menu Home -->
        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('home') }}" class="btn btn-secondary">Accueil</a>
        </div>

        <h1 class="text-center mb-4">Formulaire d'inscription</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('inscription.store') }}" method="POST" class="bg-white p-4 shadow-sm rounded">
            @csrf
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" name="nom" id="nom" required placeholder="Entrez votre nom">
            </div>

            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" name="prenom" id="prenom" required placeholder="Entrez votre prénom">
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" name="email" id="email" required placeholder="Entrez votre adresse email">
            </div>

            <div class="form-group">
                <label for="telephone">Téléphone :</label>
                <input type="text" class="form-control" name="telephone" id="telephone" required placeholder="Entrez votre numéro de téléphone">
            </div>

            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" class="form-control" name="password" id="password" required placeholder="Entrez un mot de passe">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirmez le mot de passe :</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required placeholder="Confirmez le mot de passe">
            </div>

            <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
        </form>
    </div>

    <!-- Lien Bootstrap JS et dépendances -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
=======
<body>
    <h1>Formulaire d'inscription</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('inscription.store') }}" method="POST">
        @csrf
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required><br><br>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="telephone">Téléphone :</label>
        <input type="text" name="telephone" id="telephone" required><br><br>

        <button type="submit">S'inscrire</button>
    </form>
>>>>>>> parent of 3b7a4f4 (Porjet reusii)
</body>
</html>
