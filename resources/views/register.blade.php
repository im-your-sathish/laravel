<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #f6f6f6;
       
    }

    * {
      box-sizing: border-box;
    }

    .container {
      padding: 16px;
      background-color: white;
      width: 400px;
      margin-top: 0px;
      
  
    }

    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 10px;
      margin: 5px 0 5px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }

    .registerbtn {
      background-color: #04AA6D;
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    .registerbtn:hover {
      opacity: 1;
    }

    a {
      color: dodgerblue;
    }

    .signin {
      background-color: #f1f1f1;
      text-align: center;
      height: 0;
      padding:0;
    }
  </style>
</head>

<body>
  @if (session('msg'))
  <div class="alert alert-<?php if (session('color')) {
                                echo session('color');
                            } else {
                                echo "success";
                            } ?> alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {{ session('msg') }}
  </div>
  @endif



  <form action="{{route('adduser')}}" method="post">
    <div class="container">
      <h1>Register</h1>
      @csrf
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" id="name" required>

      <label for="name"><b>Mobile Number</b></label>
      <input type="text" placeholder="Enter Mobile Number" name="mobile" id="name" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="password" required>

      <hr>
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

      <button type="submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
      <p>Already have an account? <a href="./register">Sign in</a>.</p>
    </div>
  </form>

</body>

</html>