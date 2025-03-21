<?php


class Registration
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Get All Projects
   

    // Get Projects By ID
    public function getLga()
    {
        $this->db->query("SELECT * FROM lga");        

        $results = $this->db->resultset();

        return $results;
    }
    public function getWards($id)
    {
        $this->db->query("SELECT * FROM wards WHERE lgaId = :id");        

        $this->db->bind(':id', $id);
        $results = $this->db->resultset();

        return $results;
    }
    public function getPolly($data)
    {
        $this->db->query("SELECT * FROM polyunit WHERE lgaId = :lgaId AND wardId = :wardId");        

        $this->db->bind(':lgaId', $data['lga']);
        $this->db->bind(':wardId', $data['ward']);
        $results = $this->db->resultset();

        return $results;
    }
    public function getPollyCompId($data)
    {
        $this->db->query("SELECT id FROM polyunit WHERE punit = :punit");        

        $this->db->bind(':punit', $data['punit']);
        $results = $this->db->resultset();

        return $results;
    }
   
   
    public function addParastatal($data)
    {
        // Prepare Query
        $this->db->query('INSERT INTO parastatals (parastatal, title, lga, lat, lng, address, img) VALUES (:parastatal, :title, :lga, :lat, :lng, :address, :img)');
        // Bind Values
        $this->db->bind(':parastatal', $data['parastatal']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':lga', $data['lga']);
        $this->db->bind(':lat', $data['lat']);
        $this->db->bind(':lng', $data['lng']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':img', $data['img']);
        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    // Update Post
   

    public function deletePost($id){
        // Prepare Query
        $this->db->query('DELETE FROM posts WHERE id = :id');

        // Bind Values
        $this->db->bind(':id', $id);

        //Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

}