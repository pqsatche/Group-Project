<?php
define("DB_SERVER", "localhost");
define("DB_NAME", "CIS355pqsatche");
define("DB_USER", "CIS355pqsatche");
define("DB_PASSWORD", "brady");

/**
 * Created by IntelliJ IDEA.
 * User: brad
 * Date: 2/4/15
 * Time: 9:52 PM
 */
class DBConnector {

    public static function get_db_connection() {
        $mysqli  = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
        if ($mysqli->connect_error) {
            //Figure out how to throw proper exception
            die("Connection failed: " . mysqli_connect_error());
        }
        else {
            return $mysqli;
        }
    }

}

?>
