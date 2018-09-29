<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation =$_POST['operation'];
    $reset =$_POST['reset'];

    if ($reset){
        $view = '';
        $number1 = 0;
        $number2 = 0;
        $operation = false;
        $view = '';
    }

    if ($operation){
        if ($operation=='+'){
            $result = $number1 + $number2;
        }
        if ($operation=='-'){
            $result = $number1 - $number2;
        }
        if ($operation=='*'){
            $result = $number1 * $number2;
        }
        if ($operation=='/'){
            $result = ($number2 != 0) ? $number1/$number2 : 'Infinity';
        }
    }
    $view = "$number1 $operation $number2 " . $result;
}
?>

<form action="" method="post">
    <div style="margin: 20px">
    <input type="text" name="number1" value="<?= $number1 ?>"><br>
    <input type="text" name="number2" value="<?= $number2 ?>"><br>
    <input type="text" name="result" value="<?= $result ?>"><br>
    </div>

    <select style="margin: 20px" name="operation" onchange="submit()">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br>

    <div style="margin: 20px">
        <input type="submit" name="operation" value="+">
        <input type="submit" name="operation" value="-">
        <input type="submit" name="operation" value="*">
        <input type="submit" name="operation" value="/">
        <input type="submit" name="reset" value="reset">
    </div>

</form>
