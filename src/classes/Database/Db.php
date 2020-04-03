<?php

namespace Src\Classes\Database;

use \PDO;
use \PDOException;

class Db{
    private const HOST = "localhost";
    private const USER = "root";
    private const PASSWD = "";
    private const DBNAME = "crawlerdb";

    private const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];

    private static $instance;

    public static function getInstance(){
        if(empty(self::$instance)){
            try{
                self::$instance = new PDO(
                "mysql:host=".self::HOST.";dbname=".self::DBNAME,
                self::USER,
                self::PASSWD,
                self::OPTIONS   
                );
            }catch(PDOException $exception){
                die("Erro ao conectar ao banco{$exception}");
            }
        }
    }

    final private function __construct(){

    }
    final private function __clone(){

    }
}