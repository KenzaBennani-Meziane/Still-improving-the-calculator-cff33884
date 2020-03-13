<html>
    <h1>Calculator</h1>

    <form method="post">
        <input type="number" name="FirstNumber">
        <label> First Number</label>
            <br>
        <input type="number" name="SecondNumber">
        <label> Second Number</label>
            <br>
    <button name="action" type="submit" value="+">Add</button>
    <button name="action" type="submit" value="-">Subtract</button>
    <button name="action" type="submit" value="*">Multiply</button>
    <button name="action" type="submit" value="/">Divide</button>
    <button name="action" type="submit" value="%">Modulo</button>
    </form>
</html>
<?php


switch ($_REQUEST['action']) {
case "+":
        echo ($_POST['FirstNumber']) + ($_POST['SecondNumber']);        
    break;

case "-":
        echo ($_POST['FirstNumber']) - ($_POST['SecondNumber']);
    break;

case "*":
        echo ($_POST['FirstNumber']) * ($_POST['SecondNumber']);
    break;
    
case"/":
        echo ($_POST['FirstNumber']) / ($_POST['SecondNumber']);
    break;

case "%":
        echo ($_POST['FirstNumber']) % ($_POST['SecondNumber']);
    break;
}