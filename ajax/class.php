<?php 

date_default_timezone_set('Europe/Istanbul');

class Process {


// SQL FUNC
    public function sqlInsert($db ,$tble, $cols, $values){

        $insertquery = "INSERT INTO " . $tble . " (" . $cols . ") VALUES (" . $values . ")";
        
        if(mysqli_query($db, $insertquery)){
            return true;
        } else {
            return false;
        }

    }

// CONVERT DATE TYPE

    public function convertDateLocaleTR($date) {
        return date("d-m-Y", strtotime($date));  

    }

    //HOME SCREEN DATA
    public function getAntivirusDay($db) {

        $result =  mysqli_query($db,"SELECT COUNT(*) FROM Firmalar where DATEDIFF(Firmalar.antivirus_tarihi ,NOW()) <= 15;");
        while($row = mysqli_fetch_assoc($result)) {
            return $row['COUNT(*)'];
        }

    }

    public function getBerqnetDay($db) {

        $result =  mysqli_query($db,"SELECT COUNT(*) FROM Firmalar where DATEDIFF(Firmalar.berqnet_tarihi ,NOW()) <= 15;");
        while($row = mysqli_fetch_assoc($result)) {
            return $row['COUNT(*)'];
        }

    }

    public function getWebDay($db) {

        $result =  mysqli_query($db,"SELECT COUNT(*) FROM Firmalar where DATEDIFF(Firmalar.web_tarihi ,NOW()) <= 15;");
        while($row = mysqli_fetch_assoc($result)) {
            return $row['COUNT(*)'];
        }

    }

    public function getWaitingServiceCount($db) {
       
        $result =  mysqli_query($db,"SELECT COUNT(*) FROM Talepler where talep_durum='Bekliyor'");
        while($row = mysqli_fetch_assoc($result)) {
            return $row['COUNT(*)'];
        }
    }

//GLOBAL ALERTS
    public function successAlert($message) {
        return '<div class="alert alert-success" role="alert">'.$message.'</div>';
    }

    public function errorAlert($message) {
        return '<div class="alert alert-danger" role="alert">'.$message.'</div>';
    }

//GET DATA
    public function getHomeInfo($db, $search) {
        
        $query = "SELECT * FROM Firmalar where DATEDIFF(Firmalar.$search ,NOW()) <= 15;";
        if ($result = $db->query($query)) {
            while ($row = $result->fetch_assoc()) {
				return $row;
                $result->free();
				
        } 
    }
	}


    public function getAllReports($db) {

        $query = "SELECT * FROM  Raporlar  ORDER BY servis_tarihi DESC";
        if ($result = $db->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $talepTarihi = $this->convertDateLocaleTR($row["talep_tarihi"]);
                $servisTarihi = $this->convertDateLocaleTR($row["servis_tarihi"]);
                echo '
                <tr>
                <td>'.$row["talep_eden"].'</td>
                <td>'.$talepTarihi.'</td>
                <td>'.$servisTarihi.'</td>
                <td>'.$row["personel"].'</td>
                <td> <div class="btn-group">
                <button type="button" class="btn btn-gradient-primary btn-sm" data-bs-toggle="dropdown">İşlem Seç</button>
                <div class="dropdown-menu">
                  <a href="report-detail.php?report_id='.$row['id'].'" class="dropdown-item">Detayı görüntüle</a>
                </div>
                </td>
                </tr>';
            
            }
        }
    }

    public function getAllInvoices($db) {

        $query = "SELECT * FROM Fatura_Edilecekler INNER JOIN Firmalar ON Fatura_Edilecekler.firma_id = Firmalar.firma_id ORDER BY Fatura_Edilecekler.tarih DESC";
        if ($result = $db->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $tarih = $this->convertDateLocaleTR($row["tarih"]);
                echo '
                <tr>
                <td>'.$row["id"].'</td>
                <td>'.$row["aciklama"].'</td>
                <td>'.$tarih.'</td>
                <td>'.$row["firma_adi"].'</td>
                <td> <div class="btn-group">
                <button type="button" class="btn btn-gradient-primary btn-sm" data-bs-toggle="dropdown">İşlem Seç</button>
                <div class="dropdown-menu">
                  <a href="" class="dropdown-item">Sil</a>
                </div>
                </td>
                </tr>';
            
            }
        }
    }
}
?>
