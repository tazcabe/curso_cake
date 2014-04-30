<?php 
	class StudentsController extends AppController{
		public $helers = array('Html','Form');
		public $components = array('Session');

		public function index(){
			$params = array('order'=>'name desc');
			$this->set('estudiantes',$this->Student->find('all', $params));
		}

		public function add(){
			if ($this ->request->is('post')):
				//Aqui inserta a los estudiantes
				if ($this->Student->save($this->request->data)):
					$this->Session->setFlash('Estudiante guardado');
					$this->redirect(array('action'=>'index'));
				endif;
			endif;
			
		}
	}
 ?>