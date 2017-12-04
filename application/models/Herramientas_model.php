<?php

class Herramientas_model extends CI_Model {
				public function save_herramienta($data){
								$data  = $this->db->insert('herramientas', $data);
								return $this->db->insert_id();

				}
				public function save_img_herramienta($data){
								$data  = $this->db->insert('images_herramientas', $data);
								return $this->db->insert_id();

				}
}
?>
