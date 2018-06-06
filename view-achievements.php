<!DOCTYPE html>

<style>
.centertable {
    margin-left: 2%;
    margin-right: 2%;
    width: 100%;
    border-spacing: 0;
    allign:center;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(odd) {
    background-color: #bdbdbd
}

tr:nth-child(even) {
    background-color: #f2f2f2
}
</style>


<html>

<head>
  <title>Achievements</title>
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
       
          <a href="#" class="brand-logo center responsive-img"><img src="images/logo.png" class="logo"></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger show-on-large"><i class="material-icons" style="font-size: 320%">menu</i></a>
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
            <img src="images/background.jpg">
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

    <!-- End of nav bar -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js
        "></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/init.js"></script>

    <!--Start of a container-->
    <div class="container">
    	<br><br>
    	<!--CARD-->
    		<div class="card-panel z-depth-5">
    			<h1 class="flow-text center">Achievements</h1>

    			<!--TABS-->
    			<!-- Creating 4 tabs :
				1) Details of Competitive Exams
				2) Details of Internships / Industrial Training
				3) Scholarships Received
				4) Details of Soft Skill Training and Placement
    			-->


				  <div class="row">
				    <div class="col s12">
				      <ul class="tabs">
				        <li class="tab col s3"><a class="active teal-text" href="#test1">Competitive Exams</a></li>
				        <li class="tab col s3"><a class="teal-text" href="#test2">Internships</a></li>
				        <li class="tab col s3"><a class="teal-text" href="#test3">Scholarships</a></li>
				        <li class="tab col s3"><a class="teal-text" href="#test4">Placements</a></li>
				      </ul>
				    </div>

				    <div id="test1" class="col s12"><!--Details of Competitive Exams-->
				    	<table class="striped highlight centered responsive-table centerable" style="margin-bottom: 3%;margin-top: 3%">
				    		<thead>
				    			<th>Details of Examination</th>
				    			<th>Results Obtained</th>
				    		</thead>

				    		<tbody>
				    			<tr>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    			</tr>
				    			<tr>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    			</tr>
				    			<tr>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    			</tr>
				    			<tr>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    			</tr>
				    			<tr>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    			</tr>
				    		</tbody>
				    	</table>
				    	<br><br>
				    </div> 

				    <div id="test2" class="col s12"><!--Details of Internships / Industrial Training-->
				    	<table class="centered centertable responsive-table striped " style="margin-bottom: 3%;margin-top: 3%">
				    		<thead>
				    			<th>Name of Organization</th>
				    			<th>Date</th>	
				    		</thead>

				    		<tbody>
				    			<tr>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    			</tr>
				    			<tr>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    			</tr>
				    			<tr>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    			</tr>
				    			<tr>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    			</tr>
				    			<tr>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    			</tr>
				    		</tbody>
				    	</table>
				    	<br><br>
				    </div> 

				    <div id="test3" class="col s12"><!--Scholarships Received-->
				    	<table class="centered centertable responsive-table striped " style="margin-bottom: 3%;margin-top: 3%">
				    		<thead>
				    			<th>Name of Scholarship</th>
				    			<th>Date</th>
				    			<th>Grant</th>	
				    		</thead>

				    		<tbody>
				    			<tr>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    			</tr>
				    			<tr>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    			</tr>
				    			<tr>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    			</tr>
				    			<tr>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    			</tr>
				    			<tr>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    			</tr>
				    		</tbody>
				    	</table>
				    	<br><br>
				    </div> 

				    <div id="test4" class="col s12"><!--Details of Soft Skill Training and Placement-->
				    	<table class="centered centertable responsive-table striped " style="margin-bottom: 3%;margin-top: 3%">
				    		<thead>
				    			<th>Name of Organization</th>
				    			<th>Date</th>	
				    		</thead>

				    		<tbody>
				    			<tr>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    			</tr>
				    			<tr>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    			</tr>
				    			<tr>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    			</tr>
				    			<tr>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    			</tr>
				    			<tr>
				    				<td class="center"></td>
				    				<td class="center"></td>
				    			</tr>
				    		</tbody>
				    	</table>
				    	<br><br>
				    </div> 
				  
				  </div>
    		</div>
    	<!--END OF CARD-->
    </div>
    <!--END OF CONTAINER-->

</body>


</html>
