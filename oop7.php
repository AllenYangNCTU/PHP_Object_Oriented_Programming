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
    class Payroll
    {
        public $name;
        public function Payment($Hours,$Payrate)
        {
            return $Hours * $Payrate;
        }
    }
    class BonusPayroll extends Payroll
    {
        public function Payment($Hours,$Payrate)
        {
            return $Hours * $Payrate + 5000;
        }
    }
    $obj1 = new Payroll();
    $obj2 = new BonusPayroll();
    print("Payroll : ".$obj1->Payment(100,80)." dollars<br>");
    print("Payroll + Bonus : ".$obj2->Payment(100,80)." dollars<br>");
    ?>
</body>
</html>