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
    <h3 style="text-align:center">Grievances Status</h3>
</div>

<table class="table">
        <thead class="bg-info text-white">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Grievance</th>
            <th scope="col">Ward</th>
            <th scope="col">Landmark</th>
            <th scope="col">Location</th>
            <th scope="col">PinCode</th>
            <th scope="col">Details</th>
            <th scope="col">Comment</th>
            <th scope="col">Status</th>
            <th></th>            
            <th></th>        
          </tr>
        </thead>
        <tbody>
        @if($count!=0)
        @for( $i=0; $i<$count; $i++)
          <tr>
            <th scope="row">{{$i + 1}}</th>
            <td>{{$names[$i]}}</td>
            <td>{{$grievance[$i]}}</td>
            <td>{{$ward[$i]}}</td>
            <td>{{$landmark[$i]}}</td>
            <td>{{$location[$i]}}</td>
            <td>{{$pincode[$i]}}</td>
            <td>{{$details[$i]}}</td>
            @if($status[$i] == 1)
            <td>{{$comment[$i]}}</td>
            <td class="text-success">Solved</td>
            <td></td>
            <td></td>
            @elseif($status[$i] == 2)
            <td>{{$comment[$i]}}</td>
            <td class="text-primary">Replied</td>
            <td></td>
            <form method="POST" action = {{route('send')}} >
                                @csrf
                                <input type="number" name="gid" hidden readonly value={{$gid[$i]}}>
                                <td><button type = "submit" class="btn btn-outline-success text-black">Solved</button></td>
                            </form>
            @else
            <td><form method="POST" action = {{route('answer')}} >
            @csrf
            <textarea name="comment"></textarea></td>
                <input type="number" name="gid" hidden readonly value={{$gid[$i]}}>
                <td><button type = "submit" class="btn btn-outline-primary text-black">Reply</button></td>
                <td></td>
            </form>
            @endif
            </tr>
            </form>
    
        @endfor
        @endif
        </tbody>
        </table>

    </body>
    </html>
    