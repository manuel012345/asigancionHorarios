<?php

/**
 * Class person
 * This is a demo Model class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Model;

use Mini\Model\Log;
use Mini\Libs\Helper;
use \Exception, \PDOException;
use Mini\Core\Model;

class login extends Model
{
    /**
     * Get all songs from database
     */
    public function ValidarLogin($documento)
    {
        //,:p_password
        $sql = "call SP_LOGIN( :p_documento)";
        $query = $this->db->prepare($sql);
        $parameters = array(':p_documento' => $documento);
        $query->execute($parameters);
        
        return ($query->rowcount() ? $query->fetch() : false);
    }
    
   

}
?>
