<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="registerStyle1.css" />
  </head>
  <body>
    <section class="container">
      <header><b>Registration Form</b></header>
      <form action="insert.php" method="post" class="form" onsubmit="return validateForm()">

      <script src="script.js"></script>
        

        <!--FIRSTNAME-->
        <div class="input-box">
          <label><b>First Name</b> </label>
          <input type="text" id="fname "name="fname" placeholder="John" required />
        </div>

        <!--LASTNAME-->
        <div class="input-box">
          <label><b>Last Name</b></label>
          <input type="text" id="lname" name="lname" placeholder="Doe" required />
        </div>

        

        <!--CITY-->
        
        <div class="input-box">
          <label><b>City</b></label>
          <input type="text" id="tcity" name="tcity" placeholder="New York City" required />
        </div>

        <!--COUNTRY-->
        <div class="input-box">
          <label><b>Country</b></label>
          <input type="text" id="tcountry" name="tcountry" placeholder="USA" required />
        </div>

        <!--DOB-->
        <div class="column">
          <div class="input-box">
            <label><b>Birth Date</b></label>
            <input type="date" id="tdob" name="tdob" required />
          </div>
        

        <!--PASSPORT NUMBER-->
          <div class="input-box">
            <label><b>Passport Number</b></label>
            <input type="text" id="tpassportno" name="tpassportno" placeholder="N12345678" required />
          </div>
          </div>

          <!--EMAIL-->
          <div class="input-box">
            <label><b>Email</b></label>
            <input type="text" id="temail" name="temail" placeholder="JohnDoe@gmail.com" required />
          </div>

         <!--USERNAME-->
         <div class="input-box">
          <label><b>User Name:</b></label>
          <input type="text" id="uname" name="uname" placeholder="JohnDoe" required />
        </div>

        <!--PASSWORD-->
        <div class="input-box">
          <label><b>Password:</b></label>
          <input type="password" id="pwd" name="pwd" placeholder="" required />
        </div>

        <input type="submit" class="submit" >
        <input type="reset" class="reset">
        </form>
    </section>
    
  </body>
</html>