<?

require("db_class.php");

class registerAuthenticate extends db_connection{

    function queryLogin($email, $password){

        $sql = "SELECT `usermail`, `upassword` FROM `users` WHERE usermail='$email' AND upassword='$password'";

        $result = $this->db_fetch($sql);

        return $result;

    }


}

?>