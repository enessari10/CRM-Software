<?php 


class Process {


    public function sqlInsert($db ,$tble, $cols, $values){

        $insertquery = "INSERT INTO " . $tble . " (" . $cols . ") VALUES (" . $values . ")";
        
        if(mysqli_query($db, $insertquery)){
            return true;
        } else {
            return false;
        }

    }

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
       
        $talepSQL =  mysqli_query($db,"SELECT COUNT(*) FROM Talepler where talep_durum='Bekliyor'");
        while($row = mysqli_fetch_assoc($talepSQL)) {
           return $row['COUNT(*)'];
        }
    }

    public function successAlert($message) {
        return '<div class="alert alert-success" role="alert">'.$message.'</div>';
    }

    public function errorAlert($message) {
        return '<div class="alert alert-danger" role="alert">'.$message.'</div>';
    }
}
?>