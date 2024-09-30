<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
        <title>Welcome</title>
    </head>
    <body>
        <h1>Postapp</h1>
        <img src="/images/boite.png" width="200" alt="Image de colis">
        <p>Bienvenue chez Postapp. Le leader du colis en france.</p>
        @if ($nbParcels > 0)
            <p>Il y a actuellement {{ $nbParcels }} colis en traitement.</p>
        @else 
            <p>Il n'y a actuellement aucun colis en traitement.</p>
        @endif
        <div class="btn-content">
            <a href="/register">Enregistrer un colis</a><br/>
            <a href="/tracking">Suivre un colis</a>
        </div>
    </body>
</html>