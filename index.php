<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 7</title>
</head>
<body>
  <p>
    <?php
    // declaration des variables
    $gender = 'Homme';
    $age = 21;

    // declaration de la fonction
    function gendAge($gender , $age){
      if ($gender == 'Homme' && $age >= 18){
        $message = 'Vous êtes un homme et vous êtes majeur';

      }elseif ($gender == 'Homme' && $age < 18){
        $message = 'Vous êtes un homme et vous êtes mineur';

      }elseif ($gender == 'Femme' && $age >= 18){
        $message = 'Vous êtes une femme et vous êtes majeur';

      }elseif ($gender == 'Femme' && $age < 18){
        $message = 'Vous êtes une femme et vous êtes mineur';

      }else{
        echo 'Euh ???';
      }
      return $message;
    }

    // declaration de la vaiable avec la fonction
    $res = gendAge($gender , $age);
    // appel de le variable
    echo $res;
    ?>
  </p>
</body>
</html>
