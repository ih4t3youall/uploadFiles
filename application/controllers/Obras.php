<?php 


class Obras extends CI_Controller {

				public function __construct(){

								parent::__construct();

				}

				public function mainForm(){

								$this->load->view('obras/MainForm');	

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
												$this->load->view('obras/MainForm');
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
												$this->load->model('obras_model');
												$id_obra = 	$this->obras_model->insert_entry($data);
												$dataObra = array(
																				'id_obra' => $id_obra,
																				'error'=>''
																				);

												$this->load->view('obras/addPhoto',$dataObra);

								}



				}
				public function edit_photo(){


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
												$this->load->view('obras/MainForm');
								}
								else
								{

												$dataObra= array(
																				'antecedentes' =>	$this->input->post('antecedentes'),
																				'texto' => $this->input->post('texto'),	
																				'obra'=> $this->input->post('obra'),		
																				'lugar'=> $this->input->post('lugar'),	
																				'planta' => $this->input->post('planta'),	
																				'cliente' =>$this->input->post('cliente'),	
																				'anio' => $this->input->post('anio'),	
																				'desc_tar_realiz' =>$this->input->post('desc_tar_realiz')
																		);
												$dataImage=array(
																				'url' => $this->input->post('url'),	
																				'textoImagen'=> $this->input->post('textoImagen'),		
																				);
												$id_image = $this->input->post('id_images');

												$this->load->model('obras_model');
												$id_obra = $this->input->post('id_obra');
												$this->obras_model->update_obra($dataObra,$id_obra);
												$this->obras_model->update_image($dataImage,$id_image);

								}




				}
				public function viewObras(){

								$this->load->model('obras_model');
								$result =	$this->obras_model->load_obras();
								$data=$this->convert_to_simple_array($result);
								$int = sizeof($data);
								for ($i = 0; $i < $int; $i++) {
												$dat = $data[$i];		
												$id_obra = $dat['id_obra'];
												$imagen_obra= $this->get_obra_images($id_obra);
												foreach($imagen_obra as $images){
																foreach($images as $key => $value){
																				$data[$i][$key]=$value;
																}

												}
								}

								$dataArray['result']=$data;
								$this->load->view('obras/verObras',$dataArray);	

				}


				public function get_obra_images($id_obra){

								$this->load->model('obras_model');
								$result =	$this->obras_model->load_images_by_obra_id($id_obra);
								return $this->convert_to_simple_array($result);

				}
				public function convert_to_simple_array($result){

								$dataArray = Array();
								$cont = 0;
								foreach ($result as $key){
												$arrayAux=Array();
												foreach($key as $k => $v){
																$arrayAux[$k]=$v;
												}
												$dataArray[$cont]=$arrayAux;
												$cont++;
								}
								return $dataArray;


				}
}
?>