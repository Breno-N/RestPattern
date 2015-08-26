<?php

class userController extends baseController
{
        private $user;
        
        public function __construct() 
        {
            parent::__construct();
            $this->user = new Usuarios();
        }
        
        public function index()
        {
                $results[] = array('name' => 'listagem de Usuarios', 'endpoint' => 'users'); 
                //$u = new Usuarios();
                //$u->setNome('teste');
                //$u->setIdade(27);
                //$this->entityManager->persist($u);
                //$this->entityManager->flush();
                //$results = $u->getId();
                //helpers::jsonResponse(NULL, 'result', $results);
                $results = $u->getId();
                helpers::jsonResponse(NULL, 'result', $results);
        }
}
