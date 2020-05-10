<?

require("db_class.php");

class registerAuthenticate extends db_connection{

    function sanitizeData($input) {
	
        $data = trim($input);
    
        $data = stripslashes($data);
    
        $data = htmlspecialchars($data);
    
        return $data;
    
    }

    function queryLogin($email, $password){

        $sql = "SELECT `usermail`, `upassword` FROM `users` WHERE usermail='$email' AND upassword='$password'";

        $result = $this->db_query($sql);

        return $result;

    }


}

?>