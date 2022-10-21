<?php 

date_default_timezone_set('Europe/Istanbul');

class Process {


    public function sqlInsert($db ,$tble, $cols, $values){

        $insertquery = "INSERT INTO " . $tble . " (" . $cols . ") VALUES (" . $values . ")";
        
        if(mysqli_query($db, $insertquery)){
            return true;
        } else {
            return false;
        }

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

        if ($search == "berqnet") {

            $columnName = "berqnet_tarihi";

        } else if ($search == "antivirus") {

            $columnName = "antivirus_tarihi";

        } else {

            $columnName = "web_tarihi";
        }
        
        $query = "SELECT * FROM Firmalar where DATEDIFF(Firmalar.'.$columnName.' ,NOW()) <= 15;";
        if ($result = $db->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $field1name = $row["firma_adi"];
                $field2name =$row[$columnName];
                return '<tr> 
                        <td>'.$field1name.'</td> 
                        <td>'.$field2name.'</td>
                        </tr>';
                }
                $result->free();
        } 
    }
    
}
?>

<!-- 

$sql = "SELECT * FROM Firmalar Where firma_id='$id'";
  $result = mysqli_query($db,$sql);

  $row = mysqli_num_rows($result);

  if ( $row > 0 ) {
    $get_firma_info = mysqli_fetch_array($result);
-->