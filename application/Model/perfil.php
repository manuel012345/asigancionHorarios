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


use Mini\Core\Model;

class perfil extends Model
{





public function TodosInstructoresP()
{

	$sql= "SELECT * FROM usuario";

	$query = $this->db->prepare($sql);
	$query->execute();


	return $query->fetchAll();
}

    
}
?>
