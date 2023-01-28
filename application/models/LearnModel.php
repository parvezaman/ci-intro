<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LearnModel extends CI_Model
{

    public function getData()
    {
        return ['a' => 'learn', 'b' => 'moder', 'c' => 'with', 'd' => 'aman'];
    }
}
