<?php defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "tb_makanan";

    public $id_makanan;
    public $nama_makanan;
    public $desc_makanan;
    public $gambar_makanan = "default.jpg";
    public $harga_makanan;

    public function rules()
    {
        return [
            [
                'field' => 'nama_makanan',
                'label' => 'Nama Makanan',
                'rules' => 'required'
            ],
            [
                'field' => 'desc_makanan',
                'label' => 'Deskripsi Makanan',
                'rules' => 'required'
            ],
            [
                'field' => 'harga_makanan',
                'label' => 'Harga Makanan',
                'rules' => 'numeric'
            ]


        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_makanan" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_makanan = uniqid();
        $this->nama_makanan = $post["nama_makanan"];
        $this->desc_makanan = $post["desc_makanan"];
        $this->gambar_makanan = $this->_uploadImage();
        $this->harga_makanan = $post["harga_makanan"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_makanan = $post["id"];
        $this->nama_makanan = $post["nama_makanan"];
        $this->desc_makanan = $post["desc_makanan"];

        if (!empty($_FILES["gambar_makanan"]["nama_makanan"])) {
            $this->gambar_makanan = $this->_uploadImage();
        } else {
            $this->gambar_makanan = $post["old_image"];
        }

        $this->harga_makanan = $post["harga_makanan"];

        $this->db->update($this->_table, $this, array('id_makanan' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_makanan" => $id));
    }
    private function _uploadImage()
    {
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id_makanan;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar_makanan')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
        // return "default.jpg";
    }
    private function _deleteImage($id)
    {
        $product = $this->getById($id);
        if ($product->gambar_makanan != "default.jpg") {
            $filename = explode(".", $product->gambar_makanan)[0];
            return array_map('unlink', glob(FCPATH . "upload/product/$filename.*"));
        }
    }
}
