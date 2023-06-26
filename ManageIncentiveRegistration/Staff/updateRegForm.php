<?php
include 'connection/connection.php';

// Retrieve data from the database
$stmt = $pdo->query("SELECT i.I_tarikh, i.insentifID, p.P_nama, p.noIC
                     FROM insentif_perkahwinan AS i
                     JOIN pengguna AS p ON i.noIC = p.noIC");
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['lihat'])) {
        if (isset($_POST['selectednoIC'])) {
            $selectednoIC = $_POST['selectednoIC'];
            // Perform necessary actions based on the selectednoIC value
            // Example: Store the selectednoIC in the session or redirect to another page
            // You can add your own logic here based on your requirements
            // For now, let's just echo the selectednoIC value
            echo "Selected noIC: " . $selectednoIC;
        } else {
            echo "No noIC selected.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <style>
        .content-body {
            width: 100%;
            padding: 20px;
        }

        .box-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
        }

        .box-header {
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }

        .box-header h2 {
            margin: 0;
        }

        .box-footer {
            display: flex;
            justify-content: flex-end;
            /* Align button to the right */
            padding: 20px;
        }


        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 10px;
            text-align: left;
        }

        .mohon-button {
            background-color: #1A2F77;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .mohon-button:hover {
            background-color: #0D1747;
        }
    </style>
    <title>Permohonan Insentif Perkahwinan</title>
</head>

<body>
    <div class="container-fluid">
        <!-- HEADER BAR -->
        <?php include('components/titleBar.php'); ?>
        <!-- HEADER BAR ENDS -->

        <!-- BODY -->
        <div class="row">
            <!-- LEFT MENU -->
            <?php include('components/S_leftMenu.php'); ?>
            <!-- LEFT MENU ENDS HERE -->

            <!-- THE CONTENT -->
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-header">
                            <h3>Insentif Perkahwinan > Permohonan</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <div class="box-content">
                                <form method="post" action="/ZAN-System/incentiveMaklumatPemohonView">

                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Bil</th>
                                                <th>Tarikh Permohonan</th>
                                                <th>No. Permohonan</th>
                                                <th>Nama Pemohon</th>
                                                <th>No. KP</th>
                                                <th>Pengesahan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $counter = 1;
                                            foreach ($data as $row) : ?>
                                                <tr>
                                                    <td><?php echo $counter; ?></td>
                                                    <td><?php echo $row['I_tarikh']; ?></td>
                                                    <td><?php echo $row['insentifID']; ?></td>
                                                    <td><?php echo $row['P_nama']; ?></td>
                                                    <td><?php echo $row['noIC']; ?></td>
                                                    <td>
                                                        <input type="radio" name="selectednoIC" value="<?php echo $row['noIC']; ?>">
                                                    <td>
                                                        <input type="radio" name="selectednoIC" value="<?php echo $row['noIC']; ?>">
                                                        <button type="submit" name="delete" class="delete-button">
                                                            <img src="/ZAN-System/images/delete-icon.png" alt="Delete">
                                                        </button>
                                                    </td>


                                                    </td>
                                                </tr>
                                            <?php
                                                $counter++;
                                            endforeach; ?>
                                        </tbody>
                                    </table>
                                    <div class="box-footer">
                                        <button type="submit" name="lihat" class="mohon-button">Lihat</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- THE CONTENT ENDS HERE -->
        </div>
        <!-- BODY ENDS -->
    </div>

    <script src="/ZAN-System/js/script.js"></script>
</body>

</html>