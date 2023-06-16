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
            width: 1300px;
            height: 300px;
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        /* CSS styles here */
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

        body {
            background-image: url(../Background.png);
            position: absolute;
            width: 1300px;
            height: 300px;
        }

        img {
            position: absolute;
            width: 1420.81px;
            height: 269.84px;
        }

        .loginform {
            background-color: #fff;
            padding: 20px;
            width: 300px;
            margin: 0 auto;
            margin-top: 300px;
        }

        .loginform label,
        .loginform input,
        .loginform select {
            display: block;
            margin-bottom: 10px;
        }

        .loginform input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: grey;
            border: none;
            color: white;
            cursor: pointer;
        }

        .loginform input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <img src="../loginHeader.png" alt="Login Header"><br>

    <div class="loginform">
        <form action="../Manage User Profile/Applicant/applicantProfileView.php" method="POST">
            <label for="ic_card_number">No Kad Pengenalan:</label>
            <input type="text" id="ic_card_number" name="ic_card_number" required>

            <label for="password">Kata Laluan:</label>
            <input type="password" id="password" name="password" required>

            <label for="user_type">Pengguna</label>
            <select id="user_type" name="user_type" required>
                <option value="applicant">Pemohon</option>
                <option value="staff">Staff</option>
            </select>

            <input type="submit" value="Masuk" >

            <a href="../login/forgotPasswordForm.php">Forgot Password?</a>
            <a href="../registration/registrationForm.php">Register</a>

        </form>
    </div>
</body>
</html>

</body>
</html>