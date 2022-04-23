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
    abstract class Payroll
    {
        public $name;
        abstract public function Payment($Hours,$Payrate);
    }
    class BonusPayroll extends Payroll
    {
        public function Payment($Hours,$Payrate)
        {
            return $Hours * $Payrate + 5000;
        }
    }
    $obj = new BonusPayroll();
    print("Payroll + Bonus : ".$obj->Payment(100,80)." dollars<br>");
    ?>
</body>
</html>