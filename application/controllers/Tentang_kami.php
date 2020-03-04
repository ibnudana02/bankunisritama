<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_kami extends CI_Controller
{
    public function index()
    {
        $this->profil();
    }
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
        $this->load->view('tentang/sejarah');
        $this->load->view('template/footer');
    }
    public function visi_misi()
    {
        $data['topic'] = "Tentang Kami";
        $data['page'] = "Visi dan Misi";
        $this->load->view('template/header', $data);
        $this->load->view('tentang/visi_misi');
        $this->load->view('template/footer');
    }

    public function manajemen()
    {
        $data['topic'] = "Tentang Kami";
        $data['page'] = "Manajemen";
        $this->load->view('template/header', $data);
        $this->load->view('tentang/manajemen');
        $this->load->view('template/footer');
    }

    public function struktur_organisasi()
    {
        $data['topic'] = "Tentang Kami";
        $data['page'] = "Struktur Organisasi";
        $this->load->view('template/header', $data);
        $this->load->view('tentang/struktur');
        $this->load->view('template/footer');
    }

    public function achievement()
    {
        $data['topic'] = "Tentang Kami";
        $data['page'] = "Penghargaan";
        $this->load->view('template/header', $data);
        $this->load->view('tentang/awards');
        $this->load->view('template/footer');
    }

    public function jaringan_kantor()
    {
        $data['topic'] = "Tentang Kami";
        $data['page'] = "Jaringan Kantor";
        $this->load->view('template/header', $data);
        $this->load->view('tentang/location');
        $this->load->view('template/footer');
    }
}
