<?php
class Obras_model extends CI_Model {


				public function load_obras()
				{
								$query = $this->db->get('obra');
								return $query->result();
				}
				public function load_images_by_obra_id($id){

								$result =  $this->db->get_where('images', array('id_obra' => $id));
								return $result->result();
				}

				public function insert_entry($data)
				{

								$data  = $this->db->insert('obra', $data);
								return $this->db->insert_id();	
				}

				public function save_photo($data)
				{
								$data  = $this->db->insert('images', $data);

				}

}
?>
