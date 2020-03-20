<?php defined('BASEPATH') or exit('No direct script access allowed');

class Galeri_model extends CI_Model
{
    private $_table = "tb_galeri";

    public $id_galeri;
    public $nama_galeri;
    public $gambar_minuman = "default.jpg";


    public function rules()
    {
        return [
            [
                'field' => 'nama_galeri',
                'label' => 'Nama Galeri',
                'rules' => 'required'
            ]

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_galeri" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_galeri = uniqid();
        $this->nama_galeri = $post["nama_galeri"];
        $this->gambar_minuman = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_galeri = $post["id"];
        $this->nama_galeri = $post["nama_galeri"];
        if (!empty($_FILES["gambar_minuman"]["nama_galeri"])) {
            $this->gambar_minuman = $this->_uploadImage();
        } else {
            $this->gambar_minuman = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array('id_galeri' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_galeri" => $id));
    }
    private function _uploadImage()
    {
        $config['upload_path']          = './upload/galeri/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id_galeri;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar_minuman')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
        // return "default.jpg";
    }
    private function _deleteImage($id)
    {
        $galeri = $this->getById($id);
        if ($galeri->gambar_minuman != "default.jpg") {
            $filename = explode(".", $galeri->gambar_minuman)[0];
            return array_map('unlink', glob(FCPATH . "upload/galeri/$filename.*"));
        }
    }
}
