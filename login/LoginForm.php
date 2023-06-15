<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
        }   
        .h-custom {
        height: calc(100% - 73px);
        }
    @media (max-width: 450px) {
        .h-custom {
        height: 100%;
        }
        }
        body{
            background-image : url(../Background.png);
            position: absolute;
            width: 1450px;
            height: 1014px;
        }
        img{
            position: absolute;
            width: 1420.81px;
            height: 269.84px;
        }

        .loginform{
            background-color: #eee;
        }
    </style>
</head>
<body>
<img src="../loginHeader.png" > <br>

<div class="loginform"> 
<form>

  <div class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1">No Kad Pengenalan</label>
  </div>

  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Kata Laluan</label>
  </div>

  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
  
  </div>

  <button type="submit" class="btn btn-primary btn-block mb-4">Masuk</button>
  <div class="col">
  
      <a href="#!">Forgot password?</a><a href="#!">Register</a></p>
    </div>

 
  </div>
</form>
</div>
</body>
</html>