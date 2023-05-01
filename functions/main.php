<?php

   //Conexion a base de datos   
   function connect(){
        $pdo = new PDO('mysql:host=localhost;dbname=invoices', 'root','');
        return $pdo;
   }

   //Verificar Datos
   
   function verify_data($filter,$string){
        if (preg_match("/^".$filter."$/", $string)){
            return false;
        }else{
            return true;
        }
   }

   //Limpiar texto por seguridad para evitar sql inyection

   function clean_data($string){
        $string=trim($string);
        $string=stripslashes($string);
        $string=str_ireplace("<script>","",$string);
        $string=str_ireplace("</script>","",$string);
        $string=str_ireplace("SELECT * FROM", "", $string);
		$string=str_ireplace("DELETE FROM", "", $string);
        $string=str_ireplace("INSERT INTO", "", $string);
		$string=str_ireplace("DROP TABLE", "", $string);
		$string=str_ireplace("DROP DATABASE", "", $string);
		$string=str_ireplace("TRUNCATE TABLE", "", $string);
		$string=str_ireplace("SHOW TABLES;", "", $string);
		$string=str_ireplace("SHOW DATABASES;", "", $string);
		$string=str_ireplace("<?php", "", $string);
		$string=str_ireplace("?>", "", $string);
		$string=str_ireplace("--", "", $string);
		$string=str_ireplace("^", "", $string);
		$string=str_ireplace("<", "", $string);
		$string=str_ireplace("[", "", $string);
		$string=str_ireplace("]", "", $string);
		$string=str_ireplace("==", "", $string);
		$string=str_ireplace(";", "", $string);
		$string=str_ireplace("::", "", $string);
		$string=trim($string);
		$string=stripslashes($string);
        return $string;
   }
