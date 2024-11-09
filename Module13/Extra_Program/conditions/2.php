<!-- Switch Case with Multiple Cases: Write a script that accepts a grade (A, B, C, D, F)
and displays a message using a switch statement. Handle multiple cases that fall under
the same logic (e.g., A and B show "Excellent"). -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
    <input type="radio" name="a" value="A" id="A">A
    <input type="radio" name="a" value="B" id="B">B
    <input type="radio" name="a" value="C" id="C">C
    <input type="radio" name="a" value="D" id="D">D
    <input type="radio" name="a" value="F" id="F">F
    <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
<?php
   if(isset($_POST['a'])){
    $a=$_POST['a'];
        switch ($a) {
            case 'A':
            case 'B':
                echo "Excellent";
                break;
            case 'C':
                echo "Good";
                break;
            case 'D':
                echo "Poor";
                break;
            case 'F':
                    echo "Fail";
                    break;
            default:
                 echo "thank YOU";
                break;
        }
   }
?>