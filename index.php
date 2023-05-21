<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>VOTER PAYSLIP</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1 >PAYSLIP</h1>
    
   
    <?php 
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "project";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    $t=$_SESSION['voter'];
    $sp=$_SESSION['id'];
    $sql="select *from registration where voterid='$t'";
    $result=mysqli_query($conn,$sql);
    $qu="select *from image where id2='$sp'";
    $re=mysqli_query($conn,$qu);
    while($ar=mysqli_fetch_array($re)){
        ?>
        <div class="output">
        <p  style="padding-top=1%"> IMAGE: </p>
        <div class="rectangle"><img src='image/'<?php echo $ar['image'];?> width='270' height='200'></div>
    <?php
    }?>
    <?php
    while($row=mysqli_fetch_array($result)){
        ?>
        
            <p class="heading"> Voter id: </p>
            <div class="rectangle"><?php echo $row['voterid'];?></div>

            <p class="heading"> Voters name: </p>
            <div class="rectangle"><?php echo $row['enmae'];?></div>

            <p class="heading"> Guardian name: </p>
            <div class="rectangle"><?php echo $row['guardian'];?></div>

            <p class="heading"> gender : </p>
            <div class="rectangle"><?php echo $row['gender'];?></div>

            <p class="heading"> Date of birth: </p>
            <div class="rectangle"><?php echo $row['dateofbirth'];?></div>

            <p class="heading"> Adress as per your voter card : </p>
            <div class="rectangle"><?php echo $row['adress'];?></div>

            <p class="heading"> Date of creation of your votercard : </p>
            <div class="rectangle"><?php echo $row['dcreation'];?></div>

            <p class="heading"> The location where you have to go and vote is </p> 
            <div class=rectangle><?php
            $loc=array("9-21 pattbhipuram","5-11 symalanagar","45-33 krigna nagar");
            $olc=rand(0,2);
            echo $loc[$olc];?></div>

    </div>
    
        <?php
    
    }?>


</body>
</html>