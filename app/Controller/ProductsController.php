<?php
	class ProductsController extends AppController{
		public $helpers = array('Html','Form');
		public $components = array('Session');
		
		public function index(){
			
		}
		public function add (){
			if($this->request->is('post')):
				if($this->Product->save($this->data)):
					$this->Session->setFlash('Producto Guardado');
					$this->redirect(array('action'=>'index'));
				endif;
			endif;
		}
	}
	