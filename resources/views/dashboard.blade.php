<html>
    <head>
    <title>Home</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="./css/dashboard.css">
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
                <li class="nav-item"><a href={{route('contacts')}} class="nav-link">Contacts</a></li>
  
            </ul>

            <ul class="navbar-nav ml-auto ">
                <li class="nav-item"><a href={{route('user_status')}} class="nav-link">Status</a></li>
                <li class="nav-item"><a href={{route('about_us')}} class="nav-link">About Us</a></li>
                <a href='/logout'><button class="btn btn-info my-2 my-sm-0" type="submit">Log Out</button></a>
                
            </ul>
        </nav>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-item active">
                    <a class="slider-img" href="Project.html"><img class="d-block w-100 img-fluid" src="./images/carousel_1.jpg"></a> 
                    <div class="carousel-caption">
                    <h3>Add Project</h3>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <a class="slider-img" href="ghome.html"><img class="d-block w-100 img-fluid" src="./images/carousel_2.jpg"></a> 
                    <div class="carousel-caption">
                    <h3 style="color:#343a40;">Add Grievance</h3>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <a class="slider-img" href="Home.html"><img class="d-block w-100 img-fluid" src="./images/carousel_3.jpg"></a> 
                    <div class="carousel-caption">
                    <h3 style="color:green;">Details Of PMAY</h3>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
        </div>
        <div class="row">
            
                <div class="column1">
                  <h3 style="text-align :center">Approval For Project</h3>
                  <ul style="margin-left:5%;">
                    <li>We are here for approval of project in city.If have to approve the project login here and submit the idea for approval.
                    </li>
                    <li><a href="#">Schemes and Yojanas by Government</a></li>
                    <li><a href="#">Rules for Construction</a></li>
                    <button type="button" class="Project-button" onclick="window.location ='{{route('new-project')}}'" >Apply For Approval</button>
                  </ul>
                </div>
                <div class="column2">
                  <h3 style="text-align :center">Grievances</h3>
                  <ul style="margin-left:5%;">
                    <h6>File a complaint</h6>
                    <li>All you have to do is register with us, fill the form with your complaint. Our experts will immediately check the complaint details and concerned with company to get you the justice.</li>
                    <button type="button" class="Project-button" onclick="window.location ='{{route('ghome')}}'" >Any Complaint?</button>
                  </ul>
                </div>
        </div>
              
        <div class="row" style="background-color: #343a40; ">
            <a href="#" style="margin-left:5%;"><p style="color: white;">Disclaimer and policies</p></a>
            <p>&nbsp;&nbsp; | &nbsp;&nbsp;  </p>
            <a href="#" ><p style="color: white;">Helpline Numbers</p></a>
            <p>&nbsp;&nbsp; |&nbsp;&nbsp;</p>
            <a href="#"><p style="color: white;">FAQ's</p></a>
        </div>

        <div class="row" style="background-color: #343a40;">
            <br><br>
            <p style="margin-left:5%; color: white;">An initiative by Chief Minister’s Office, Mantralaya, Mumbai. Supported by Directorate of Information Technology (DIT)</p>
        </div>
     
    </body>
</html>
