<?php

session_start();

error_reporting(0);

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "project";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
$sp=$_SESSION['id'];
     if(isset($_POST['nreg'])){
         $voterid = $_POST['id'];
         $ename = $_POST['ename'];
         $guardian = $_POST['guard'];
         $gender=$_POST['gender'];
         $add = $_POST['adress'];
         $date_birth = date('Y-m-d', strtotime($_POST['dob']));
         $date_ctn = date('Y-m-d', strtotime($_POST['dcreation']));


         $sql = "INSERT into registration(voterid, enmae, guardian, gender, adress, dateofbirth, dcreation,id ) values ('$voterid ', '$ename ', '$guardian', '$gender', '$add ', '$date_birth','$date_ctn',' $sp')";
         
         $result = mysqli_query($conn,$sql);
        
         if(isset($result)){
         
          echo "<script> alert ('registerd'); window.location='voter id.php'; </script> ";
          }
        
          else{
            echo "<script> alert ('Not created contact admin'); </script> ";
                  }
      }
      
     if(isset($_POST['login-btn'])){
        $voterid=$_POST['voterid'];
        $password=$_POST['pass'];
        $pass=$_SESSION['pass'];
        
        $query="SELECT * from registration where voterid='$voterid'";
        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_array($result);
        $id=$row['id'];
        $sql="SELECT * from login where colomn_name='$id'";
        $result=mysqli_query($conn,$sql);
        $r=mysqli_fetch_array($result);

        if($voterid==$row['voterid'] && $password==$r['password']){
          $_SESSION['voter']=$row['voterid'];
          echo "<script>window.location='index.php';</script>";
        }
        else{
            echo "<script>alert('Check your credentials')</script>";
            echo "<script>location.replace('voter id.php') </script>";
        }
        
            
     }
?>







