<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>FAQ Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
<link rel="stylesheet" href="./css/faq.css">
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

<div class="container">

  <h2>Frequently Asked Questions</h2>

  <div class="accordion">
    <div class="accordion-item">
      <a>Questions related to Public Works Department?</a>
      <div class="content">
        <p>1)For roads maintainance visit main PWD office in the city.</p>
        <p>2)For any private Propertyrelated questions contact/in person to respected authority in PWD Department.</p>
        
      </div>
    </div>
    <div class="accordion-item">
      <a>Questions related to Electrical Department?</a>
      <div class="content">
          <p>1)Where we can register complaint related to electrical fault in our area? </p>
        <p>ans- You can register complaint about your electical issue in near by Electical Department office in ur area.</p>
        <p>     For repairing or any service related to Steet lights and over head wires yuo can contact Electical Department directly from contact <section class=""></section></p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Questions related to Property Tax Department?</a>
      <div class="content">
        <p>1)Where we have to pay our property tax?</p>
        <p>ans- you can pay your property tax by going in person in Property tax department.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Questions related to Health Department?</a>
      <div class="content">
        <p>1)Where to complaint about open drainage lines , Gattars , cleanliness of Public toilets?</p>
        <p>ans- you can file complaint against health authority of that respected City.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Questions related to Town Planning Department?</a>
      <div class="content">
        <p>1)which are require documents for get allowance of New Project/Buildin development?</p>
        <p>ans- NOC from Owner/Gov.authority, FORM A 3.3 , Certificate of Arch. Engineer, C.T.S/T.I.l.R/U.S.C Map, Bills paid Recipts, 200/- Rs. signed Bond Paper.</p>
      </div>
    </div>
    <div class="accordion-item">
        <a>Questions related to Water Supply Department?</a>
        <div class="content">
          <p>1)Where to apply for new Water Connection?</p>
          <p>ans- Divisional Office.</p>
          <p>1)Where to complaint for shortage of water supply?</p>
          <p>ans- Grievance office of Water Supply Department. </p>
        </div>
    </div>
  
  </div>
  
</div>

<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
<script  src="./js/faq.js"></script>

</body>
</html>