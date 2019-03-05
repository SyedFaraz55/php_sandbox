<?php include 'config.php'; ?>
<?php

    if(isset($_POST['submit'])){

    }


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGIN !</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

            
    <script src="main.js"></script>
</head>
<body>
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo" style="margin-left:30px;">EVENT BAY</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      </ul>
    </div>
  </nav>
    <header>
       <div class="container">
            <h3>Sign Up</h3>
            <hr>
            <form name="signup" id="signup" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Placeholder" id="first_name" type="text" class="validate" name="username">
                    <label>Username Name</label>
                </div>
             </div>
             <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Placeholder" id="first_name" type="password" class="validate" name="password">
                    <label>Password</label>
                </div>
             </div>
             <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Placeholder" id="first_name" type="text" class="validate" name="firstname">
                    <label>First Name</label>
                </div>
             </div>
             <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Placeholder" id="first_name" type="text" class="validate" name="lastname">
                    <label>last Name</label>
                </div>
             </div>
             <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
                <i class="material-icons right">send</i>
            </button>
        
         </div>
            </form>
    </header>










    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
</body>
</html>