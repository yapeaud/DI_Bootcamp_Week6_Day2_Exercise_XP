<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week6_Day2_ExerciseXp</title>
</head>
<body>
    <h1>Exercise 1</h1>
    <?php
    $nbr1 = 15;
    $nbr2 = 25;
    $som = $nbr1 + $nbr2;    
    ?>
    <p><?php echo "The sum of ". $nbr1 . " and ". $nbr2. " is ".  $som; ?></p>
    <hr>
     <h1>Exercise 2</h1>
    <?php 
        for ($count = 5; $count <= 15 ; $count++) { 
            echo $count;
            echo "<br>" ;
        }
    ?>
     <hr>
     <h1>Exercise 3</h1>
     <?php
        $marks = 40;

        if ($marks >= 60)
        {
            $grade = "First Division";
        }
        else if($marks >= 45)
        {
            $grade = "Second Division";
        }
        else if($marks >= 33)
        {
            $grade = "Third Division";
        }
        else
        {
            $grade = "Fail";
        }
    ?>
    <p><?php echo "Student grade: $grade";?></p>
     <hr>
     <h1>Exercise 4</h1>
     <?php
    $day = "5";

    switch ($day) {
        case "1":
            echo "It is Monday!";
            break;
        case "2":
            echo "It is today!";
            break;
        case "3":
            echo "It is Wednesday!";
            break;
        case "4":
            echo "It is Thursday!";
            break;
        case "5":
            echo "It is Friday!";
            break;
        case "6":
            echo "It is Saturday!";
            break;
        case "7":
            echo "It is Sunday!";
            break;
        default:
            echo "Invalid number!";
    }
?>
     <hr>
</body>
</html>