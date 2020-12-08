<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="./css/admin.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img src="./images/logo1.jpg" style="width:2.5%; height:2%;">
            <p class="navbar-brand"> City Infrastructure </p>
            <ul class="navbar-nav">
                <li class="nav-item"><a href={{route('admin_projects')}} class="nav-link">Project Approval</a></li>
                <li class="nav-item"><a href={{route('admin_grievances')}} class="nav-link">Greviances Approval</a></li>
              </ul>

            <ul class="navbar-nav ml-auto ">
                <a href="/logout"><button class="btn btn-info my-2 my-sm-0" type="submit">Log Out</button></a>
                
            </ul>
        </nav>

</body>
</html>

