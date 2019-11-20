<?php
 namespace db;

 use PDO;
 use PDOException;

 class Database
 {
     public function __construct()
     {
         try {
             $this->connection = new PDO('mysql:host=localhost; dbname=dovanusarasas', 'root', '');
             $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             print 'db sec';
         } catch (PDOException $e) {
             print "DB Connection Failed: " . $e->getMessage();
         }
     }

     public function select($sql)
     {
         return $this->connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);
     }
 }