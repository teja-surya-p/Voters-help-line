
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>voterid</title>
    <link rel="stylesheet" href="voterid.css">
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
          <div class="logo">
            <img src="logo11.png" alt="">
          </div>
          <ul class="navigation">
            <li><a href="#">HOME</a></li>
            <li><a href="#">Aboutus</a></li>
            <li><a href="#">Contact</a></li>
            <button type="button" href="main.html" class="btn" name="button"><a href="logout.php">Logout</a></button>
          </ul>
        </div>
      </header>
      <div  id='login-form' class="login-page">
        <div class="form-box">
          
            
            <form action="server.php" method="POST" id="login" class='input-group'>
              <h1>VOTER PAYSLIP</h1>
              <input type="text" name="voterid" class='input-field' placeholder="VOTER ID"required><br><br>
              <input type="password" name="pass" class='input-field' placeholder="Enter Password"required>
              <br><br>
              
             <input class="submit-btn" name="login-btn" type="submit" value="login">
            </form>
          </div>
      </div>
          <div class="diffreg">
            <ul class="arrange">
              <li><a href="mainres.php">New Registration</a></li>
              
              
            </ul>
          </div>
  
          
  </body>
</html>
