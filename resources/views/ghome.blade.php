
<html>
<head>
	<title>Grievance Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/ghome.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img src="./images/logo1.jpg" style="width:2.5%; height:2%;">
            <p class="navbar-brand"> City Infrastructure </p>
            <ul class="navbar-nav">
                <li class="nav-item"><a href={{route('dashboard')}} class="nav-link">Home</a></li>
                <li class="nav-item"><a href={{route('ghome')}} class="nav-link">Greviances</a></li>

                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Projects
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href={{route('developed')}}>Developed</a>
                            <a class="dropdown-item " href={{route('developing')}}>Developing</a>
                            <a class="dropdown-item" href={{route('to_develop')}}>To be Developed</a>
                        </div>
                </li>
  
                <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
            </ul>

            <ul class="navbar-nav ml-auto ">
                <li class="nav-item"><a href={{route('contacts')}} class="nav-link">Contacts</a></li>
                <li class="nav-item"><a href="#" class="nav-link">FAQ's</a></li>
                <a href='/logout'><button class="btn btn-info my-2 my-sm-0" type="submit">Log Out</button></a>
                
            </ul>
        </nav>

	<img class="back" src="./images/ghome_background.png">            
	<div class="project">
		
      <form onsubmit="/action_page.php" action="/newghome" method="POST">
      @csrf
        <img class="logo" src="./images/location.svg">
				<h2 class="title">Grievance Portal</h2>
           		    <div class="project-divs">
           		   		<h5>Choose Appropriate Grievance</h5>
                    <div class="select">
                      <select name="grievance" id="gr-1">
                        <option>Select Grievance</option>
                        <option value="Repairing of broken chambers">Repairing of broken chambers</option>
                        <option value="Straying/Roaming of animals other than dogs">Straying/Roaming of animals other than dogs</option>
                        <option value="Toilets are not clean">Toilets are not clean</option>
                        <option value="Overflowing sewer line or manholes">Overflowing sewer line or manholes</option>
                        <option value="1Contaminated water supply">Contaminated water supply</option>
                        <option value="Speed breakers required/ rectification">Speed breakers required/ rectification</option>
                        <option value="Garbage not lifted from Municipal & Private market">Garbage not lifted from Municipal & Private market</option>
                        <option value="Pot holes on roads">Pot holes on roads</option>
                        <option value="Street Light Not working">Street Light Not working</option>
                        <option value="Sewer Line Choke And Blockage">Sewer Line Choke And Blockage</option>
                        <option value="Repairs of roads">Repairs of roads</option>
                        <option value="Shortage of water supply">Shortage of water supply</option>
                        <option value="Mosquito nuisance">Mosquito nuisance</option>
                        <option value="Issues related to Stray Dogs Sterilisation">Issues related to Stray Dogs Sterilisation</option>
                        <option value="Illegal cutting of trees">Illegal cutting of trees</option>
                      </select>
                    </div>
                  </div>

                  <div class="project-divs">
                    <h5>Select Ward</h5>
                    <div class="select">
                      <select name="ward" id="w-1">
                        <option>Select Ward</option>
                        <option value="A">Ward A</option>
                        <option value="B">Ward B</option>
                        <option value="C">Ward C</option>
                        <option value="D">Ward D</option>
                        <option value="E">Ward E</option>
                        <option value="F">Ward F</option>
                        <option value="G">Ward G</option>
                        <option value="H">Ward H</option>
                        <option value="I">Ward I</option>
                      </select>
                    </div>
                  </div>

           		    <div class="project-divs">
                    <h5>Location Details</h5>
                  </div>

                  <div class="project-divs">
                  <label for="Lmark">Landmark:</label>
                    <input type="text" placeholder="Enter Landmark" id="Lmark" name="lmark">
                  </div>

                  <div class="project-divs">
                    <label for="Loc">Location:</label>
                    <input type="text" placeholder="Enter Location" id="Loc" name="Loc">
                  </div>  

                  <div class="project-divs">
                    <label for="Pin">Pincode:</label>
                    <input type="tel" placeholder="Enter Pincode" id="Pin" name="Pin">
                  </div>  
                  <P>
                    
                  </P>

                  <div class="project-divs">
                    <label for="Gdetail">Grievance Details:</label>
                    <input type="text" placeholder="Enter Grievance Details" id="Gdetail" name="Gdetail">
                  </div>  

                  <div class="my-submit-button-div">
                    <button class="SubmitB">Submit</button>
                  </div>  

           		    	
            </form>
        </div>

    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>