<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lantai extends CI_Controller
{

    public function index()
    {
        $data["ea"] = "ea";
        $r = $this->load->view('lantai', $data, TRUE);
        echo $r;
    }

    public function getLantai()
    {
        $lantai = $this->input->post("lantai");
        $data["image"] = base_url("assets/images/lantai-img.png");

        switch ($lantai) {
            case 2:
                $data["lantai"] = "Lantai 2";
        break;
            case 3:
                $data["lantai"] = "Lantai 3";
        break;
            case 4:
                $data["lantai"] = "Lantai 4";
        break;
            case 5:
                $data["lantai"] = "Lantai 5";
        break;
            default:
                $data["lantai"] = "Anda berada di Lantai 1";
        }

        echo json_encode($data);
    }
}
