<?php
class Form_model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function get_last_ten_entries()
        {
                $query = $this->db->get('entries', 10);
                return $query->result();
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
