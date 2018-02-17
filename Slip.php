<?php
$Name=$_POST['Name'];
$Sal=$_POST['Sal'];
$Dep=$_POST['Dep'];
$Doj=$_POST['Doj'];
$Doj= date("d-m-Y", strtotime($Doj));
$hra=0.30*$Sal;
$da=$Sal*1.15;
$fixall=5500;
$gross=$Sal+$hra+$da+$fixall;
$incometax=3200;
$pfdeduction=0.12*$Sal;
$loan=0.12*$Sal;
$net=$gross-$incometax-$pfdeduction-$loan;
?>
<html>
    <head>
        <title>
            Salary Slip
        </title>
        <link rel="stylesheet" type="text/css" href="Style.css">
    </head>
    <body>
    
        <div class="heading">
            Salary Slip
            
        </div>
        <div id="dateandname">
         <div style="font-size:16px;text-align:center;background-color:lightgrey">
             Month:- <?php echo date('M') ?>
         </div>
         <div style="font-size:16px;font-style:italic">
             <span> Name:- <?php echo $Name; ?></span>
             <span> &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span>
             
             <span> Department:- <?php echo $Dep; ?> </span> 

         </div>
        </div>
       
       
        <div class="Main">

           <div style="width:50%;float:inherit;background-color:rgba(36, 182, 48, 0.384)">
           <div style="width:100%;text-align:center;background-color:green">
                   <strong>Earnings:</strong>
               </div>
           <div style="width:50%;float:inherit;text-align:right;font-size:14px">
           <div>
                   Basic Salary:-

                   </div>
                   <div>
                       Hra:-
                   </div>
                   <div>
                       Fix Allowance:-
                   </div>
                   <div>
                      Da:-
                   </div>
                   
              </div>
              <div style="float:inherit;text-align:center;width:50%;text-align:left;font-size:14px">
               <div>
                   <span><?php echo $Sal; ?> </span>


                   </div>
                   <div>
                   <span><?php echo $hra; ?> </span>
                   </div>
                   <div>
                   <span><?php echo $fixall; ?> </span>
                   </div>
                   <div>
                   <span><?php echo $da; ?> </span>
                   </div>
           </div>

           </div>
           <div class="deductions">
           <div style="width:100%;text-align:center;background-color:red">
                   <strong>Deductions:</strong>
               </div>
           <div style="width:50%;float:inherit;text-align:right;font-size:14px">
           <div>
                   Loan Deductions:-

                   </div>
                   <div>
                      PF Deductions:-
                   </div>
                   <div>
                      Income Tax:-
                   </div>
                   
                   
              </div>
              <div style="float:inherit;text-align:center;width:50%;text-align:left;font-size:14px">
               <div>
                   <span><?php echo $loan; ?> </span>


                   </div>
                   <div>
                   <span><?php echo $pfdeduction; ?> </span>
                   </div>
                   <div>
                   <span><?php echo $incometax; ?> </span>
                   </div>
                   
           </div>
           </div>
           
        </div>
        <div id="total">
            <div>
             <span style="font-size:15px">Gross Income:- <?php echo $gross ?></span>
             <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</span>
             <span style="font-size:15px">Net Income:- <?php echo $net ?></span>
            </div>
           
        </div>
    </body>
</html>