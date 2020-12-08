<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="./css/Login.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img src="./images/logo1.jpg" style="width:2.5%; height:2%;">
            <p class="navbar-brand"> City Infrastructure </p>
            <ul class="navbar-nav">
                <li class="nav-item"><a href={{route('dashboard')}} class="nav-link">Home</a></li>
                <li class="nav-item"><a href="ghome.html" class="nav-link">Greviances</a></li>

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
                <li class="nav-item"><a href="#" class="nav-link">Contacts</a></li>
                <li class="nav-item"><a href="#" class="nav-link">FAQ's</a></li>
                <button class="btn btn-info my-2 my-sm-0" type="submit">Log Out</button>
                
            </ul>
        </nav>

      <div id="login-box">
            <div class="left">
                <h1>Sign up</h1>
            
        <form action="/status" method="POST">
            @csrf
            <input type="text" name="Name" placeholder="Name" />
            <input type="text" name="email" placeholder="E-mail" />
            <input type="password" name="password" placeholder="Password" />
            <input type="password" name="password2" placeholder="Retype password" />
            
            <input type="submit" name="signup_submit" value="Sign me up" />
        </form>  
        </div>
          
          <div class="right">
          <img src="./images/log.jpg" style="  width: 300px; height: 400px; ">
          </div>
        </div>
    </body>