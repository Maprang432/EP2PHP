<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page_4_2</title>
    <style>
        /* Add any desired styling for the footer */
        footer {
        background-color: #ffb4b4;
        padding: 3px;
        text-align: center;
        }
        </style>
</head>
<body>
    <h1>4.2 คำนวณเลข และจัดรูปแบบการแสดงผล</h1>
    <?php
    $x=0;
    $y=0;
    ?>
    <h3>
        <?php 
            $x=2;
            $y=2;
            echo "1.".$x.'+'.$y."=".($x+$y); 
        ?>
        <?php 
            $x=15;
            $y=5;
            echo "<br>2.".$x.'-'.$y."=".($x-$y); 
        ?>
        <?php 
            $x=5000;
            $y=10;
            echo "<br>2.".$x.'*'.$y."=".number_format($x*$y); 
        ?>
        <?php 
            $x=9;
            $y=2;
            echo "<br>2.".$x.'/'.$y."=".($x/$y); 
        ?>
        <?php 
            $x=25;
            $y=3;
            echo "<br>2.".$x.'/'.$y."=".number_format($x/$y,2); 
        ?>
    
    
    </h3>

    <h3><a href="index.html">Home</a></h3>


</body>
<footer><p>Copyright &copy by Thobburi University </p></footer>
</html>