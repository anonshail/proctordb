
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <title>Basic Information | Edit</title>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body class="teal accent-3" style="background-image: linear-gradient(teal,#1de9b6,#1de9b6,teal) repeat-background : no-repeat">

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <!-- NAVBAR WILL GO HERE-->

      <!--CONTAINER-->

      <div class="container">
        <h1 class="flow-text center-align">Edit Basic Information</h1>

        <br>
        <h2 class="flow-text">Your Basic Information</h2>

        <form>
          <div class="row">
            <div class="col s6 input-field">  <!--NAME-->
              <input type="text" id="name"></input>
              <label class="active" for="name">Full Name</label>
            </div>

            <div class="col s6 input-field">  <!--USN-->
              <input type="text" id="usn"></input>
              <label class="active" for="usn">USN</label>
            </div>
          </div>

          <div class="row">
            <div class="col s6 input-field">  <!--DOB-->
              <input type="date" id="dob" calss="validate"></input>
              <label class="active" for="dob">Date Of Birth</label>
            </div>

            <div class="col s6 input-field">  <!--Phone Number-->
              <input id="icon_telephone" type="tel" class="validate">
              <label for="icon_telephone">Mobile Number</label>
            </div>
          </div>

           <div class="row">
            <div class="col s6 input-field">  <!--Blood Group-->
              <input type="text" id="bloodg"></input>
              <label class="active" for="bloodg">Blood Group</label>
            </div>

            <div class="col s6 input-field">  <!--Email ID-->
              <input id="Email" type="Email" class="validate">
              <label for="Email">Email</label>
            </div>
          </div>

          <br><br>
          <h2 class="flow-text">Father's Information</h2>

          <div class="row">
            <div class="col s6 input-field">  <!--Father's Name-->
              <input type="text" id="fname"></input>
              <label class="active" for="fname">Father's Name</label>
            </div>

            <div class="col s6 input-field">  <!--father's Email ID-->
              <input id="femail" type="Email" class="validate">
              <label for="femail">Father's Email</label>
            </div>
          </div>

          <div class="row">
            <div class="col s6 input-field">  <!--Father's occupation-->
              <input type="text" id="foccupation"></input>
              <label class="active" for="foccupation">Occupation</label>
            </div>

            <div class="col s6 input-field">  <!--father's conatct-->
              <input id="ftel" type="tel" class="validate">
              <label for="ftel">Father's Contact Number</label>
            </div>
          </div>

          <br><br>
          <h2 class="flow-text">Mother's Information</h2>

          <div class="row">
            <div class="col s6 input-field">  <!--Mother's Name-->
              <input type="text" id="mname"></input>
              <label class="active" for="mname">Mother's Name</label>
            </div>

            <div class="col s6 input-field">  <!--Mother's Email ID-->
              <input id="memail" type="Email" class="validate">
              <label for="memail">Mother's Email</label>
            </div>
          </div>

          <div class="row">
            <div class="col s6 input-field">  <!--Mother's occupation-->
              <input type="text" id="moccupation"></input>
              <label class="active" for="moccupation">Occupation</label>
            </div>

            <div class="col s6 input-field">  <!--Mother's conatct-->
              <input id="mtel" type="tel" class="validate">
              <label for="mtel">Mother's Contact Number</label>
            </div>
          </div>

          <br><br>
          <h2 class="flow-text">Local Gaurdian's Information(If Applicable)</h2>

          <div class="row">
            <div class="col s6 input-field">  <!--LG's Name-->
              <input type="text" id="lgname"></input>
              <label class="active" for="lgname">Gaurdian's Name</label>
            </div>

            <div class="col s6 input-field">  <!--LG's Email ID-->
              <input id="lgemail" type="Email" class="validate">
              <label for="lgemail">Gaurdian's Email</label>
            </div>
          </div>

          <div class="row">
            <div class="col s6 input-field">  <!--LG's occupation-->
              <input type="text" id="lgoccupation"></input>
              <label class="active" for="lgoccupation">Occupation</label>
            </div>

            <div class="col s6 input-field">  <!--LG's conatct-->
              <input id="lgtel" type="tel" class="validate">
              <label for="lgtel">Gaurdian's Contact Number</label>
            </div>
          </div>

          <br><br>
          <h2 class="flow-text">Details for qualifying examination</h2> <!--Board Details-->
          <h3 class="flow-text">Class X</h3>  <!--Class X-->
          <div class="row">
            <div class="col s4 input-field">  
              <input type="text" id="xboard"></input>
              <label class="active" for="xboard">Board</label>
            </div>

            <div class="col s4 input-field">  
              <input id="xyear" type="text" class="validate">
              <label for="xyear">Year of Passing</label>
            </div>

            <div class="col s4 input-field">  
              <input id="xperc" type="text">
              <label for="xperc">Percentage</label>
            </div>
          </div>

          <br>
          <h3 class="flow-text">Class XII</h3>  <!--Class XII-->
          <div class="row">
            <div class="col s4 input-field">  
              <input type="text" id="xiiboard"></input>
              <label class="active" for="xiiboard">Board</label>
            </div>

            <div class="col s4 input-field"> 
              <input id="xiiyear" type="text" class="validate">
              <label for="xiiyear">Year of Passing</label>
            </div>

            <div class="col s4 input-field">
              <input id="xiiperc" type="text">
              <label for="xiiperc">Percentage</label>
            </div>
          </div>

          <br>
          <div class="center-align"><a class="waves-effect waves-light btn"><i class="material-icons right">send</i>Submit</a></div>
          <br><br>
        </form> <!--END OF FORM-->        

      </div>

    </body>
  </html>