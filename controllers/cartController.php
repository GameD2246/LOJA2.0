<?php
class cartController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $store = new Store();
        $products = new Products();
        
        $dados = $store->getTemplateData();
        
        
        $this->loadTemplate('cart', $dados);
    }

}