<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Inscriptions</title>
</head>
<<<<<<< HEAD
<form action="{{ route('inscription.create') }}" method="POST" class="bg-white p-4 shadow-sm rounded">
<body class="bg-light">
   
<div class="container mt-5">
    <h1 class="text-center mb-4">Liste des Inscriptions</h1>

=======
<body>
    <h1>Liste des Inscriptions</h1>
>>>>>>> parent of 3b7a4f4 (Porjet reusii)
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <thead>
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
</body>
</html>



