<html>
    <head>
        <title>Project</title>
    </head>
    <!-- <script src="./js/project.js"></script> -->

    <link rel="stylesheet" href="./css/newProject.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
        
        <div class="row">
        <div class="project">
                <h1>Project Details</h1>
            <!-- <div id="error"></div> -->
            <form name = 'pjform' action={{route('statusnew')}} method="POST">
                @csrf

                <label for="fname" class="project-label">First Name:</label>
                <input id ="fname", type="text", name="fname"placeholder = "Enter First Name" class="project-input" required>  
                <label for="lname" class="project-label">Last Name:</label>
                <input id ="lname", type="text", name="lname"placeholder = "Enter Last Name" class="project-input" required>  
                <label for="city" class="project-label">City:</label>
                <input id ="city", type="text", name="city"placeholder = "Enter City" class="project-input" required>  
                <label for="state" class="project-label">State:</label>
                <input id ="state", type="text", name="state"placeholder = "Enter State"  class="project-input" required>  
                
                <div class="radio">
                    <label for="region"class="project-label" >Region:</label>
                    
                    <input id ="region",  type="radio" value="Resedential" name="region"class="radio-input">
                    <label for="region"class="radio-label"  >Resedential</label> 

                    <input id ="region", type="radio" value="Non-Resedential" name="region" class="radio-input">
                    <label for="region", class="radio-label" >Non-Resedential</label>   
                </div>
                <div class="checkbox">
                        <label for="purpose" class="project-label">Project:</label>
                        <input id ="purpose", type="checkbox" value="House" name="purpose" class="checkbox-input">
                        <label for="purpose" class="checkbox-label">House</label> 
                        <input id ="purpose", type="checkbox" value="Appartment" name="purpose" class="checkbox-input">
                        <label for="purpose"class="checkbox-label">Appartment</label> 
                        <input id ="purpose", type="checkbox" value="Restaurant" name="purpose" class="checkbox-input" >
                        <label for="purpose"class="checkbox-label">Restaurant</label> 
                        <input id ="purpose", type="checkbox" value="Hotel" name="purpose"  class="checkbox-input">
                        <label for="purpose"class="checkbox-label">Hotel</label> 
                        <input id ="purpose", type="checkbox" value="Company" name="purpose"  class="checkbox-input">
                        <label for="purpose"class="checkbox-label">Company</label> 
                        <input id ="purpose", type="checkbox" value="Shop"  name="purpose" class="checkbox-input" >
                        <label for="purpose"class="checkbox-label">Shop</label> 
                        <input id ="purpose", type="checkbox" value="Other" name="purpose"  class="checkbox-input">
                        <label for="purpose"class="checkbox-label">Other</label>    
                </div>
                <label for="other"class="project-label">Other Project:</label>
                <input id ="other", type="text", name="other"placeholder = "Enter Other Project-Ideas" class="project-input" >  
                
                <label for="area"class="project-label">Area (sq.ft):</label>
                <input id ="area", type="tel", name="area" placeholder = "Enter Area (sq.ft)" class="project-input" required>  


                <label for="mob"class="project-label">Contact Number:</label>
                <input id ="mob", type="tel", name="mob" placeholder = "Enter Mobile Number" class="project-input" required> 
                
                <label for="url"class="project-label">Address Proof (Aadhar/Pan/License):</label>
                <input id ="url", type="text", name="file" placeholder = "Only Enter G-Drive Link" class="project-input" required> 
                
                <button type="button" class="back-button" onclick="document.location='dashboard.html'">Back</button>
                <button type="submit" class="project-button">Submit</button>
             
            </form>
    </body>
</html>