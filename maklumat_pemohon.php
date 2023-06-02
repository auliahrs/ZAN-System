<?php
include 'connection.php';

if (isset($_POST['mohon']) && isset($_POST['selectedNoPermohonan'])) {
    $selectedNoPermohonan = $_POST['selectedNoPermohonan'];

    $stmt = $pdo->prepare("SELECT * FROM pemohon WHERE nomborpermohonan = :nomborpermohonan");
    $stmt->bindParam(':nomborpermohonan', $selectedNoPermohonan);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <style>
    .rounded-rectangle {
      width: 70%;
      margin: auto;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 10px;
      text-align: justify;
    }
	
	.label {
  display: inline-block;
  width: 120px;
  text-align: left;
  margin-right: 10px;
  font-weight: bold;
}


    .rounded-rectangle input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-family: Arial, sans-serif;
      font-size: 14px;
    }

    .save-button {
      text-align: right;
    }

    .save-button button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-family: Arial, sans-serif;
      font-size: 14px;
      cursor: pointer;
    }
  </style>
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
          <h2>Next Page</h2>
        </div>
        <div class="box-content">
       <div class="rounded-rectangle">
  <h3><?php echo $data['no.kp']; ?></h3>
  <p>
    <span class="label">Nama:</span> <input type="text" value="<?php echo $data['nama']; ?>">
  </p>
  <p>
    <span class="label">Alamat:</span> <input type="text" value="<?php echo $data['alamat']; ?>">
  </p>
  <p>
    <span class="label">Nombor Telefon:</span> <input type="text" value="<?php echo $data['no.tel']; ?>">
  </p>
  <p>
    <span class="label">Tarikh Kelahiran:</span> <input type="text" value="<?php echo $data['tarikhkelahiran']; ?>">
  </p>
  <p>
    <span class="label">Tempat Kelahiran:</span> <input type="text" value="<?php echo $data['tempatkelahiran']; ?>">
  </p>
  <p>
    <span class="label">Kewarganegaraan:</span> <input type="text" value="<?php echo $data['kewarganegaraan']; ?>">
  </p>
  <p>
    <span class="label">Nama Akaun Bank:</span> <input type="text" value="<?php echo $data['namaakaunbank']; ?>">
  </p>
  <p>
    <span class="label">Nombor Akaun Bank:</span> <input type="text" value="<?php echo $data['nomborakaunbank']; ?>">
  </p>
  <div class="save-button">
    <button type="submit">Simpan</button>
  </div>
</div>


        </div>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
