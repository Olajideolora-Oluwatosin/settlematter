<?php


class Account
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    // Get All Projects

    // Get Projects By ID
    public function getUser($userid)
    {
        $this->db->query("SELECT * FROM users WHERE id = :userid");        
        $this->db->bind(':userid', $userid);
        $results = $this->db->single();
        return $results;
    }
}