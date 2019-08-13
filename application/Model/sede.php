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

class sede extends Model
{
    
    public function Ingresarsede($idMunicipio,$nombre,$direccion,$telefono,$correo,$director)
    {
        
     
        $sql = "
        set @estado = 'Activo';
        INSERT INTO sede (idMunicipio, nombre, direccion, telefono, correo, director, estado)
        VALUES (:p_idMunicipio, 
        		:p_nombre, 
        		:p_direccion, 
        		:p_telefono, 
        		:p_correo, 
        		:p_director, 
        		@estado)";
        $query = $this->db->prepare($sql);
        $parameters = array(
        	':p_idMunicipio'=>$idMunicipio,
        	':p_nombre'=>$nombre,
        	':p_direccion'=>$direccion,
        	':p_telefono'=>$telefono,
        	':p_correo'=>$correo,
        	':p_director'=>$director);
        $query->execute($parameters);
         
    }

    public function listarMunicipio()
    {
        $sql = "SELECT * FROM municipio";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function listarSede()
    {
        $sql = 'SELECT s.idSede , m.nombre as municipio, s.nombre, s.direccion, s.telefono, s.correo, s.director, s.estado 
         		FROM sede AS s 
				INNER JOIN municipio  as m ON s.idMunicipio = m.idMunicipio';
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

}
?>
