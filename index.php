<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
  </head>
  <body>

    <header>
      <h1>PHP Snack B1</h1>
    </header>

    <!--
    DESCRIZIONE:
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
    conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri,
    2. che mail contenga un punto e una chiocciola
    3. e che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    -->

    <a href="?name=ilaria&mail=ilaria@gmail.com&age=24">Visualizza query-string</a>

    <?php
    // Passare come parametri GET name, mail e age
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    ?>

    <h3>Name è più lungo di 3 caratteri:</h3>
    <?php
    if (empty($name)) {
      echo 'No name';
    }
    elseif (strlen($name) < 3) {
      echo "Name ha meno di 3 caratteri";
    }
    else{
      echo "Name accettato";
    }
    ?>

    <h3>Mail contiene sia un punto che una chiocciola:</h3>
    <?php
    if (empty($mail)) {
      echo 'No email';
    }
    elseif (strpos($mail , '@') && strpos($mail , '.')) {
      echo "Mail accettata";
    }
    else {
      echo 'Accesso negato, controllare . e @';
    }
    ?>

    <h3>Age è un numero:</h3>
    <?php
    if (is_numeric($age)) {
      echo 'Età è un numero';
    }
    else {
      echo 'Età non è un numero';
    }
    ?>

    <h3>Accesso:</h3>
    <?php
    // Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    if (is_numeric($age) && strpos($mail , '@') && strpos($mail , '.') && (strlen($name) > 3)) {
        echo 'Accesso riuscito';
    }
    else {
      echo 'Accesso negato';
    }
    ?>


  </body>
</html>
