<?php 

class Admin_model extends CI_Model {
	public function get_bookingan() {   
        
		return $this->db->get('bookingan')->result_array();
	}

	public function input_kamar() {
		$nama	= $this->input->post('nama');
        $pemilik   = $this->input->post('pemilik');
        $keterangan = $this->input->post('keterangan');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');

        // get foto
        $config['upload_path'] = './assets/img';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['gambar']['name'];

        $this->upload->initialize($config);

        if (!empty($_FILES['gambar']['name'])) {
            if ( $this->upload->do_upload('gambar') ) {
                $gambar = $this->upload->data();
                $data = array(
                            'nama_penginapan'		=> $nama,
                            'pemilik'               => $pemilik,
                            'keterangan'            => $keterangan,
                            'price'                 => $harga,
                            'stok'                  => $stok,
                            'gambar'                => $gambar['file_name'],
                            );
            }
        }

		$this->db->insert('kamar', $data);
	}

	public function ubah_kamar() {
		$id   = $this->input->post('id');
        $nama	= $this->input->post('nama');
        $pemilik   = $this->input->post('pemilik');
        $keterangan = $this->input->post('keterangan');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $path = './assets/img/';

        // get foto
        $config['upload_path'] = './assets/img';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['gambar']['name'];

        $this->upload->initialize($config);

        if (!empty($_FILES['gambar']['name'])) {
            if ( $this->upload->do_upload('gambar') ) {
                $gambar = $this->upload->data();
                $data = array(
                            'nama_penginapan'   => $this->input->post('nama'),
                            'pemilik'           => $this->input->post('pemilik'),
                            'keterangan'        => $this->input->post('keterangan'),
                            'price'             => $this->input->post('harga'),
                            'stok'              => $this->input->post('stok'),
                            'gambar'            => $gambar['file_name'],
                            );
                // hapus foto pada direktori
              @unlink($path.$this->input->post('gambarLama'));
              $this->db->where('id', $id);
              $this->db->update('kamar', $data);
            }
        }

        
	}

	public function kamar_id($id) {
		return $this->db->get_where('kamar', ['id' => $id])->row_array();
                 $this->db->update('kamar');
	}

    public function getDataWhere($table, $where)
    {
        $this->db->where($where);
        return $this->db->get($table);
    }
    public function userdata($where = null)
    {
        return $this->db->get_where('id_booking',  $where);
    }

	public function delete_kamar($id) {
		$this->db->where('id', $id);
        $this->db->delete('kamar');
	}

    public function joinOrder($where)
    {
        $this->db->select('booking.*, bookingan_detail.* , kamar.*');
        $this->db->from('bookingan booking');   
        $this->db->join('bookingan_detail d', 'd.id_booking=booking.id_booking');
        $this->db->join('kamar k ', 'k.id=d.id_booking');
        $this->db->where($where);

        return $this->db->get();
    }
}