<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LearnController extends CI_Controller
{

    public function index()
    {
        // $this->load->view('welcome_message');
        echo "we are learning CI with Learn hunter";
    }

    public function showLearnController()
    {
        // echo "trying to see learn controller";
        $this->load->view('learnController.php');
        $this->load->view('sub/testController.php');
    }

    public function showModelData()
    {
        $this->load->model('LearnModel');
        $data = $this->LearnModel->getData();

        echo '</pre>';
        print_r($data);
    }
}
