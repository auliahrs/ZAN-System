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
  </style>
  <script>
    function goToNewInterface() {
      window.location.href = "ComplaintStatus.php";
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
                            <h3>Pendaftaran Perkahwinan > Daftar Perkahwinan > </h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <form action="/ZAN-System/Manage Marriage Registration/Applicant/Document.php" method="post">
                                <div class="row my-3">
                                    <div class="col table-dpp">
                                        <table>

<div class="document">
    DOCUMENTS
</div>

<div class="docname">
  <span class="docname-text">Slip Permohonan Perkahwinan</span>
  <div>
    <a class="custom-button" href="path/to/download/document.pdf" download>Muat Turun Dokumen</a>

    <input type="file" id="upload-input" style="display: none;">
<label for="upload-input" class="custom-button">Muat Naik Dokumen</label>

<script>
  document.getElementById("upload-input").addEventListener("change", function(event) {
    var file = event.target.files[0];
    // Handle the uploaded file here, e.g., send it to a server or perform operations with it
    console.log("Uploaded file:", file.name);
  });
</script>
  </div>
</div>
<br>
<!-- second doc -->
<div class="docname">
  <span class="docname-text">Borang Kebenaran Berkahwin</span>
  <div>
    <a class="custom-button" href="path/to/download/document.pdf" download>Muat Turun Dokumen</a>

    <input type="file" id="upload-input" style="display: none;">
<label for="upload-input" class="custom-button">Muat Naik Dokumen</label>

<script>
  document.getElementById("upload-input").addEventListener("change", function(event) {
    var file = event.target.files[0];
    // Handle the uploaded file here, e.g., send it to a server or perform operations with it
    console.log("Uploaded file:", file.name);
  });
</script>
  </div>
</div>
<br>
<!-- third doc -->
<div class="docname">
  <span class="docname-text">Catatan Akad Nikah</span>
  <div>
    <a class="custom-button" href="path/to/download/document.pdf" download>Muat Turun Dokumen</a>

    <input type="file" id="upload-input" style="display: none;">
<label for="upload-input" class="custom-button">Muat Naik Dokumen</label>

<script>
  document.getElementById("upload-input").addEventListener("change", function(event) {
    var file = event.target.files[0];
    // Handle the uploaded file here, e.g., send it to a server or perform operations with it
    console.log("Uploaded file:", file.name);
  });
</script>
  </div>
</div>
<br>
<!-- Fourth doc -->
<div class="docname">
  <span class="docname-text">Gambar Berukuran Passport</span>
  <div>

    <input type="file" id="upload-input" style="display: none;">
<label for="upload-input" class="custom-button">Muat Naik Dokumen</label>

<script>
  document.getElementById("upload-input").addEventListener("change", function(event) {
    var file = event.target.files[0];
    // Handle the uploaded file here, e.g., send it to a server or perform operations with it
    console.log("Uploaded file:", file.name);
  });
</script>
  </div>
</div>
<br>
<!-- Fifth doc -->
<div class="docname">
  <span class="docname-text">Salinan Kad Pengenalan Saksi-Saksi Perkahwinan</span>
  <div>

    <input type="file" id="upload-input" style="display: none;">
<label for="upload-input" class="custom-button">Muat Naik Dokumen</label>

<script>
  document.getElementById("upload-input").addEventListener("change", function(event) {
    var file = event.target.files[0];
    // Handle the uploaded file here, e.g., send it to a server or perform operations with it
    console.log("Uploaded file:", file.name);
  });
</script>
  </div>
</div>
<br>
<br>
<br>
<br>
<div class="button-container">
<a class="button button-back" href="#">Back</a>
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