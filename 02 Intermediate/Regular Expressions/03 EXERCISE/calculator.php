<!-- Write a PHP script to build a Calculator using  forms. -->
<?php
$no1=0;
$no2=0;
$result=0;
if(isset($_POST['submit'])){
    $no1=$_POST['no1'];
    $no2=$_POST['no2'];
    $arth=$_POST['calculate'];
    switch($arth){
        case "add":
            $result=$no1+$no2;
         break;
         case "sub":
            $result=$no1-$no2;
        break;
        case "mul":
            $result=$no1*$no2;
        break;
        case "div":
            $result=$no1/$no2;
        break;
    } }
?>
<html>
    <head>
        <title>Calculator</title>
    </head>
     <body>
         <form method="post" action="<?php $_PHP_SELF?>">
         Number 1 <input type="number" name="no1" value="<?php echo $no1;?>"><br><br>
         Number 2 <input type="number" name="no2" value="<?php echo $no2;?>"><br><br>
         <input type="radio" name="calculate" value="add">Add
         <input type="radio" name="calculate" value="sub">Sub
         <input type="radio" name="calculate" value="mul">Mul
         <input type="radio" name="calculate" value="div">Div<br><br>
         <input type="submit" name="submit" value="Calculate">
        </form>
        <div>
            <br>
            Result= <?php echo "$result";?>
        </div>
    </body>
    </html>
