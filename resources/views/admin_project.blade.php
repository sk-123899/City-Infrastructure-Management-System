<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/admin.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img src="./images/logo1.jpg" style="width:2.5%; height:2%;">
            <p class="navbar-brand"> CIMS (Admin)</p>
            <ul class="navbar-nav">
                <li class="nav-item"><a href={{route('admin')}} class="nav-link">Project Approval</a></li>
                <li class="nav-item"><a href={{route('admin_grievances')}} class="nav-link">Greviances Approval</a></li>
              </ul>

            <ul class="navbar-nav ml-auto ">
                <a href='/logout'><button class="btn btn-info my-2 my-sm-0" type="submit">Log Out</button></a>
                
            </ul>
        </nav>

<div class="heading"> 
    <h3 style="text-align:center">Projects Approved</h3>
</div>
<table class="table">
        <thead class="bg-info text-white">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">City</th>
            <th scope="col">Region</th>
            <th scope="col">Project_Type</th>
            <th scope="col">Other_Type</th>
            <th scope="col">Area</th>
            <th scope="col">Contact</th>
            <th scope="col">Address Proof</th>
            <th scope="col">Status</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @if($count!=0)
        @for($i=0;$i<$count;$i++)
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
            @if($status[$i] == 1)
            <td class="text-success">Accepted</td>
            <td></td>
            @elseif($status[$i] == 2)
            <td class="text-danger">Rejected</td>
            <td></td>
            @else
            <form method="POST" action = {{route('accept')}} >
                                @csrf
                                <input type="number" name="pid" hidden readonly value={{$id[$i]}}>
                                <td><button type = "submit" class="btn btn-outline-success text-black">Accept</button></td>
                            </form>
            <form method="POST" action = {{route('reject')}} >
                                @csrf
                                <input type="number" name="pid" hidden readonly value={{$id[$i]}}>
                                <td><button type = "submit" class="btn btn-outline-danger text-black">Reject</button></td>
                            </form>
            @endif
        </tr>
        @endfor
        @endif
        </tbody>
</table>

    </body>
    </html>
    