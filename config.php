<?php
session_start();
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

public function login($data)
{
  $email = trim(mysqli_real_escape_string($this->conn,$data[1]));
  $pwd = trim(mysqli_real_escape_string($this->conn,$data[0]));
  try{
        $query = $this->conn->query("SELECT email,pwd FROM credentials WHERE email = '$email' AND pwd = '$pwd'");
        if($query->num_rows == 1){
          $_SESSION['loggedIn'] = true;
            header("Location:./index.php");
            exit;
        } else {
            echo mysqli_error($this->conn);
            // header("Location:my-login.php?err=Invalid Credentials");
            exit;
        }
        
    }
    catch(Exception $e) {
      echo json_encode(['status' => 500, 'message' => $e->getMessage()]);
    }

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

public function save_portfolio($title, $desc, $tech, $duration, $images){
  $images = json_encode($images);
   try{
      $query = $this->conn->query("SELECT title, description FROM portfolio WHERE title = '$title' AND description = '$desc'");
        if($query->num_rows == 1){
           header("Location:index.php?success=Portfolio Already Added&add=portfolio");
           exit;
        }
        $query = $this->conn->query("INSERT INTO portfolio(title, description, image_url_array, tech_specs, duration, status) VALUES('$title', '$desc', '$images', '$tech', '$duration', '1')") or die(mysqli_error($this->conn));

        header("Location:index.php?success=Portfolio Added&add=portfolio");
        //  echo json_encode(['status' => 200, 'q' => json_encode(mysqli_error($this->conn))]);
    }
    catch(Exception $e) {
      echo json_encode(['status' => 500, 'message' => $e->getMessage()]);
    }

}

}

?>