<?php

namespace ContactsEss18;

require_once('Conexion.php');

class Modelo extends Conexion
{    

    public function obtenerContactos(){

        $query = "SELECT
        contact.id,
        contact.name,
        contact.surname,
        contact.charge,
        contact.tel1,
        contact.mail,
        club.name as club_name
        FROM contacts as contact
        LEFT JOIN clubs club ON club.id = contact.club_id";

        $datos = parent::runDMLQueryAndSerialize($query);           

        return $datos;
        
    }


    public function agregarContacto($datos){

        $name = $datos['name'];
        $surname = $datos['surname'];
        $charge = $datos['charge'];
        $club_id = $datos['idClubIdSelect'];
        $mail = $datos['mail'];
        $tel1 = $datos['tel1'];
        $tel2 = $datos['tel2'];

        $query = "INSERT INTO contacts(name, surname, charge, club_id, mail, tel1, tel2)
			VALUES ('$name', '$surname','$charge',$club_id,'$mail','$tel1','$tel2')";
        
                    
        $queryResult = parent::runDDLQuery($query);         

        return $queryResult;  
    }

    public function actualizarContacto($datos){
        
        $contact_id = $datos['contactId'];
        $name = $datos['name'];
        $surname = $datos['surname'];
        $charge = $datos['charge'];
        $club_id = $datos['idClubIdSelect'];
        $mail = $datos['mail'];
        $tel1 = $datos['tel1'];
        $tel2 = $datos['tel2'];

        $query = "UPDATE contacts SET 
        name='$name', 
        surname='$surname', 
        charge='$charge', 
        club_id=$club_id, 
        mail='$mail', 
        tel1='$tel1', 
        tel2='$tel2'
        WHERE id=$contact_id";        
                    
        $queryResult = parent::runDDLQuery($query);         

        return $queryResult;  
    }


    public function eliminarContacto($idContacto){       

        $query = "DELETE FROM contacts WHERE id=$idContacto";        
                    
        $queryResult = parent::runDDLQuery($query);         

        return $queryResult;  
    }


    public function obtenerDatosContacto($idContacto){       

        $query = "SELECT
        contact.id,
        contact.name,
        contact.surname,
        contact.charge,
        contact.club_id, 
        contact.tel1,
        contact.tel2,
        contact.mail
        FROM contacts as contact        
        WHERE contact.id=$idContacto";

        $datos = parent::runDMLQueryAndSerialize($query);           

        return $datos;
    }


    public function obtenerClubes(){

        $query = "SELECT
        club.id,
        club.name,
        club.country_code,
        club.category_id,
        club.group_id,
        club.logo,
        club.mails,
        club.tel1,
        club.tel2,
        country.name AS country_name,
        category.name AS category_name,
        groupClass.name AS group_name,
        club.datetime_updated As datetime_updated
        FROM clubs club
        LEFT JOIN country_codes country 
        ON country.country_code = club.country_code
        LEFT JOIN category category 
        ON category.id = club.category_id
        LEFT JOIN group_class groupClass 
        ON groupClass.id = club.group_id
        ORDER BY club.name";

        $datos = parent::runDMLQueryAndSerialize($query);           

        return $datos;
        
    }

    public function obtenerPaises(){

        $query = "SELECT
        id,
        country_code,
        name,
        continent_code
        FROM country_codes
        ORDER BY name";

        $datos = parent::runDMLQueryAndSerialize($query);           

        return $datos;
        
    }

    public function obtenerCategorias(){

        $query = "SELECT
        id,        
        name
        FROM category
        ORDER BY name";
        
        $datos = parent::runDMLQueryAndSerialize($query);           

        return $datos;
        
    }

    public function obtenerGrupos(){

        $query = "SELECT
        id,        
        name
        FROM group_class";

        $datos = parent::runDMLQueryAndSerialize($query);           

        return $datos;
        
    }


    public function agregarClub($datos){        

        $name = $datos['name'];
        $country_code = $datos['country_code'];
        $category_id = $datos['category_id'];
        $group_id = $datos['group_id'];
        $mail = $datos['mail'];
        $tel1 = $datos['tel1'];
        $tel2 = $datos['tel2'];

        if($datos['group_id'] == 0){
            $query = "INSERT INTO clubs(name, country_code, category_id, group_id, mails, tel1, tel2)
			VALUES ('$name', '$country_code', $category_id, null,'$mail','$tel1','$tel2')";
        }else{
            $query = "INSERT INTO clubs(name, country_code, category_id, group_id, mails, tel1, tel2)
            VALUES ('$name', '$country_code', $category_id, $group_id,'$mail','$tel1','$tel2')";
        }

        $queryResult = parent::runDDLQuery($query);         

        return $queryResult;  
    }


    public function obtenerDatosClub($clubId){       

        $query = "SELECT
        id,
        name,
        country_code,
        category_id,
        group_id, 
        tel1,
        tel2,
        mails
        FROM clubs        
        WHERE id=$clubId";

        $datos = parent::runDMLQueryAndSerialize($query);           

        return $datos;
    }


    public function lookResults($array){       

        echo('<pre>');
	    var_dump($array);
	    echo('</pre>');
    }
    

    public function eliminarClub($clubId){       

        $query = "DELETE FROM clubs WHERE id=$clubId";        
                    
        $queryResult = parent::runDDLQuery($query);         

        return $queryResult;  
    }


    public function actualizarClub($datos){
        
        $clubId = $datos['clubId'];
        $name = $datos['name'];  
        $mails = $datos['mails'];
        $tel1 = $datos['tel1'];
        $tel2 = $datos['tel2'];
        $countryCode = $datos['country_code'];
        $categoryId = $datos['category_id'];
        $groupId = $datos['group_id']; 

        $query = "UPDATE clubs SET 
        name='$name', 
        country_code='$countryCode',
        category_id=$categoryId, 
        tel1='$tel1', 
        tel2='$tel2',
        mails='$mails'";

        if($groupId == 0){
           $query.=',group_id=null ';
        }else{
            $query.=",group_id=$groupId ";
        }
        $query.= " WHERE id=$clubId";
                    
        $queryResult = parent::runDDLQuery($query);         

        return $queryResult;  
    }



    public function validarUsuario($datos){     
        
        $user = isset($datos['user'])? $datos['user']: '';
        $password = isset($datos['password'])? $datos['password']: '';  

        $query = "SELECT id, name, surname FROM users WHERE user='$user' and password='$password'";       

        $datos = parent::runDMLQueryAndSerialize($query);           

        return $datos;
    }
    
    


        

}