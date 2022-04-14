<?php
       if (isset ($_POST['submit']))
       {
           $num1 = $_POST['num1'];
           $num2 = $_POST['num2'];
           $operator = $_POST['operator'];
           $resultat = $_POST['resultat'];
          switch($operator)
          {
              case "Non":
                 echo "Il faut selectionner un opérateur";
                break;
              case "Addition":
                 $resultat = $num1 + $num2;
                break;
              case "Soustration":
                $resultat= $num1 - $num2;
                break;
              case "Multiplication";
                $resultat =  $num1 * $num2;
                break;
              case "Division":
                $resultat = $num1 / $num2;
                break;
          }
       }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcule</title>
    </head>

<body>

<div class="CALCULE">
 <form action=""  method="POST">

 <label for="">Num1</label>
 <input type="text" name="num1" id="">
 <label for="">Num2</label>
 <input type="text" name="num2" id="">
 
 <select name="operator" id="">
               <option value="Non">Non</option>
               <option value="Addition">Additiion</option>
               <option value="Soustration">Soustration</option>
               <option value="Multiplication">Multiplication</option>
               <option value="Division">Division</option>
               </select>

               <input type="submit" value="calculer" name="submit" id="">
               <input type="text" name="resultat" value="<?php echo $resultat; ?>">
 </form>
</div>
</body>
</html>