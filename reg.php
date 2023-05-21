
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="rest.css">
</head>
<style>
    body{
      background: url("voter.jpg");
      height: 100vh;
      -webkit-background-size:cover;
      background-size: cover;
      background-position: center center;
      position: relative;
    }
</style>
<body>
    <header>
    <div class="wrapper">
    <ul style="margin-top:80px" class="navigation">
            <li><a href="#">HOME</a></li>
            <li><a href="#">Aboutus</a></li>
            <li><a href="#">Contact</a></li>
            <button href="main.html" type="button" class="btn" value='login' name="button">Logout</button>
          </ul>
        </div>
      </header>
      <div  id='login-form' class="login-page">
        
            <div class="form-box">
                
                <h2 style="color: rgb(199, 17, 144);">Register</h2>


                <form action="server.php"  method="post" class="input-group" entype="multipart/form-data">

                
        

                    <label class="label">Voter id:</label>
                    <input type="number/text" name="id" class='input-field'  required>
            
            

                    <br>
            
                    <label for="ename" class="label">Electros name:</label>
                    <input type="text" name="ename" class='input-field' required>
                    <br>

            
            
                    <label for="guardian" class="label">GUARDIAN:</label>
                    <input type="text" name="guard" class='input-field' required>

                    <br>
                    <label for="dob" class="label">DATE OF BIRTH:</label>
                    <input type="date" name="dob"  class='input-field' required>

                    <br>
                    <p style='color:white'>Please select your gender:</p>
                    <input type="radio" id="male" name="gender" class='input-fieldg' value="male">
                    <label style='color:white' for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" class='input-fieldg' value="female">
                    <label style='color:white' for="female">Female</label><br>
                    <input type="radio" id="other" name="gender" class='input-fieldg' value="other">
                    <label style='color:white' for="other">Other</label>


                    <br>
                    <label style='color:white' for="adress">ADREESS:</label>
                    <input type="text" name="adress" class='input-field'  required>

            
                    <br>
                    <label style='color:white' for="d_creation">DATE OF CREATION</label>
                    <input type="date" name="dcreation" class='input-field' required>
                  
                   
                   
            
                    <br>
                    <button type="submit" class="submit-btn" name="nreg">REGISTER:</button> 

                    <p style='color:white'>Already registerd to the portal ? <a href="voter id.php"><b style='color:rgb(199, 17, 144);'>Log in</b></a> </p>

                </form>
            </div>
        </div>


</body>
</html>