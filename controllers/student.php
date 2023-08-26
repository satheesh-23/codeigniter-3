<?php

class Student extends CI_Controller
{
    public function add()
    {
        $this->load->view('add.php');
    }

    public function savedata()
    {
        extract($_POST);
        $data = [
            'name' => $name,
            'mobile' => $mobile,
            'city' => $city,
        ];
        $this->load->model('studentmodel');
        $result = $this->studentmodel->insertdata($data);
        if ($result) {
            $this->fetchdata();
        }


    }


    public function fetchdata()
    {
        $this->load->model('studentmodel');
        $result['table'] = $this->studentmodel->fetchdata();
        $this->load->view('display', $result);
    }

    public function editdata($id)
    {
        $this->load->model('studentmodel');
        $result['table'] = $this->studentmodel->editdata($id);
        echo $result;

        if ($result) {

            $this->load->view('edit', $result);
        }
    }

    public function updatedata($id)
    {

        extract($_POST);


        $data = [
            'name' => $name,
            'mobile' => $mobile,
            'city' => $city,
        ];
        $this->load->model('studentmodel');
        $result = $this->studentmodel->updatedata($data, $id);
        if ($result) {
            $this->fetchdata();

        }
    }
    public function delete($id)
    {

        $this->load->model('studentmodel');
        $result = $this->studentmodel->delete($id);


        if ($result) {

            $this->fetchdata();
        }
    }

}
?>