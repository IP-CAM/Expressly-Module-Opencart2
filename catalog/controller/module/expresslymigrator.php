<?php

/**
 * Expressly migrator for OpenCart
 * 
 * @author Expressly Limited
 *
 */
class ControllerModuleExpresslymigrator extends Controller {

	/**
	 * Index method
	 */
	public function index() {
		
	    $this->load->language('module/expresslymigrator');

	    $data['heading_title'] = $this->language->get('heading_title');
	    
	    if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/expresslymigrator.tpl')) {
	        return $this->load->view($this->config->get('config_template') . '/template/module/expresslymigrator.tpl', $data);
	    } else {
	        return $this->load->view('default/template/module/expresslymigrator.tpl', $data);
	    }
	}
}

?>