<?php
//database

//database credentials
require('db_cred.php');

/**
 *@author JJIG
 *@version 1.0
 */
class db_connection
{
    //properties
    public $db = null;
    public $results = null;

    //connect
    /**
    *Database connection
    *@return bolean
    **/
    function db_connect(){
        //connection
        $this->db = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
        //test the connection
        if (mysqli_connect_errno()) {
            return false;
        }else{
            return true;
        }
    }

    //execute a query
    /**
    *Query the Database
    *@param takes a connection and sql query
    *@return bolean
    **/
    function db_query($sqlQuery){
        if (!$this->db_connect()) {
            return false;
        } 
        elseif ($this->db==null) {
            return false;
        }

        //run query 
        $this->results = mysqli_query($this->db,$sqlQuery);
        if ($this->results == false) {
            return false;
        }else{
            return true;
        }
        
    }

    //fetch data
    /**
    *get select data
    *@return a record
    **/
    function db_fetch(){
        //check if result was set
        if ($this->results == null) {
            return false;
        }
        elseif ($this->results == false) {
            return false;
        }
        //return a record
        return mysqli_fetch_assoc($this->results);

    }

    public function read_rooms($filter=false){

        $queryString = "SELECT *FROM `rooms`";
        
        if($filter){

            $queryString = $queryString." where $filter";
            
        }

        return $this->db_query($queryString);

    }

    public function read_checkins($filter=false){

        $queryString = "SELECT * FROM `checkin` WHERE `roomID` = '$filter'";
        
        if($filter){

            $queryString = $queryString." where $filter";
            
        }

        return $this->db_query($queryString);

    }
}
?>