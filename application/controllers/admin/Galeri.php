<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("galeri_model");
        $this->load->library('form_validation');
        $this->load->model("user_model");
        if ($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["tb_galeri"] = $this->galeri_model->getAll();
        $this->load->view("admin/galeri/list", $data);
    }

    public function add()
    {
        $tb_galeri = $this->galeri_model;
        $validation = $this->form_validation;
        $validation->set_rules($tb_galeri->rules());

        if ($validation->run()) {
            $tb_galeri->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/galeri/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/galeri');

        $tb_galeri = $this->galeri_model;
        $validation = $this->form_validation;
        $validation->set_rules($tb_galeri->rules());

        if ($validation->run()) {
            $tb_galeri->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["galeri"] = $tb_galeri->getById($id);
        if (!$data["galeri"]) show_404();

        $this->load->view("admin/galeri/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->galeri_model->delete($id)) {
            redirect(site_url('admin/galeri'));
        }
    }
}
