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

	public function update_image($image,$id_image){

		$this->db->where('id_images',$id_image );
		$this->db->update('images', $image);

	}

	public function update_obra($obra,$id_obra){
		var_dump($id_obra);
		var_dump($obra);
		$this->db->where('id_obra', $id_obra);
		$this->db->update('obra', $obra);
	}

	public function delete_image($id_image){
		$this->db->delete('images', array('id_images' => $id_image));
	}

	public function delete_obra($id_obra){
		$this->db->delete('images', array('id_obra' => $id_obra));
		$this->db->delete('obra', array('id_obra' => $id_obra));
	}
}

?>
