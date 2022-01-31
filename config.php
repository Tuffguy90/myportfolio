<?php
class Helper {

protected $username = 'jdbprojects';
protected $pwd = 'Pm0517299';
protected $host = 'localhost';
protected $dbname = 'jdb01';
protected $conn;

public function __construct(){

  try{
      date_default_timezone_set('Asia/Kolkata');
      $this->conn = new mysqli($this->host, $this->username, $this->pwd, $this->dbname);

  } catch(\Exception $e){
    echo var_dump($e->getMessage());
    return 0;
  }
  

    return $this->conn;
}

public function contacts(){

  $query = $this->conn->query("SELECT * FROM contacts");
  $rowCounts = $query->num_rows;
  $rowsArray = [];
  if($rowCounts > 0){
      while($rows = $query->fetch_assoc()){
        $rowsArray[] = $rows;
      }
  }

  return json_encode($rowsArray);

}

public function newContact($name, $email, $subject, $message){

    $name = trim(mysqli_real_escape_string($this->conn, $name));
    $email = trim(mysqli_real_escape_string($this->conn, $email));
    $subject = trim(mysqli_real_escape_string($this->conn, $subject));
    $message = trim(mysqli_real_escape_string($this->conn, $message));
    $datetime = date('Y-m-d H:i:s');
    try{
        $query = $this->conn->query("INSERT INTO contacts VALUES('0', '$name', '$email', '$subject', '$message', '$datetime')");
         echo json_encode(['status' => 200, 'q' => json_encode(mysqli_error($this->conn))]);
    }
    catch(Exception $e) {
      echo json_encode(['status' => 500, 'message' => $e->getMessage()]);
    }

   
}

}

?>