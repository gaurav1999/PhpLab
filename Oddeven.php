<?php
$num1=$_POST['number1'];
$num2=$_POST['number2'];
if($num2>$num1)
{
    $temp=$num1;
    $num1=$num2;
    $num2=$temp;
    
}
for($i=$num2;$i<=$num1;$i++)
{
    if($i%2==0)
    {
        $counteven++;
        $even=$even.":".$i;
    }
    else
    {
        $countodd++;
        $odd=$odd.":".$i;
    }
   
}
?>
<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="MainStyle.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="resultdiv">
            <br>
          <p style="text-align:center;font-family:Arial, Helvetica, sans-serif">The Result Is:-</p>
          
          <span style="margin-left:20px">The Even Number</span>
          <input type="text" value=<?php echo $even; ?> />
          <span>&nbsp</span>
          <br>
          <span style="margin-left:20px">Total:- <?php echo $counteven;?> </span>
          <br>
          <span style="margin-left:20px">The Odd Number</span>
          <input type="text" value=<?php echo $odd; ?>/>
          <br>
          <span style="margin-left:20px">Total:- <?php echo $countodd;?> </span>
          <br>
          <br>
         
        </div>
</body>
</html>