<html>
    <head>
        <title>Developed</title>
    </head>
    <link rel="stylesheet" href="./css/developed.css">
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
                <li class="nav-item"><a href={{route('contacts')}} class="nav-link">Contacts</a></li>
  
            </ul>

            <ul class="navbar-nav ml-auto ">
                <li class="nav-item"><a href={{route('user_status')}} class="nav-link">Status</a></li>
                <li class="nav-item"><a href={{route('about_us')}} class="nav-link">About Us</a></li>
                <a href='/logout'><button class="btn btn-info my-2 my-sm-0" type="submit">Log Out</button></a>
                
            </ul>
        </nav>

                <h2 class="heading">Developed Projects</h2>
            
                <div class="develop-project">
                    <div class="card-deck" >
                        <div class="card">
                          <img class="card-img-top" src="./images/Developed_Images/dev_1.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Mahatma Phule Art Gallery</h5>
                            <p class="card-text"><small class="text-muted">Project Cost: INR 1 CR</small></p>
                            <p class="card-text">Gallery was designed for optimal preservation and display of the extensive and exclusive art works. It exhibits educational and cultural resources of the city through art gallery.</p>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="./images/Developed_Images/dev_2.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">History Museum</h5>
                            <p class="card-text"><small class="text-muted">Project Cost: INR 6 CR</small></p>
                            <p class="card-text">The Museum houses painting of Chatrapati Shivaji Maharaj along with old weapons like swords, dhals, etc. Beautiful garden in front of museum is easily accessible and is a peaceful place for citizens to spend leisure time.</p>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="./images/Developed_Images/dev_3.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Nehru Garden</h5>
                            <p class="card-text"><small class="text-muted">Project Cost: INR 3 CR</small></p>
                            <p class="card-text">Nehru Garden is a pleasing space for everyone for interaction, play games and sports and exercises. The park is located in a highly dense area with full of greenery.</p>
                          </div>
                        </div>
                      </div>
                    <br>
                    <hr>
                    <br>
                    <div class="card-deck" >
                            <div class="card">
                              <img class="card-img-top" src="./images/Developed_Images/dev_4.jpg" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title">Public Bicycle Sharing</h5>
                                <p class="card-text"><small class="text-muted">Project Cost: INR 2 CR</small></p>
                                <p class="card-text">The Schemes is foreseen to act as a feeder service in areas with high auto ridership by providing last mile connectivity to the residents who commute daily for work, education.</p>
                              </div>
                            </div>
                            <div class="card">
                              <img class="card-img-top" src="./images/Developed_Images/dev_5.jpg" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title">Development Of Traffic Park</h5>
                                <p class="card-text"><small class="text-muted">Project Cost: INR 4 CR</small></p>
                                <p class="card-text">Park was developed over a 3 acre Plot. Students and adults are trained with the help of models and sign age showcasing traffic signs like one way, no entry, Zebra crossing and other rules to be followed.</p>
                              </div>
                            </div>
                            <div class="card">
                              <img class="card-img-top" src="./images/Developed_Images/dev_6.jpg" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title">Kalidas Mandir Auditorium</h5>
                                <p class="card-text"><small class="text-muted">Project Cost: INR 10 CR</small></p>
                                <p class="card-text">A 942 seated fully air-conditioned kalidas kala Manadir, a premier venue for artists of theater plays, dramas and other artistic activities is allocated in the center of city.Project includes : refurbish electrical, acoustical and fire management. </p>
                              </div>
                            </div>
                          </div>
                        </div>
        </body>
</html>