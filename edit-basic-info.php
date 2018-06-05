<!DOCTYPE html>
<html>

<head>
  <title>Nav bar</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/custom.css" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body class="bg bg1">
    <!-- Navigation bar -->
    <nav>
        <div class="nav-wrapper container" style="margin-top: 2%">
       
          <a href="#" class="brand-logo left"><img src="images/logo.png" class="logo"></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#"><i class="material-icons" style="font-size: 320%">home</i></a></li>
            <li><a href="#"><i class="material-icons" style="font-size: 320%">edit</i></a></li>
            <li><a href="#"><i class="material-icons" style="font-size: 320%">message</i></a></li>
            <li><a href="#"><i class="material-icons" style="font-size: 320%;">account_circle</i></a></li>
          </ul>
        </div>
      </nav>

    <ul class="sidenav" id="mobile-demo">
      <li>
        <div class="user-view center z-depth-3">
          <div class="background">
            <img src="images/side_background.jpeg">
          </div>
          <a href="#user"><img class="circle"><i class="material-icons" style="font-size: 500%">account_circle</i></a>
          <a href="#name"><span class="white-text name">name</span></a>
          <a href="#email"><span class="white-text email">name@gmail.com</span></a>
        </div>
      </li>
      <li class="icons"><a href="#"><i class="material-icons left teal-text">home</i>Home</a></li>
      <li class="icons"><a href="#"><i class="material-icons left teal-text">edit</i>Edit</a></li>
      <li class="icons"><a href="#"><i class="material-icons left teal-text">message</i>Messages</a></li>
    </ul>
    <br>

    <!-- End of nav bar -->
      <!--CONTAINER-->
      <div class="container">
        <div class="card-panel z-depth-5">
          <form>

            <div class="row">
              
              <div class="col s12">
                <ul class="tabs">
                  <li class="tab col s3 offset-s2"><a href="#tab1" class="tabfn">Personal info</a></li>                  
                  <li class="tab col s3"><a href="#tab2" class="tabfn">Parents info</a></li>
                  <li class="tab col s3"><a href="#tab3" class="tabfn">Past exams</a></li>
                </ul>
              </div> 
              
          
              <!-- TAB 1 -->
              <div class = "col s12" id="tab1"> 
                <br>
                <br>
                <div class="row">
                  <div class="col s6 input-field">  <!--NAME-->
                    <input type="text" id="name"></input>
                    <label class="active black-text" for="name">Full Name</label>
                  </div>

                  <div class="col s6 input-field">  <!--USN-->
                    <input type="text" id="usn"></input>
                    <label class="active black-text" for="usn">USN</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col s6 input-field">  <!--DOB-->
                    <input type="date" id="dob" calss="validate"></input>
                    <label class="active black-text" for="dob">Date Of Birth</label>
                  </div>

                  <div class="col s6 input-field">  <!--Phone Number-->
                    <input id="icon_telephone" type="tel" class="validate">
                    <label class="active black-text" for="icon_telephone">Mobile Number</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col s6 input-field">  <!--Blood Group-->
                    <input type="text" id="bloodg"></input>
                    <label class="active black-text" for="bloodg">Blood Group</label>
                  </div>

                  <div class="col s6 input-field">  <!--Email ID-->
                    <input id="Email" type="Email" class="validate">
                    <label for="Email" class="active black-text">Email</label>
                  </div>
                </div>
              </div>

              <!-- TAB 2-->
              <div class = "col s12" id="tab2"> 
                <div class="row">
                  <div class="col s6 input-field">  <!--Father's Name-->
                    <input type="text" id="fname"></input>
                    <label class="active black-text" for="fname">Father's Name</label>
                  </div>

                  <div class="col s6 input-field">  <!--father's Email ID-->
                    <input id="femail" type="Email" class="validate">
                    <label class="active black-text" for="femail">Father's Email</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col s6 input-field">  <!--Father's occupation-->
                    <input type="text" id="foccupation"></input>
                    <label class="active black-text" for="foccupation">Occupation</label>
                  </div>

                  <div class="col s6 input-field">  <!--father's conatct-->
                    <input id="ftel" type="tel" class="validate">
                    <label class="active black-text" for="ftel">Father's Contact Number</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col s6 input-field">  <!--Mother's Name-->
                    <input type="text" id="mname"></input>
                    <label class="active black-text" for="mname">Mother's Name</label>
                  </div>

                  <div class="col s6 input-field">  <!--Mother's Email ID-->
                    <input id="memail" type="Email" class="validate">
                    <label class="active black-text" for="memail">Mother's Email</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col s6 input-field">  <!--Mother's occupation-->
                    <input type="text" id="moccupation"></input>
                    <label class="active black-text" for="moccupation">Occupation</label>
                  </div>

                  <div class="col s6 input-field">  <!--Mother's conatct-->
                    <input id="mtel" type="tel" class="validate">
                    <label class="active black-text" for="mtel">Mother's Contact Number</label>
                  </div>
                </div>

              </div>

            <!-- TAB 3-->
            <div class = "col s12" id="tab3"> 
            <br>
            <h6 class="flow-text tabfn red-text">Class X</h6>  <!--Class X-->
            <div class="row">
            <div class="col s4 input-field">  
            <input type="text" id="xboard"></input>
            <label class="active black-text" for="xboard">Board</label>
            </div>

            <div class="col s4 input-field">  
            <input id="xyear" type="text" class="validate">
            <label class="active black-text" for="xyear">Year of Passing</label>
            </div>

            <div class="col s4 input-field">  
            <input id="xperc" type="text">
            <label class="active black-text" for="xperc">Percentage</label>
            </div>
            </div>

            <h3 class="flow-text tabfn red-text">Class XII</h3>  <!--Class XII-->
            <div class="row">
            <div class="col s4 input-field">  
            <input type="text" id="xiiboard"></input>
            <label class="active black-text" for="xiiboard">Board</label>
            </div>

            <div class="col s4 input-field"> 
            <input id="xiiyear" type="text" class="validate">
            <label class="active black-text" for="xiiyear">Year of Passing</label>
            </div>

            <div class="col s4 input-field">
            <input id="xiiperc" type="text">
            <label class="active black-text" for="xiiperc">Percentage</label>
            </div>
            </div>


            <div class="center-align"><a class="waves-effect waves-purple btn red ligten-3"><i class="material-icons right">send</i>Submit</a></div>
            <br>
            </div>


            </div>
          </form>
        </div>
      </div>
      
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/init.js"></script>

    </body>
  </html>