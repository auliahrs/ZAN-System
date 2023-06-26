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
        .Cert {
            background-color: #1A2F77;
            color: #FFFFFF;
            height: 40px;
            text-align: center;
            font-size: 20px;
            line-height: 40px;
            width: 1000px;
            margin: 20px auto;
        }

        .Sijil {
            display: flex;
            justify-content: left;
            align-items: center;
            margin: 50px 100px;
        }

        .Sijil img {
            max-width: 500px;
            max-height: 500px;
        }

        .custom-button {
            display: inline-block;
            width: 100px;
            height: 30px;
            margin: 20px;
            font-size: 14px;
            border-radius: 5px;
            text-align: center;
            line-height: 30px;
            background-color: #0047FF;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            color: #FFFFFF;

        }

        .custom-button:hover {
            background-color: #1A2F77;
        }

        .button {
            background-color: #0047FF;
            color: #FFFFFF;
            width: 300px;
            height: 30px;
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
                            <h3>Pendaftaran Perkahwinan > Sijil & Kad Perakuan Nikah</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <form action="/ZAN-System/marriageRegisterTypeView" method="post">
                                <div class="row my-3">
                                    <div class="col table-dpp">
                                        <table>

                                            <div class="Cert">
                                                Sijil Perkahwinan & Permohonan Kad Perakuan Nikah
                                            </div>
                                            <div class="Sijil">
                                                <img src="/ZAN-System/images/sijil.png" alt="sijil">
                                                <div>
                                                    <a class="custom-button" href="path/to/download/Sijil Perkahwinan.pdf" download>Muat Turun Sijil</a>

                                                    <button class="button" onclick="showPopup()">Permohonan Kad Perakuan Nikah</button>

                                                    <script>
                                                        function showPopup() {
                                                            alert("Permohonan Anda Sedang Diproses!");
                                                        }
                                                    </script>

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