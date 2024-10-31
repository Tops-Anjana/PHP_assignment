<html>
    <h2>
        Check Age
    </h2>
    <form action ="#" method="post">
        <label for="age">Enter your age:</label><br>
        <input type="number" id="age" name="age" required><br><br>
        <input type="submit" value ="Check Age">
    </form>
    <?php
    //Write a script using the ternary operator to display a message if the age is greater than
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $age=$_POST['age'];
        $message=($age>=18)? "Your are Adult" : " Your are minor";

        echo "<h3>$message</h3>";
    }

    ?>

</html>