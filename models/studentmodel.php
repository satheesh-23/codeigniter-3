<?php
class Studentmodel extends CI_Model
{
    public function insertdata($data)
    {
        $this->load->database();
        return $this->db->insert('user', $data);
    }

    public function fetchdata()
    {
        $this->load->database();
        return $this->db->get('user')->result();
    }

    public function editdata($id)
    {

        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('user')->result();
    }
    public function updatedata($data, $id)
    {


        $this->load->database();


        $this->db->where('id', $id);
        return $this->db->update('user', $data);


    }
    public function delete($id)
    {
        $this->load->database();


        $this->db->where('id', $id);
        return $this->db->delete('user');



    }


}


?>