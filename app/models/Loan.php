<?php
    class Loan {
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        // Add Transfer
        public function requestLoan($data){
            // Prepare Query
            $this->db->query('INSERT INTO loans (username, accountno, dob, amount, reason, duration, status) 
            VALUES (:username, :accountno, :dob, :amount, :reason, :duration, :status)');

            // Bind Values
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':accountno', $data['accountno']);
            $this->db->bind(':dob', $data['dob']);
            $this->db->bind(':amount', $data['amount']);
            $this->db->bind(':reason', $data['reason']);
            $this->db->bind(':duration', $data['duration']);
            $this->db->bind(':status', $data['status']);
            
            //Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }

        }

        public function getLoans($id)
        {
            $this->db->query("SELECT id as id, username as username, accountno as accountno, dob as dob, amount as amount, reason as reason, duration as duration, status as status, date as date FROM loans WHERE username=:id ORDER BY id DESC");
            $this->db->bind(':id', $id);
            $results = $this->db->resultset();

            return $results;
        }

    }