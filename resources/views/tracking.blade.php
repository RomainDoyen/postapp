<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <h1>Suivi d'un colis</h1>
    <form action="/tracking" method="post">
      @csrf
      <input type="text" name="tracking_number" placeholder="Numéro de suivi">
      <button type="submit">Rechercher</button>
    </form>

    @if (isset($parcel))
      <h2>Informations sur le colis</h2>
      <p>Numéro de suivi: {{ $parcel['tracking_number'] }}</p>
      <p>Départ: {{ $parcel['address_dep'] }}</p>
      <p>Arrivée: {{ $parcel['address_arr'] }}</p>
      <p>Statut: {{ $parcel['status'] }}</p>
      <p>Poids: {{ $parcel['weight'] }}</p>
    @endif

    <a href="/">Retour</a>
  </body>
</html>