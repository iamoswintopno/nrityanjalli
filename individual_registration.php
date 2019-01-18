<!DOCTYPE html>
<html>





  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>

      <form  method="post">
      
        <h1>Register</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Individual Registration</legend>
          <label for="name">College Name:</label>
          <input type="text" id="name" name="college_name">

          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="email">
          
          <label for="phone">Phone:</label>
          <input type="text" name="phone">
          
        </fieldset>
        
        
        
          <label>Events:</label>
          <input type="checkbox" id="tillana" value="tillana" name="tillana"><label class="light" for="tillana">Tillana</label><br>
            <input type="checkbox" id="design" value="events" name="events"><label class="light" for="design">Nritya</label><br>
          <input type="checkbox" id="natyanivritti" value="natyanivritti" name="events"><label class="light" for="natyanivritti">Natya Nivritti</label><br>
          <input type="checkbox" id="nrityavritti" value="nrityavritti" name="events"><label class="light" for="nrityavritti">Nritya Vritti</label>
        
        </fieldset>
        <button type="submit" name="submit">Register</button>
      </form>
      
    </body>
</html>