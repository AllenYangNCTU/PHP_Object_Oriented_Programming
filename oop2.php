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
    class MyMath
    {
        public static function Cubic($X)
        {
            return pow($X,3);
        }
    }
    print("R=9m, then it's dimension is ".MyMath::Cubic("9")."m<sup>3</sup>");
    ?>
</body>
</html>