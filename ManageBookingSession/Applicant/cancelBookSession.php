<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>cancelBookSession</title>

<style>
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
                            <h3>Aduan/Khidmat Nasihat > Sesi Konsultasi</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <form action="/ZAN-System/ManageBookingSession/Applicant/cancelBookSession.php" method="post">
                                <div class="row my-3">
                                    <div class="col table-dpp">
                                        <table>
                                        <center><button onclick="showConfirmation()">Delete</button></center>

                                            <script>
                                                function showConfirmation() {
                                                    if (confirm("Are you sure you want to delete?")) {
                                                        // Code to perform delete operation
                                                        // You can call your delete function or perform any other desired action here
                                                        alert("Delete operation performed");
                                                    } else {
                                                        // Code to handle cancel or dismissal of the popup
                                                        alert("Delete operation canceled");
                                                    }
                                                }
                                            </script>
                                            </table>


 

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