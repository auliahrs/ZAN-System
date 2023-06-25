<?php


function getApplicationData($pdo, $applicationID) {
    $stmt = $pdo->prepare("SELECT i.insentifID, p.P_nama, p.noIC, i.status
                     FROM insentif_perkahwinan AS i
                     JOIN pengguna AS p ON i.noIC = p.noIC
                     WHERE i.insentifID = :insentifID");
    $stmt->execute([':insentifID' => $applicationID]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

?>
