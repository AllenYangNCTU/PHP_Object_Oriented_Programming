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
    class Circle
    {
        const PI = 3.14;
        public $Radius;
        public function showarea()
        {
            print("The circle area is ".$this->Radius * $this->Radius * self::PI . "m<sup>2</sup>");
        }
    }
    print("PI = ".Circle::PI."<br>");
    $obj= new Circle;
    $obj->Radius = 10;
    print("R = ".$obj->Radius."m<br>");
    $obj->showarea();
    ?>
</body>
</html>