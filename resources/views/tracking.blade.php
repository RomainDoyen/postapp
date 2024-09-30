<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tracking.css') }}">
    <title>Document</title>
  </head>
  <body>
    <h1>Suivi d'un colis</h1>
    <form action="/tracking" method="post">
      @csrf
      <input type="text" name="tracking_number" placeholder="Numéro de suivi">
      <button type="submit">Rechercher</button>
    </form>

    <div class="info-content">
      @if (isset($parcel))
        <h2>Informations sur le colis</h2>
        <p><span>Numéro de suivi:</span> {{ $parcel['tracking_number'] }}</p>
        <p><span>Départ:</span> {{ $parcel['address_dep'] }}</p>
        <p><span>Arrivée:</span> {{ $parcel['address_arr'] }}</p>
        <p><span>Statut:</span> {{ $parcel['status'] }}</p>
        <p><span>Poids:</span> {{ $parcel['weight'] }}</p>
      @endif
    </div>

    <a href="/">Retour</a>
  </body>
</html>