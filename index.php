<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="calculator-container">
        <div class="text">
            PHP <br> CALCULATOR <br>
        </div>
        <form method="POST">
            <div class="form-input">
                <input type="text" placeholder="Enter Number" name="num1" />
            </div>
            <div class="form-input">
                <input type="text" placeholder="Enter Number" name="num2" />
            </div>
            <div class="select-item">
                <select name="operation">
                    <option value="add">ADD</option>
                    <option value="sub">SUB</option>
                    <option value="mul">MUL</option>
                    <option value="div">DIV</option>
                </select>
            </div>
            <div class="submit">
            <input type="submit" value="Submit" name="submit">
            </div>
        </form>
        <div class="form-output">
            <p>
                <?php
                     if(isset($_POST['submit'])){
                     $num1 = $_POST['num1'];
                     $num2 = $_POST['num2'];
                     //echo "{$num1} {$num2}";
                     $operation = $_POST['operation'];
                     switch($operation){
                         case "add": $sum = $num1+$num2;
                         echo "The addition of two number is $sum";
                          break;
                         case "sub": $subt = $num1-$num2;
                         echo "The subtraction of two number is $subt";
                          break;
                         case "mul": $mult = $num1*$num2;
                         echo "The multiplication of two number is $sum";
                          break;
                         case "div": $divi = $num1/$num2;
                         echo "The division of two number is $divi";
                        break;
                         default: echo" not exist";
                    }
                     }
                ?>
            </p>
        </div>
    </div>
    </div>
</body>
</html>