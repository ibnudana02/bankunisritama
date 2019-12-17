<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_kami extends CI_Controller {
    public function profil()
    {
        $data['topic'] = "Tentang Kami";
        $data['page'] = "Profil Perusahaan";
        $this->load->view('template/header', $data);
		$this->load->view('tentang/profil', $data);
		$this->load->view('template/footer');
    }

    public function sejarah()
    {
        $data['topic'] = "Tentang Kami";
        $data['page'] = "Sejarah";
        $this->load->view('template/header', $data);
		$this->load->view('tentang/profil');
		$this->load->view('template/footer');
    }
}