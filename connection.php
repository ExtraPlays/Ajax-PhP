<?php

    class Connection{


        public static $instance;        
        
        public static function getInstance(){
            if (!isset(self::$instance)){
                self::$instance = new PDO("mysql:host=localhost;dbname=plugins", "root", "");
            }

            return self::$instance;
        }
        


    }
   



?>