<?php
    class Card {
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        // Add Transfer
        public function requestCard($data){
            // Prepare Query
            $this->db->query('INSERT INTO cards (username, accountno, dob, type, status) 
            VALUES (:username, :accountno, :dob, :type, :status)');

            // Bind Values
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':accountno', $data['accountno']);
            $this->db->bind(':dob', $data['dob']);
            $this->db->bind(':type', $data['type']);
            $this->db->bind(':status', $data['status']);
            
            //Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }

        }

        public function getCards($id)
        {
            $this->db->query("SELECT id as id, username as username, accountno as accountno, dob as dob, type as type, status as status, date as date FROM cards WHERE username = :id ORDER BY id DESC");
            $this->db->bind(':id', $id);
            $results = $this->db->resultset();

            return $results;
        }


    }