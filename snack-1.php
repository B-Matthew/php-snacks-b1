<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-snacks-1</title>
    <style>
      body {
        background-color: lightblue;
      }
      .container {
        width: 70%;
        margin: auto;
      }
      h1 {
        color: red;
      }
    </style>
  </head>
  <body>
    <!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
    Ogni array avrà una squadra di casa e una squadra ospite,
    punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo schema. -->

    <div class="container">
      <h1>PARTITE DI LEGA BASKET SERIE A</h1>

    <?php

    function getRndNum() {
      $rndNum = rand(50,100);
      return $rndNum;
    }

      $matches = [
       [
          'localTeam' => 'Olimpia Milano',
          'guestTeam' => 'Cantù',
          'localPoints' => getRndNum(),
          'guestPoints' => getRndNum(),
        ],
       [
          'localTeam' => 'Brindisi',
          'guestTeam' => 'Trento',
          'localPoints' => getRndNum(),
          'guestPoints' => getRndNum(),
        ],
       [
          'localTeam' => 'Varese',
          'guestTeam' => 'Reggiana',
          'localPoints' => getRndNum(),
          'guestPoints' => getRndNum(),
        ],
       [
          'localTeam' => 'Venezia',
          'guestTeam' => 'VL Pesaro',
          'localPoints' => getRndNum(),
          'guestPoints' => getRndNum(),
        ],
       [
          'localTeam' => 'Brescia',
          'guestTeam' => 'Fortitudo Bologna',
          'localPoints' => getRndNum(),
          'guestPoints' => getRndNum(),
        ],
       [
          'localTeam' => 'Trieste',
          'guestTeam' => 'Dinamo Sassari',
          'localPoints' => getRndNum(),
          'guestPoints' => getRndNum(),
        ]
      ];


      for ($i=0; $i < count($matches); $i++) {
        $local = $matches[$i]['localTeam'];
        $guest = $matches[$i]['guestTeam'];
        $localPoints = $matches[$i]['localPoints'];
        $guestPoints = $matches[$i]['guestPoints'];

        echo '<h2>' .$local .' - ' .$guest .' | ' .$localPoints .'-' .$guestPoints .'</h2>';
      };
      ?>
     </div>
  </body>
</html>
