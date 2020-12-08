<html>
    <head>
        <title>Contractor</title>
    </head>
    <link rel="stylesheet" href="./css/Contractor.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <img src="./images/logo1.jpg" style="width:2.5%; height:2%;">
                    <p class="navbar-brand"> City Infrastructure </p>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="ghome.html" class="nav-link">Greviances</a></li>
        
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Projects
                                </a>
                                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="developed.html">Developed</a>
                                        <a class="dropdown-item " href="developing.html">Developing</a>
                                        <a class="dropdown-item" href="to_develope.html">To be Developed</a>
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
                
    <div class="row1">
            <div class="contract">
                    <h1>Contractor Details</h1>
                <form onsubmit="#" action="#">
                    
                    <label for="fname"  class="contract-label" >First Name:</label>
                    <input id ="fname", type="text",name="fname" class="contract-input" placeholder = "Enter First Name" > 
                    <label for="lname" class="contract-label">Last Name:</label>
                    <input id ="lname", type="text", name="lname"placeholder = "Enter Last Name" class="contract-input" >  
                    <label for="city" class="contract-label">City:</label>
                    <input id ="city", type="text", name="city"placeholder = "Enter City" class="contract-input" >  
                    <label for="state" class="contract-label">State:</label>
                    <input id ="state", type="text", name="state"placeholder = "Enter State"  class="contract-input">
                    <label for="state" class="contract-label">Contact Info:</label>
                    <input id ="state", type="tel", name="state"placeholder = "Enter Contact No."  class="contract-input">  
                  
                    
                    <label for="other"class="contract-label">Experience:</label>
                    <input id ="other", type="text", name="other"placeholder = "Enter Details of Previously Developed Projects" class="contract-input" >  
                    
                    <label for="area"class="contract-label">Qualification Details:</label>
                    <input id ="area", type="text", name="area" placeholder = "Enter Degree Info" class="contract-input" >  
    
                    <label for="mob"class="contract-label">Contractor License No.</label>
                    <input id ="mob", type="tel", name="mob" placeholder = "Enter License No." class="contract-input"> 
                    
                    <label for="file" class="contract-label">License Certificate:</label>
                    <input id="file", type="file", name="file" class="address-input" >
    
                <div class="row">             
                    <label for="file" class="contract-label" style="padding-left:14px;">Set Profile Pic:</label>
    
                        <img id="imgFileUpload" alt="Select File" title="Select File" src="profile.jpg" class="profile" />
                        <br />
                        <span id="spnFilePath"></span>
                        <input type="file" id="FileUpload1" style="display: none" />
                </div>
                        <script type="text/javascript">
                            window.onload = function () {
                            var fileupload = document.getElementById("FileUpload1");
                            var filePath = document.getElementById("spnFilePath");
                            var image = document.getElementById("imgFileUpload");
                            image.onclick = function () {
                            fileupload.click();
                            };
                            fileupload.onchange = function () {
                            var fileName = fileupload.value.split('\\')[fileupload.value.split('\\').length - 1];
                            filePath.innerHTML = "<b>Selected File: </b>" + fileName;
                            };
                            };
                        </script>
                
                        <br>
                        <button type="button" class="back-button" onclick="document.location='dashboard.html'">Back</button>
                        <button type ="button" class="contract-button">Submit</button>
                
                </form>
            </div>
    
        </div>
        <script type="text/javascript" src="Contractor.js"></script>
    </body>
</html>