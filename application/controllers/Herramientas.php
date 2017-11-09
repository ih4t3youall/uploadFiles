
<?php 


class Obras extends CI_Controller {
				public function __construct(){
								parent::__construct();
				}

				public function index(){

								$this->load->view('herramientas/mainForm');

				}
				public function submitForm(){

								$this->form_validation->set_rules('nombre', 'Nombre', 'required');
								$this->form_validation->set_rules('textoHerramienta', 'Texto herramienta', 'required');

								if ($this->form_validation->run() == FALSE)
								{
												$this->load->view('obras/MainForm');
								}
								else
								{
												echo 'you made it!';
							}



				}


}
?>