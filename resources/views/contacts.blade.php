<html>
    <head>
        <title>Contacts</title>
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

        <h2 class="heading">Important Contacts</h2>

<div class="develop-project">
        <div class="card-deck" >
            <div class="card">
              <img class="card-img-top" src="./images/Contacts/img1.jpg"  alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Ambulance</h5>
                <p class="card-text">102</p>
              </div>
            </div>

            <div class="card">
                    <img class="card-img-top" src="./images/Contacts/img2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Police</h5>
                      <p class="card-text">100</p>
                    </div>
            </div>
      
            <div class="card">
                    <img class="card-img-top" src="./images/Contacts/img3.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Firebrigade</h5>
                      <p class="card-text">101</p>
                    </div>
            </div>

            <div class="card">
                    <img class="card-img-top" src="./images/Contacts/img4.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Civil Hospital</h5>
                      <p class="card-text">011-24363260</p>
                    </div>
            </div>
            <div class="card">
                    <img class="card-img-top" src="./images/Contacts/img5.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">COVID Helpline</h5>
                      <p class="card-text">011-23978046 OR 1075</p>
                    </div>
            </div>

            <div class="card">
                    <img class="card-img-top" src="./images/Developed_Images/dev_1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Railway Enquiry</h5>
                      <p class="card-text">139</p>
                    </div>
            </div>

            
</div>

            <br>
            <hr>
            <br>


            <div class="card-deck" >
                    <div class="card">
                      <img class="card-img-top" src="./images/Developed_Images/dev_1.jpg"  alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Kisan Call Centre</h5>
                        <p class="card-text">1551</p>
                      </div>
                    </div>
        
                    <div class="card">
                            <img class="card-img-top" src="./images/Developed_Images/dev_1.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Anti Poisson</h5>
                              <p class="card-text">1066</p>
                            </div>
                    </div>
              
                    <div class="card">
                            <img class="card-img-top" src="./images/Developed_Images/dev_1.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">LPG Leak Helpline</h5>
                              <p class="card-text">1906</p>
                            </div>
                    </div>
        
                    <div class="card">
                            <img class="card-img-top" src="./images/Developed_Images/dev_1.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Senior Citizen Helpline</h5>
                              <p class="card-text">1091 , 1291</p>
                            </div>
                    </div>
                    <div class="card">
                            <img class="card-img-top" src="./images/Developed_Images/dev_1.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Road Accident Emergency</h5>
                              <p class="card-text">1073</p>
                            </div>
                    </div>
        
                    <div class="card">
                            <img class="card-img-top" src="./images/Developed_Images/dev_1.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Muncipal Corporation</h5>
                              <p class="card-text">1088</p>
                            </div>
                    </div>
        
                    
        </div>


    </div>

</body>
</html>