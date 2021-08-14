<?php

class Conexion{

    static public function conectar(){
                $user = "sam";
                $pass = "1310332";

                $dbh = new PDO('sqlsrv:Server=DESKTOP-OGGAVC1;Database=andon', $user, $pass);

                return $dbh;


    }
 }
