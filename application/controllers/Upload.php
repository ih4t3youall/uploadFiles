<?php

class Upload extends CI_Controller {

				public function __construct()
				{
								parent::__construct();
								$this->load->helper(array('form', 'url'));
				}

				public function index()
				{
								$this->load->view('obras/addPhoto', array('error' => ' ' ));
				}

				public function do_upload()
				{
								$config['upload_path']          = './uploads/';
								$config['allowed_types']        = 'gif|jpg|png|jpeg';

								$this->load->library('upload', $config);

								if ( ! $this->upload->do_upload('userfile'))
								{
												$error = array('error' => $this->upload->display_errors());
												$id_obra =	$this->input->post('id_obra');	
												$error['id_obra']=$id_obra;
												$this->load->view('obras/addPhoto', $error);
								}
								else
								{
												//todo salvar en database
												$id_obra =	$this->input->post('id_obra');	
												$this->save_photo($id_obra);
												$uploadData = $this->upload->data();
												$dataObra = array(
																				'id_obra' => $id_obra,
																				'error'=>''
																				);
												$this->load->view('obras/addPhoto', $dataObra);
								}
				}
				public function save_photo($id_obra){

												$fileName=$this->upload->data('raw_name').$this->upload->data('file_ext');
								$data = array(

																'url' =>$fileName,
																'textoimagen' => $this->input->post('textoimagen'),
																'id_obra' =>$id_obra 
														 );
								$this->load->model('obras_model');	
								$this->obras_model->save_photo($data);



				}
}
?>