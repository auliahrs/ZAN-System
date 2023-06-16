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
      width: 100px;
      height: 30px;
      margin: 20px;
      font-size: 14px;
      border-radius: 5px;
      text-align: center;
      line-height: 15px;
      background-color: #0047FF;
      cursor: pointer;
      transition: background-color 0.3s;
      text-decoration: none;
      color: #FFFFFF;
    }

    .custom-button:hover {
      background-color: #1A2F77;
    }

    .document{
        background-color: #1A2F77;
            color: #FFFFFF;
            height: 40px;
            text-align: center;
            font-size: 20px;
            line-height: 40px;
            width: 1000px;
            margin: 20px auto;
    }

    .docname{
        
        background-color: #D7D7D7;
            color: #000000;
            height: 40px;
            text-align: center;
            line-height: 40px;
            width: 500px;
            margin: 20px auto;  
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

    .button-back {
    left: 10px;
  }
  
  .button-submit {
    right: 10px;
  }
  </style>
  <script>
function goToOldInterface() {
      window.location.href = "MarriageTypeForm.php";
}
    function goToNewInterface() {
      window.location.href = "/ZAN-System/PaymentProof/Applicant/PaymentProofForm.php";
    }
    
  </script>
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
                            <h3>Pendaftaran Perkahwinan > Daftar Perkahwinan </h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <form action="/ZAN-System/Manage Marriage Registration/Applicant/DocumentForm.php" method="post">
                                <div class="row my-3">
                                    <div class="col table-dpp">
                                        <table>

<div class="document">
    DOKUMEN
</div>

<!-- First doc -->
<div class="docname">
  <span class="docname-text">Slip Permohonan Perkahwinan</span>
  <div>
    <a class="custom-button" href="path/to/download/Slip_Permohonan_Kahwin.pdf" download>Muat Turun Dokumen</a>

    <input type="file" id="upload-input-1" style="display: none;">
    <label for="upload-input-1" class="custom-button">Muat Naik Dokumen</label>
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

<br>
<!-- second doc -->
<div class="docname">
  <span class="docname-text">Borang Kebenaran Berkahwin</span>
  <div>
    <a class="custom-button" href="path/to/download/Borang_Kebenaran_Kahwin.pdf" download>Muat Turun Dokumen</a>

    <input type="file" id="upload-input-2" style="display: none;">
    <label for="upload-input-2" class="custom-button">Muat Naik Dokumen</label>
    <span id="file-name-2"></span>

    <script>
      document.getElementById("upload-input-2").addEventListener("change", function(event) {
        var file = event.target.files[0];
        // Handle the uploaded file here, e.g., send it to a server or perform operations with it
        console.log("Uploaded file:", file.name);
        document.getElementById("file-name-2").textContent = file.name;
  });
</script>
  </div>
</div>
<br>
<!-- third doc -->
<div class="docname">
  <span class="docname-text">Catatan Akad Nikah</span>
  <div>
    <a class="custom-button" href="path/to/download/Catatan_Akad_Nikah.pdf" download>Muat Turun Dokumen</a>

    <input type="file" id="upload-input-3" style="display: none;">
    <label for="upload-input-3" class="custom-button">Muat Naik Dokumen</label>
    <span id="file-name-3"></span>

    <script>
      document.getElementById("upload-input-3").addEventListener("change", function(event) {
        var file = event.target.files[0];
        // Handle the uploaded file here, e.g., send it to a server or perform operations with it
        console.log("Uploaded file:", file.name);
        document.getElementById("file-name-3").textContent = file.name;
  });
</script>
  </div>
</div>
<br>
<!-- Fourth doc -->
<div class="docname">
  <span class="docname-text">Gambar Berukuran Passport</span>
  <div>

  <input type="file" id="upload-input-4" style="display: none;">
    <label for="upload-input-4" class="custom-button">Muat Naik Dokumen</label>
    <span id="file-name-4"></span>

    <script>
      document.getElementById("upload-input-4").addEventListener("change", function(event) {
        var file = event.target.files[0];
        // Handle the uploaded file here, e.g., send it to a server or perform operations with it
        console.log("Uploaded file:", file.name);
        document.getElementById("file-name-4").textContent = file.name;
  });
</script>
  </div>
</div>
<br>
<!-- Fifth doc -->
<div class="docname">
  <span class="docname-text">Salinan Kad Pengenalan Saksi-Saksi Perkahwinan</span>
  <div>

  <input type="file" id="upload-input-5" style="display: none;">
    <label for="upload-input-5" class="custom-button">Muat Naik Dokumen</label>
    <span id="file-name-5"></span>

    <script>
      document.getElementById("upload-input-5").addEventListener("change", function(event) {
        var file = event.target.files[0];
        // Handle the uploaded file here, e.g., send it to a server or perform operations with it
        console.log("Uploaded file:", file.name);
        document.getElementById("file-name-5").textContent = file.name;
  });
</script>
  </div>
</div>
<br>
<br>
<br>
<br>
<div class="button-container">
<a class="button button-back" href="#" onclick="goToOldInterface()">Kembali</a>
    <a class="button button-submit" href="#" onclick="goToNewInterface()">Seterusnya</a>
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