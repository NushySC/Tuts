<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
    <form>
        <input type='text' name='num1' placeholder='Number 1'><br>
        <input type='text' name='num2' placeholder='Number 2'><br>
        <select name='operator'>
        <option>Add</option>
        <option>Substract</option>
        <option>Multiply</option>
        <option>Divide</option>
        </select><br>
        <button type='submit' name='submit' value='submit'>Calculate</button>
    </form>

</body>
</html>

<?php

if(isset($_GET['submit']))
{
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];

    switch ($operator)
    {
        case "nome":
        echo "You need to select an operation";
        break;

        case "Add":
        echo $result1 + $result2;
        break;

        case "Substract":
        echo $result1 - $result2;
        break;

        case "Multiply":
        echo $result1 * $result2;
        break;

        case "Divide":
        echo $result1 / $result2;
        break;

    }
}



?>