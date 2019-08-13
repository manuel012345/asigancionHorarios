<?php

namespace Mini\Model;

use Mini\Core\Model;

class centro extends Model
{
    
    public function IngresarCentro($idSede,$nombre,$direccion,$telefono,$correo,$director)
    {
        
        $sql = "
        set @estado = 'Activo';
        INSERT INTO centro (idSede, nombre, direccion, telefono, correo, director, estado)
        VALUES (:p_idSede, 
        		:p_nombre, 
        		:p_direccion, 
        		:p_telefono, 
        		:p_correo, 
        		:p_director, 
        		@estado)";
        $query = $this->db->prepare($sql);
        $parameters = array(
        	':p_idSede'=>$idSede,
        	':p_nombre'=>$nombre,
        	':p_direccion'=>$direccion,
        	':p_telefono'=>$telefono,
        	':p_correo'=>$correo,
        	':p_director'=>$director);
        $query->execute($parameters);
         
    }

    public function listarSede()
    {
        $sql = "SELECT * FROM sede";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function listarCentro()
    {
        $sql = 'SELECT c.idCentro , s.nombre as sede, c.nombre, c.direccion, c.telefono, c.correo, c.director, c.estado 
         		FROM centro AS c 
				INNER JOIN sede  as s ON c.idSede = s.idSede';
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
}
?>
