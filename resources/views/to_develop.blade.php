<html>
    <head>
        <title>To be Develop</title>
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
                <li class="nav-item"><a href={{route('contacts')}} class="nav-link">Contacts</a></li>
  
            </ul>

            <ul class="navbar-nav ml-auto ">
                <li class="nav-item"><a href={{route('user_status')}} class="nav-link">Status</a></li>
                <li class="nav-item"><a href={{route('about_us')}} class="nav-link">About Us</a></li>
                <a href='/logout'><button class="btn btn-info my-2 my-sm-0" type="submit">Log Out</button></a>
                
            </ul>
        </nav>

                <h2 class="heading">To be Develop Projects</h2>
            
                <div class="develop-project">
                    <div class="card-deck" >
                        <div class="card">
                          <img class="card-img-top" src="./images/to_develop/devl_1.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Multi Level Parking </h5>
                            <p class="card-text"><small class="text-muted">Project Cost: INR 15 CR</small></p>
                            <p class="card-text">Due to high demand of off-street parking in the old city area due to religious places, two locations for multi-level car parking have been identified to cater to the growing demand. </p>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="./images/to_develop/devl_2.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">River Beautification</h5>
                            <p class="card-text"><small class="text-muted">Project Cost: INR 30 CR</small></p>
                            <p class="card-text">Aim is to promote heritage and cultural tourism thorough Beautification through cobble stone paving , stone benches, cycle track, sign board, tree plantation, heritage walks, jetty and floating fountain</p>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="./images/to_develop/devl_3.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Pan City Water Project</h5>
                            <p class="card-text"><small class="text-muted">Project Cost: INR 40 CR</small></p>
                            <p class="card-text">Installation of SCADA system will help the MMC in conducting bulk water audit from source till ESR level. It will help automation of entire water supply system at intake well, water treatment plants, water levels in ESRs.</p>
                          </div>
                        </div>
                      </div>
        </body>
</html>