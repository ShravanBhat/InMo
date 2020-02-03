@extends('layouts.system')
@section('content')
<style>
  #user {
    background-color: skyblue;
    font-weight: bold;
  }
</style>
    <!-- Table with panel -->
<div class="card card-cascade z-depth-5 narrower my-5">

    <!--Card image-->
    <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">
  
    </div>
    <!--/Card image-->
  
    <div class="px-4">
  
      <div class="table-wrapper">
        <!--Table-->
        <table class="table table-hover mb-0">
  
          <!--Table head-->
          <thead>
            <tr>
              
              
              <th class="th-lg">
                <a href="">Sr. No.
                  <i class="fas fa-sort ml-1"></i>
                </a>
              </th>
              <th class="th-lg">
                <a href="">Username
                  <i class="fas fa-sort ml-1"></i>
                </a>
              </th>
              <th class="th-lg">
                <a href="">Email
                  <i class="fas fa-sort ml-1"></i>
                </a>
              </th>
              <th class="th-lg">
                <a href="">Designation
                  <i class="fas fa-sort ml-1"></i>
                </a>
              </th>
              <th class="th-lg">
                <a href="">Action
                  <i class="fas fa-sort ml-1"></i>
                </a>
              </th>
            </tr>
          </thead>
          <!--Table head-->
  
          <!--Table body-->
          
          <tbody>
              @foreach($users as $user)
            <tr>
              <td>{{$loop->index+1}}</td>
              <td>{{$user->username}}</td>
            <td>{{$user->email_id}}</td>
              <td>{{$user->usertype}}</td>
              <td><button class="btn btn-danger">Delete User</button></td>
            </tr>
            @endforeach
            
           
          </tbody>
          <!--Table body-->
        </table>
        <!--Table-->
      </div>
  
    </div>
  
  </div>
  <!-- Table with panel -->
  

  <body class="">
    <div class="">
            {{-- <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th scope="col">NAME</th>
            <th scope="col">DELETE</th>
            <th scope="col">ALERT</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Shravan Bhat</td>
            <form action="" method = "post">
              <input type="hidden" name="name" id="name" value="">
              <td><button class="btn btn-danger">Delete User</button></td>
            </form>
            <form action="" method = "post">
              <input type="hidden" name="alert" id="alert" value="">
              <td><button class="btn btn-warning">Alert</button></td>
            </form>
          </tr>
        </tbody>
      </table> --}}
  
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add User
      </button>
  
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container text-center">
                <form method = "post" name = "form1" id = "frm1" action = "">
                  <input type = "text" class="form-control" placeholder="USERNAME" name = "user" pattern="^[A-Za-z0-9_]{1,15}$" required><br>
                  <input type = "text" class="form-control" placeholder="NAME" name = "name" pattern="[a-zA-Z0-9\s]+" required><br>      
                  <input type="email" class="form-control" placeholder="EMAIL" name="email" required><br>  
                  <input type = "password" id = "password" class="form-control" placeholder="PASSWORD" name = "pass" pattern=".{6,}" title="Six or more characters" required><br>
                  <input type = "password" id = "confirm_password" class="form-control" placeholder="CONFIRM PASSWORD" name = "con_pass" pattern=".{6,}" title="Six or more characters" required><br>
                  <input type = "text" class="form-control" placeholder="PHONENO" name = "phoneno" id = "phoneno" required><br>
                  <div class="form-group">
                    <label for="inputState">User Type</label>
                    <select id="inputState" name = "usertype" class="form-control">
                      <option name = "usertype" selected>normal</option>
                      <option name = "usertype">doctor</option>
                    </select>
                  </div>
                  <div class="cont_btn">
                    <button class="btn btn-primary" name = "submit-btn">ADD USER</button>
                  </div>     
                </form> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
@endsection