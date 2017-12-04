
<?php 


class Herramientas extends CI_Controller {


				public function __construct()
				{
								parent::__construct();
								$this->load->helper(array('form', 'url'));
				}

				public function index(){

								$this->load->view('herramientas/mainForm');

				}
				public function submitForm(){

								$config['upload_path']          = './uploads/';
								$config['allowed_types']        = 'gif|jpg|png|jpeg';
								$this->load->library('upload', $config);

								$this->load->library('form_validation');
								$this->form_validation->set_rules('nombre', 'Nombre', 'required');
								$this->form_validation->set_rules('segundoTexto', 'segundoTexto', 'required');
								$this->form_validation->set_rules('textoHerramienta', 'Texto herramienta', 'required');

								if ($this->form_validation->run() == FALSE ) 
								{
												$this->load->view('herramientas/mainForm');
								}
								else
								{

												$nombre =	$this->input->post('nombre');	
												$textoHerramienta =	$this->input->post('textoHerramienta');	
												if(	$this->input->post('vehiculo')	== 'NULL'){
																$vehiculo =0;
												}else{

																$vehiculo =1;

												}
												$segundoTexto =	$this->input->post('segundoTexto');	
												$data= array(
																				'nombre' =>	$this->input->post('nombre'),
																				'segundoTexto' => $this->input->post('segundoTexto'),	
																				'textoHerramienta'=> $this->input->post('textoHerramienta'),		
																				'url'=>		$fileName=$this->upload->data('raw_name').$this->upload->data('file_ext'),
																				'vehiculo' =>$vehiculo
																		);
												$this->load->model('herramientas_model');
																								$inserted_id =			$this->herramientas_model->save_herramienta($data);	
																								$data['inserted_id'] =$inserted_id;
																								$data['error']='';
																								$this->load->view('herramientas/addPhoto',$data);
								}



				}

				public function do_upload(){

								$config['upload_path']          = './uploads/';
								$config['allowed_types']        = 'gif|jpg|png|jpeg';

								$this->load->library('upload', $config);

								if ( ! $this->upload->do_upload('userfile'))
								{
												$error = array('error' => $this->upload->display_errors());
												$id_images_herramientas =	$this->input->post('id_images_herramientas');	
												$error['id_obra']=$id_obra;
												$this->load->view('obras/addPhoto', $error);
								}
								else
								{
												$id_images_herramientas =	$this->input->post('id_images_herramientas');	
												$fileName=$this->upload->data('raw_name').$this->upload->data('file_ext');
												$dataObra = array(
																				'texto'	=> 	$this->input->post('textoimagen'),	
																				'url'=>$fileName,
																				'id_herramienta' =>$this->input->post('id_herramienta'),	
																				);

												//todo salvar en database
												$this->load->model('herramientas_model');
												$this->herramientas_model->save_img_herramienta($dataObra);
												$this->load->view('landing');
								}



				}
}
?>