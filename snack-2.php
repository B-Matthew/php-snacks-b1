<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-snacks-2</title>
    <style>
      body {
        background-color: lightblue;
      }
      .container {
        width: 70%;
        margin: auto;
      }
      .accepted {
        color: green;
      }
      .negate {
        color: red;
      }
    </style>
  </head>
  <body>
    <!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
    che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
    Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

    <!-- COPY THIS IN URL ?name=Matthew&mail=matsgeco92@hotmail.it&age=28 -->

    <div class="container">

      <?php

        $name = $_GET['name'];
        $eMail = $_GET['mail'];
        $age = $_GET['age'];
        $at = strpos($eMail, '@');
        $dot = strpos($eMail, '.');

        if (strlen($name) > 3 && is_numeric($age) && $dot != false && $at != false) {

          echo "<h1 class='accepted'>Accesso riuscito</h1>";
        } else {

          echo "<h1 class='negate'>Accesso negato</h1>";
        }
      ?>

     </div>
  </body>
</html>
