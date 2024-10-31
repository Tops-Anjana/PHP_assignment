//Color Selector: Write a program to display the name of a color based on user input
(red, green, blue).
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <form action="#" method ="post">
            <label for="color"> Select color</label> <br>
            <select name="color" id="color" required>
            <option value="red" >RED</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            </select>
            <input type="submit" value="Check color">
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"]== "POST"){
                $color=$_POST['color'];
                switch ($color) {
                    case 'red':
                        echo "You selected RED color";
                        break;
                    case  'blue':
                        echo "You selected Blue color";
                        break;
                    case 'green':
                        echo "You selected Green Color";
                        break;
                    default:
                        echo "Invalid color";
                        break;
                }
            }


        ?>
    </body>
</html>