<?

require("db_class.php");

class registerAuthenticate extends db_connection{

    private $userName = null;
    private $email = null;
    private $init_pword = null;

    /**
     * @param a parameter of the users signup name
     * @param a parameter of the users email address
     * @param a parameter of the users password
     * This is the default class constructor that takes the user signup details in stores them in the class properties
     */
    function __construct($uname='none', $mail='none', $i_pword='none'){
               
        //store the userName
        $this->userName = $uname;

        //store the email
        $this->email = $mail;
        
        //store the password
        $this->init_pword = md5($i_pword);

        $this->db_connect();

    }

    // function queryLogin($email, $password){

    //     $sql = ;



    // }

    

}

?>