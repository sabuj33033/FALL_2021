<?php
class db{
  public $con;
   public $error;
public function __construct()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "aiub";
 //$tbname="student";
 //$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

 $this->con = mysqli_connect("localhost", "root", "", "aiub");
           if(!$this->con)
           {
                echo 'Database Connection Error ' . mysqli_connect_error($this->con);
           }

 //return $conn;
 }





public function insert($table_name, $data)
      {
           $string = "INSERT INTO ".$table_name." (";
           $string .= implode(",", array_keys($data)) . ') VALUES (';
           $string .= "'" . implode("','", array_values($data)) . "')";
           if(mysqli_query($this->con, $string))
           {
                return true;
           }
           else
           {
                echo mysqli_error($this->con);
           }
      }




function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
