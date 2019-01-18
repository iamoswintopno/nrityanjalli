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
          <legend><span class="number">2</span>Team Registration</legend>
          <label for="name">College Name:</label>
          <input type="text" id="name" name="college_name">

          <label for="name">Coordinator Name:</label>
          <input type="text" id="name" name="name">

          <label for="name">Faculty Coordinator:</label>
          <input type="text" id="name" name="name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="email">
          
          <label for="phone">Phone:</label>
          <input type="text" name="phone">
          
        </fieldset>
        
        
        
          <label>Team Events:</label>
          <input type="checkbox" id="dholkhol" value="dholkhol" name="dholkhol"><label class="light" for="dholkhol">Dhol Khol</label><br>
            <input type="checkbox" id="natana" value="natana" name="natana"><label class="light" for="natana">Natana</label><br>
          <input type="checkbox" id="tandav" value="tandav" name="tandav"><label class="light" for="tandav">Tandav</label><br>
          <input type="checkbox" id="taal" value="taal" name="taal"><label class="light" for="taal">Taal</label>
          <br>
          <input type="checkbox" id="rangmanch" value="rangmanch" name="rangmanch"><label class="light" for="rangmanch">Rangmanch</label><br>
          <input type="checkbox" id="varnam" value="varnam" name="varnam"><label class="light" for="varnam">Varnam</label>
        
        </fieldset>
        <button type="submit" name="submit">Register</button>
      </form>
      
    </body>
</html>