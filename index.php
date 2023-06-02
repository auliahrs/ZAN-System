<?php
include 'connection.php';

// Retrieve data from the database
$stmt = $pdo->query("SELECT * FROM pemohon");
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>E-munakahat</title>
</head>
<body>
  <div class="background"></div>
  <header>
    <img src="Header.png" alt="Header">
    <div class="header-icons">
      <a href="#"><img src="notification-icon.png" alt="Notification"></a>
      <a href="#"><img src="contact-us-icon.png" alt="Contact Us"></a>
      <a href="#"><img src="logout-icon.png" alt="Logout"></a>
    </div>
  </header>

  <div class="container">
    <?php include 'navigation.php'; ?>

    <div class="content">
      <div class="square-box">
        <div class="box-header">
          <h2>Insentif Perkahwinan > Permohonan</h2>
        </div>
        <div class="box-content">
         <form method="post" action="maklumat_pemohon.php">

            <table>
              <thead>
                <tr>
                  <th>Bil</th>
                  <th>Tarikh Permohonan</th>
                  <th>No. Permohonan</th>
                  <th>Nama Pemohon</th>
                  <th>No. KP</th>
                  <th>Pilih</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $row): ?>
                <tr>
                  <td><?php echo $row['bil']; ?></td>
                  <td><?php echo $row['tarikhpermohonan']; ?></td>
                  <td><?php echo $row['nomborpermohonan']; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['no.kp']; ?></td>
                  <td>
                    <input type="hidden" name="selectedNoPermohonan[]" value="<?php echo $row['nomborpermohonan']; ?>">
                    <input type="checkbox">
                  </td>
                </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
            <div class="box-footer">
              <button type="submit" name="mohon" class="mohon-button">Mohon</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
