<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <h1>Enregistrer un nouveau colis</h1>
    <form action="/register" method="post">
      @csrf
      <label for="address_dep">Adresse de départ</label>
      <input type="text" name="address_dep" placeholder="1 rue des papillons"><br/>
      <label for="address_arr">Adresse d'arrivé</label>
      <input type="text" name="address_arr" placeholder="27 rue des artisans"><br/>
      <label for="weight">Poids du colis (en gramme)</label>
      <input type="number" name="weight" placeholder="5"><br/>
      <button type="submit">Envoyer</button>
    </form>
    @if (isset($message))
      <p>{{ $message }}</p>
    @endif
    <a href="/">Retour</a>
  </body>
</html>