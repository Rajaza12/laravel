<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Inscriptions</title>
    <!-- Lien Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<form action="{{ route('inscription.create') }}" method="POST" class="bg-white p-4 shadow-sm rounded">
<body class="bg-light">
   
<div class="container mt-5">
    <h1 class="text-center mb-4">Liste des Inscriptions</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Date d'inscription</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($inscriptions as $inscription)
            <tr>
                <td>{{ $inscription->id }}</td>
                <td>{{ $inscription->nom }}</td>
                <td>{{ $inscription->prenom }}</td>
                <td>{{ $inscription->email }}</td>
                <td>{{ $inscription->telephone }}</td>
                <td>{{ $inscription->created_at->format('d/m/Y H:i') }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Lien Bootstrap JS et dépendances -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
