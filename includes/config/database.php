<?php
   function connDb() : mysqli{
      $db = mysqli_connect('localhost', 'root', 'root', 'bienesraices_crud');

      if(!$db){
         echo "Conexion fallida";
         exit;
      }

      return $db;
   }