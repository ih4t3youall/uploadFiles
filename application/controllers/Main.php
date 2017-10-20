<?php 


class Main extends CI_Controller {
				public function __construct(){


								parent::__construct();
								$this->load->helper(array('form', 'url'));

				}


				public function index()
				{


								$this->load->view('MainForm');	

				}

				public function submitForm(){

								$this->load->helper(array('form', 'url'));

								$this->load->library('form_validation');

								$this->form_validation->set_rules('antecedentes', 'Antecedentes', 'required');
								$this->form_validation->set_rules('texto', 'Texto', 'required');
								$this->form_validation->set_rules('obra', 'Obras', 'required');
								$this->form_validation->set_rules('lugar', 'Lugar', 'required');
								$this->form_validation->set_rules('planta', 'Planta', 'required');
								$this->form_validation->set_rules('cliente', 'Cliente', 'required');
								$this->form_validation->set_rules('anio', 'Anio', 'required');
								$this->form_validation->set_rules('desc_tar_realiz', 'desc_tar_realiz', 'required');

								if ($this->form_validation->run() == FALSE)
								{
												$this->load->view('MainForm');
								}
								else
								{
										$data= array(
												'antecedentes' =>	$this->input->post('antecedentes'),
												'texto' => $this->input->post('texto'),	
												'obra'=> $this->input->post('obra'),		
												'lugar'=> $this->input->post('lugar'),	
												'planta' => $this->input->post('planta'),	
												'cliente' =>$this->input->post('cliente'),	
												'anio' => $this->input->post('anio'),	
												'desc_tar_realiz' =>$this->input->post('desc_tar_realiz')
												);
												$this->load->model('form_model');
												$this->form_model->insert_entry($data);
										

								}



				}


}




?>