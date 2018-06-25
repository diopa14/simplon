<?php
class Client extends Controller
{
	public function __construct () 
	{
		parent::__construct();	
		require_once 'model/ClientDB.php'; //appeler le model

	}
	public function index ()
	{
		return $this->view->load('client/index');

	}
	public function add ()
	{
		$clientdb = new ClientDB(); // créer objet dans la classe
		$clientdb->add("Faye","Jean","Thies");
		return $this->view->load('client/add');

	}
	public function liste() //methode
	{
		$clientdb = new ClientDB();
		var_dump($clientdb->listenClient());
			
		return $this->view->load('client/liste'); // controller affiche la view

	}
}
?>