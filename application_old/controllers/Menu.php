<?php
/**
 * 
 */
class Menu extends CI_Controller{
	
	function __construct(){
		$this->load->model('menu_model', 'menu');
	}
}