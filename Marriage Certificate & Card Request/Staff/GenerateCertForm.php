<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>Senarai Permohonan Berkahwin</title>

    <style>
    .table-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    
    .table-dpph {
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    
    table {
      width: 100%;
    }
    
    th, td {
      padding: 10px;
    }
    
    .Cert{
        background-color: #1A2F77;
            color: #FFFFFF;
            height: 40px;
            text-align: center;
            font-size: 20px;
            line-height: 40px;
            width: 1000px;
            margin: 20px auto;
    }
     
    .spinner {
      display: none;
      width: 40px;
      height: 40px;
      margin: 20px auto;
      border: 4px solid #f3f3f3;
      border-top: 4px solid #3498db;
      border-radius: 50%;
      animation: spin 1s linear infinite;
    }
    
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    .image-container {
      display: none;
      text-align: center;
    }
    
    .image-container img {
      max-width: 100%;
      max-height: 300px;
    }

    .button-container{
      position: relative;
    }

    .button {
    background-color: #1A2F77;
    color: #FFFFFF;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    cursor: pointer;
    position: absolute;
    bottom: 10px;
  }

  
  .button-submit {
    right: 10px;
  }

  
    </style>
</head>

<body>
    <div class="container-fluid">
        <!-- HEADER BAR -->
        <?php include('C:/xampp/htdocs/ZAN-System/components/titleBar.php'); ?>
        <!-- HEADER BAR ENDS -->
        <!-- BODY -->
        <div class="row">
            <!-- LEFT MENU -->
            <?php include('C:/xampp/htdocs/ZAN-System/components/S_leftMenu.php'); ?>
            <!-- LEFT MENU ENDS HERE -->

            <!-- THE CONTENT -->
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-header">
                            <h3>Permohonan Berkahwin > Sijil & Kad Perakuan Nikah</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body-staff">
                            <div class="row">
                                <div class="col table-dpp">
                                    <form action="/ZAN-System/Manage Marriage Request/Staff/GenerateCertForm" method="get">
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col table-dpph">
                                <div class="Cert">Jana Sijil Pemohon</div>
                                    <table>
                                        <tr>
                                            <th>Nama Pemohon</th>
                                            <th>Sijil Bagi Pemohon</th>
                                            <th>Penghantaran</th>
                                        </tr>
                                        <tr>
                                            <td>AHMAD AIMAN BIN ADAM</td>
                                            <td> <button onclick="showLoadingAndImage()">Jana Sijil Bagi Pemohon</button><div id="spinner" class="spinner"></div><div id="imageContainer" class="image-container"><img src="/ZAN-System/images/sijil.png" alt="Sijil Perkahwinan AHMAD AIMAN BIN ADAM"></div>
                                            <script>
                                               function showLoadingAndImage() {
                                               var spinner = document.getElementById("spinner");
                                               var imageContainer = document.getElementById("imageContainer");
      
                                               spinner.style.display = "block";
      
                                               setTimeout(function() {
                                                spinner.style.display = "none";
                                                imageContainer.style.display = "block";
                                                }, 4500); // Adjust the duration in milliseconds (here it's set to 2 seconds)
                                                }
                                                </script></td>
                                            <td><button onclick="showPopup()">Hantar</button><script>function showPopup() {alert("Sijil Bagi Pemohon sudah sedia dan dihantar");}</script></td>
                                    
                                            
                                        </table>
                                        <br>
<br>
<br>
<br>
<div class="button-container">
    <a class="button button-submit" href="#" onclick="goToNewInterface()">Seterusnya</a>
</div>

<script>
    function goToNewInterface() {
      window.location.href = "/ZAN-System/Marriage Certificate & Card Request/Staff/GenerateCardForm.php";
    }
    
  </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- THE CONTENT ENDS HERE -->
        </div>
        <!-- BODY ENDS -->
    </div>
</body>

</html>