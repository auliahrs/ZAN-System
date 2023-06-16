<?php

class Module4Repository
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function insertForm($konsultasiID, $noIC, $staffID, $K_tarikh, $K_masa, $K_butiranKonsultasi)
{
    $stmt = $this->db->prepare("INSERT INTO permohonan_konsultasi (konsultasiID, noIC, staffID, K_tarikh, K_masa, K_butiranKonsultasi) VALUES (:konsultasiID, :noIC, :staffID, :K_tarikh, :K_masa, :K_butiranKonsultasi)");
    $stmt->bindParam(':konsultasiID', $konsultasiID);
    $stmt->bindParam(':noIC', $noIC);
    $stmt->bindParam(':staffID', $staffID);
    $stmt->bindParam(':K_tarikh', $K_tarikh);
    $stmt->bindParam(':K_masa', $K_masa);
    $stmt->bindParam(':K_butiranKonsultasi', $K_butiranKonsultasi);
    

    if ($stmt->execute()) {
        echo "Form data inserted successfully!";
    } else {
        echo "Error inserting form data: " . $stmt->errorInfo()[2];
    }

    $stmt->closeCursor();
}
public function getapproveData($konsultasiID = null)
    {
        if ($konsultasiID) {
            // Filter the data based on the selected office
            $stmt = $this->db->prepare("SELECT * FROM book WHERE konsultasiID = ?");
            $stmt->execute([$konsultasiID]);
        } else {
            // Retrieve all the data
            $stmt = $this->db->query("SELECT * FROM book");
        }

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>