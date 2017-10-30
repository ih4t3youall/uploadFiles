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
//								$config['max_size']             = 2000;
//								$config['max_width']            = 1024;
//								$config['max_height']           = 768;

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

												echo $this->input->post('textoimagen');
												echo '<br/>';
												echo $this->upload->data('full_path');
												echo '<br/>';
												echo $id_obra;
												echo '<br/>';
												echo 'finish';

												$dataObra = array(
																				'id_obra' => $id_obra,
																				'error'=>''
																				);
												$this->load->view('obras/addPhoto', $dataObra);
								}
				}
				public function save_photo($id_obra){

						$data = array(

						'url' =>$this->upload->data('full_path'), 
						'textoimagen' => $this->input->post('textoimagen'),
						'id_obra' =>$id_obra 
										);
					$this->load->model('obras_model');	
					$this->obras_model->save_photo($data);



				}
}
?>