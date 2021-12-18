<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form>
        <input type="text" name="num1" placeholder="First number">
        <input type="text" name="num2" placeholder="Second number">

        <select name="operator">
            <option>None</option>
            <option value="">Add</option>
            <option value="">Subtract</option>
            <option value="">Multiply</option>
            <option value="">Divide</option>
        </select>
        <br>

        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    <?php



// $x = 2;

/*
if ($x == 1) {
    echo "Dan is Handsome";
} else{
    echo " dan is ugl";
}

*/

/*
switch ($x) {
    case 4:
        # code...
        echo "ans is 2";
        break; //end case num 2
    case 2:
        echo "wrong";
        break;
    default:
        echo "lobaatan";
}

*/

// calculator

/*


if (isset($_GET['submit'])) {
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    
    $operator = $_GET['operator'];
    
    switch ($operator) {
        case "None":
            echo 'You might want to select an operator';
            break;
        case "Add";
            echo $result1 + $result2;
            break;
        case 'Minus':
            echo $result1 - $result2;
            break;
        case 'Multiply':
            echo $result1 * $result2;
            break;
        case 'Divide':
            echo $result1 / $result2; 
    }
}



$dayOfWeek = date('w');

switch ($dayOfWeek) {
    case 1:
        echo "It's Monday";
        break;
    case 2:
        echo "Its Tuesday";
        break;
    case 3:
        echo "its Wednesday";
        break;
    case 4:
        echo "its Thursday";
        break;
    case 5:
        echo "Its Friday";
        break;

      

// LOOP
$x = 1;
while ($x < 5) {
    echo "hi There, mo n loop lowo<br>";
    $x++;
}

  for ($x = 0; $x <= 10; $x++){
      echo 'Hi, mo n loop <br>';
  }


  */

// Array
$array = array('Pineapple', 'Orange', 'Mango', 'Bread');

foreach ($array as $showArray) {
    # code...
    echo "The fruit in the fridge is " .$showArray. '<br>';
}






?>




</body>
</html>