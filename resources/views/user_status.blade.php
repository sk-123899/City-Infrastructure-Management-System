<html>
    <head>
    <title>Status</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/user_status.css">
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

<div class="project">
    <h3 style="text-align:center">Projects Status</h3>
</div>
<table class="table">
        <thead class="bg-info text-white">
          <tr>
            <th scope="col">id</th>
            <th scope="col">City</th>
            <th scope="col">State</th>
            <th scope="col">Region</th>
            <th scope="col">Project_Type</th>
            <th scope="col">Other_Type</th>
            <th scope="col">Area</th>
            <th scope="col">Proof</th>
            <th scope="col">Status</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @if($count_p!=0)
        @for($i=0;$i<$count_p;$i++)
          <tr>
            <th scope="row">{{$i + 1}}</th>
            <td>{{$name[$i]}}</td>
            <td>{{$city[$i]}}</td>
            <td>{{$region[$i]}}</td>
            <td>{{$project_type[$i]}}</td>
            <td>{{$other_type[$i]}}</td>
            <td>{{$area[$i]}}</td>
            <td>{{$contact[$i]}}</td>
            <td>{{$proof[$i]}}</td>
            @if($status_p[$i] == 0)
            <td class="text-primary">Pending...</td>
            @elseif($status_p[$i] == 1)
            <td class="text-success">Accepted</td>
            @else
            <td class="text-danger">Rejected</td>
            @endif
        </tr>
        @endfor
        @endif
        </tbody>
</table>

<div class="grievance">
        <h3 style="text-align:center">Grievance Status</h3>
</div>
<table class="table">
        <thead class="bg-info text-white">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Grievance</th>
            <th scope="col">Ward</th>
            <th scope="col">Landmark</th>
            <th scope="col">Location</th>
            <th scope="col">PinCode</th>
            <th scope="col">Details</th>
            <th scope="col">Replied</th>
            <th scope="col">Status</th>
        
          </tr>
        </thead>
        <tbody>
        @if($count_g!=0)
        @for( $i=0; $i<$count_g; $i++)
          <tr>
            <th scope="row">{{$i + 1}}</th>
            <td>{{$grievance[$i]}}</td>
            <td>{{$ward[$i]}}</td>
            <td>{{$landmark[$i]}}</td>
            <td>{{$location[$i]}}</td>
            <td>{{$pincode[$i]}}</td>
            <td>{{$details[$i]}}</td>
            <td>{{$comment[$i]}}</td>
            @if($status_g[$i] == 1)
            <td class="text-success">Solved</td>
            @elseif($status_g[$i] == 2)
            <td class="text-success">Answered</td>
            @else
            <td class="text-primary">Pending...</td>
            @endif
            </tr>
        @endfor
        @endif
        </tbody>
      </table>

    </body>
    </html>
    