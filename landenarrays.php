<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

include('land.php');
include('quiz.php');


?>
<section>
    <p>Wat is de hoofdstad van<?php echo $vragen?></p>
    <form action="landenarrays.php" method="post">
            Antwoord: <input type="text" name="antwoord"><br>
            <input type="submit">
            <input type="hidden" name="number" value="'.$randomnumber.'">
            </form>
<?php
   if (isset($_POST['antwoord'])){
    echo "Er is antwoord gegeven.";
}
 




    // $antwoord = $_POST["antwoord"];
    // $num = $_POST["number"];
    // $randomnumber = rand(0,50);
    // $land = $vragen;

    //         echo "Wat is de hoofdstad van ", $vragen, "?";
    //         echo '<form action="landenarrays.php" method="post">
    //         Antwoord: <input type="text" name="antwoord"><br>
    //         <input type="submit">
    //         <input type="hidden" name="number" value="'.$randomnumber.'">
    //         </form>';
        

    //     echo $_POST["antwoord"];
    //     unset($_POST["antwoord"]);
    

// if (!isset($_POST['antwoord'])){
//     echo "Er is geen antwoord gegeven.";
// }
//     else if (isset($_POST['antwoord'])){

//     $antwoord = $_POST["antwoord"];
//     $num = $_POST["number"];
//         if ($antwoord == $hoofdstad){
//             echo " You win";
//         }
//         else {
//             echo " Wrong! <br>";
//             $randomnumber = rand(0,50);
//             $land = $vragen;
//             echo "Wat is de hoofdstad van ", $vragen, "?";
//             echo '<form action="landenarrays.php" method="post">
//             Antwoord: <input type="text" name="antwoord"><br>
//             <input type="submit">
//             <input type="hidden" name="number" value="'.$randomnumber.'">
//             </form>';
//         }

//         echo $_POST["antwoord"];
//         unset($_POST["antwoord"]);
//     }



 ?>




</body>
</html>
