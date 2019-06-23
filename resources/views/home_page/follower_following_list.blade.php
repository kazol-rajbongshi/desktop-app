<!DOCTYPE html>
<html lang="en">
<head>
  <title>Desigram</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="jumbotron text-center">
  <p>Serch User</p>
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4"> 
      <input type="text" name="search_user" class="form-control" placeholder="Search user by instagram user name">
    </div>
  </div>
</div>
  
<div class="container">
  <div class="row">
    <div class="table-wrapper-scroll-y my-custom-scrollbar col-sm-8 col-sm-offset-2">
      <h3>Follower Following List:</h3>
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th scope="col">Checkbox</th>
            <th scope="col">Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><input type="checkbox" name="">Select All</th>
            <td><input type="submit" class="btn btn-primary" name="" value="Extend"></td>
          </tr>
          <tr>
            <th scope="row"><input type="checkbox" name=""></th>
            <td>Mark</td>
          </tr>
          <tr>
            <th scope="row"><input type="checkbox" name=""></th>
            <td>Jacob</td>
          </tr>
          <tr>
            <th scope="row"><input type="checkbox" name=""></th>
            <td >Larry the Bird</td>
          </tr>
          <tr>
            <th scope="row"><input type="checkbox" name=""></th>
            <td>Mark</td>
          </tr>
          <tr>
            <th scope="row"><input type="checkbox" name=""></th>
            <td>Jacob</td>
          </tr>
          <tr>
            <th scope="row"><input type="checkbox" name=""></th>
            <td >Larry the Bird</td>
          </tr>
          <tr>
            <th scope="row"><input type="checkbox" name=""></th>
            <td>Mark</td>
          </tr>
          <tr>
            <th scope="row"><input type="checkbox" name=""></th>
            <td>Jacob</td>
          </tr>
          <tr>
            <th scope="row"><input type="checkbox" name=""></th>
            <td >Larry the Bird</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- <div style="text-align:center;">
    <button type="submit" class="btn btn-primary"><span style="color: black;">Export as</span>&nbsp;&nbsp;CSV</button>
  </div> -->
</div>
</body>
</html>
<script type="text/javascript" src="{{asset('assets/js/style.js')}}"></script>