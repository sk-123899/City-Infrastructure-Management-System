<html>
    <head>
        <title>Developing</title>
    </head>
    <link rel="stylesheet" href="./css/Developed.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

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

                <h2 class="heading">Developing Projects</h2>
            
                <div class="develop-project">
                    <div class="card-deck" >
                        <div class="card">
                          <img class="card-img-top" src="./images/Developing_Images/devl_1.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Pandit Paluskar Auditorium</h5>
                            <p class="card-text"><small class="text-muted">Project Cost: INR 1 CR</small></p>
                            <p class="card-text">Renovation of Pandit Paluskar auditorium is expected to improve functional and aesthetic experience of the people.Renovated the front elevation and entrance court also. </p>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="./images/Developing_Images/devl_2.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Installation of Solar Panels</h5>
                            <p class="card-text"><small class="text-muted">Project Cost: INR 6 CR</small></p>
                            <p class="card-text">Solar panel would be installed on the rooftop of 16 government building. Scope of work included preparation of Green & Blue Environment plan, reduction in conventional energy demand by resorting to renewable energy sources.</p>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="./images/Developing_Images/devl_3.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Smart Parking Management</h5>
                            <p class="card-text"><small class="text-muted">Project Cost: INR 2 CR</small></p>
                            <p class="card-text">The ICT baced parking management has been proposed for 28 On-street, and 5 Off-Street Public parking spaces. The ICT system will assist in providing real time information about vacant parking slots through city app.</p>
                          </div>
                        </div>
                      </div>
                    <br>
                    <hr>
                    <br>
                    <div class="card-deck" >
                            <div class="card">
                              <img class="card-img-top" src="./images/Developing_Images/devl_4.jpg" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title">Redevelopment Of Major And Minor Roads</h5>
                                <p class="card-text"><small class="text-muted">Project Cost: INR 7 CR</small></p>
                                <p class="card-text">Significant improvement in overall civic infrastructure. Aesthetic improvement of internal roads in ABD area also upgraded civil infrastructure like footpaths, storm light, street furniture,traffic sign age,etc.</p>
                              </div>
                            </div>
                            <div class="card">
                              <img class="card-img-top" src="./images/Developing_Images/devl_5.jpg" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title">Street Light</h5>
                                <p class="card-text"><small class="text-muted">Project Cost: INR 25 CR</small></p>
                                <p class="card-text">Intelligent IT innovations to transportation, civic utilities, public safety without adding significantly more physical infrastructure.Reduce carbon footprint,Improve overall safety and security.</p>
                              </div>
                            </div>
                            <div class="card">
                              <img class="card-img-top" src="./images/Developing_Images/devl_6.jpg" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title">Pilot Smart Road</h5>
                                <p class="card-text"><small class="text-muted">Project Cost: INR 0 CR</small></p>
                                <p class="card-text">Proposed features of the smart road are uniform standard carriage way width from one junction to another, properly designed footpaths, bicycle lane, road intersection development, infrastructure utility ducts below footpaths, road marking,etc. </p>
                              </div>
                            </div>
                          </div>
                        </div>
        </body>
</html>