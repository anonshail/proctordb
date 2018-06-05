<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <title>Login Page</title>
    <body class="teal accent-3" style="background-image: linear-gradient(teal,#1de9b6,#1de9b6,teal)">
      <!--Card -->
       <div class ="center" style="margin-top: 5%">
        <div class="row">
           <div class="col s4 offset-s4 grey lighten-3 card z-depth-5" >
              <div style="margin-left: 5%;margin-right: 5%;">
                  <br>
                  <br>

                  <!-- LOGO -->
                   <img class ="responsive-img circle" style="width: 30%"src="images/logo.png" >
                  <br>

                   <!-- Username -->
                  <div class="input-field">
                    <i class="small material-icons prefix">person_outline</i>
                    <input type="text" id="name" class="validate">
                    <label for="name">Username</label>
                  </div>
  
                  <!-- Password -->
                  <div class="input-field">
                    <i class="small material-icons prefix">lock_outline</i>
                    <input type="text" id="password" class="validate">
                    <label for="password">Password</label>
                  </div>
              
                  <!-- Checkbox -->
                  <div style="margin-left: 5%">
                    <p>
                      <label>
                        <input type="checkbox" class="filled-in" id="remember">
                        <span>Remember me!</span>
                      </label>
                    </p>
                  </div>
                  <br>
                  <!-- Login button -->
                  <div>
                    <button class="btn waves-effect z-depth-2 circle" type="submit" name="action" style="background-image: radial-gradient(#4db6ac ,#009688)">
                      Login
                      <i class="material-icons small right">send</i>
                    </button>
                  </div>

                  <br>
                  <br>

                  <div class="row">
                    <a href="#" class="waves-effect teal-text accent-3 left-align waves-lighten" style="width: 40% ;float: left;">Forgot password?</a>

                    <a href="#" class=" waves-effect teal-text accent-3 right-align waves-lighten" style="width: 30%;float: right;">Register now!</a>
                  </div> 
                  

              </div>
              
           </div>
        </div>
       </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
