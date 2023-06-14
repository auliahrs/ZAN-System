<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>Daftar Jenis Perkahwinan</title>

    <style>
    .custom-button {
      display: inline-block;
      width: 300px;
      height: 250px;
      margin: 110px;
      font-size: 20px;
      border-radius: 10px;
      background-color: #D7D7D7;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .custom-button:hover {
      background-color: #A0A0A0;
    }

    .custom-button:active {
      background-color: #707070;
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
            <?php include('C:/xampp/htdocs/ZAN-System/components/leftMenu.php'); ?>
            <!-- LEFT MENU ENDS HERE -->

            <!-- THE CONTENT -->
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-header">
                            <h3>Pendaftaran Perkahwinan > Daftar Perkahwinan</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <form action="/ZAN-System/Manage Marriage Registration/Applicant/MarriageTypePage.php" method="post">
                                <div class="row my-3">
                                    <div class="col table-dpp">
                                        <table>
        <div class="PaymentProof">
            BUKTI PEMBAYARAN (Resit)
        </div>
        <div class="Receipt">
            <img src="/ZAN-System/images/Receipt.jpg" alt="Receipt">

            <div>
    <input type="file" id="upload-input-1" style="display: none;">
    <label for="upload-input-1" class="custom-button">Muat Naik Resit</label>
    <span id="file-name-1"></span>

    <script>
      document.getElementById("upload-input-1").addEventListener("change", function(event) {
        var file = event.target.files[0];
        // Handle the uploaded file here, e.g., send it to a server or perform operations with it
        console.log("Uploaded file:", file.name);
        document.getElementById("file-name-1").textContent = file.name;
  });
</script>
</div>    
        </div>
        <div class="button-container">
<a class="button button-back" href="#" onclick="goToOldInterface()">Back</a>
    <a class="button button-submit" href="#" onclick="goToNewInterface()">Submit</a>
</div>



                                    </div>
                                </div>
                            </form>
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