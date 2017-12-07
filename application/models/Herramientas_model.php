<?php

class Herramientas_model extends CI_Model {
				public function save_herramienta($data){
								$data  = $this->db->insert('herramientas', $data);
								return $this->db->insert_id();

				}
				public function update_herramienta_img($id,$url){
								$data = array(
																'url' => $url
														 );
								$this->db->where('id_herramienta', $id);
								$this->db->update('herramientas',$data); 
				}
				public function update_herramienta($id,$data){

								$this->db->where('id_herramienta', $id);
								$this->db->update('herramientas',$data); 
								echo 'pase por aca';
				}
				public function get_herramientas(){
								return $this->db->get('herramientas')->result();
				}
}
?>
