<?php
    class Category{
        // DB
        private $conn;
        private $table = 'categories';

        public $id;
        public $name;
        public $created_at;

        public function __construct($db){
            $this->conn = $db;
        }

        // Get categories
        public function read(){
            // Create query
            $query = 'SELECT id, name, created_at FROM ' . $this->table . ' ORDER BY created_at DESC';

            // Prepare statement
            $stmt = $this->conn->prepare($query);

            // Execute query
            $stmt->execute();

            return $stmt;
        }
    }