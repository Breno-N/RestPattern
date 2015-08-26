<?php

class loginController extends baseController
{
        public function __construct() 
        {
                parent::__construct();
        }
        
        public function index()
        {
                try
                {
                        //$repository = $this->entityManager->getRepository('Usuarios');
                        //$users = $repository->findAll();
                        $user = $this->entityManager->find('Usuarios', 2);
                        $data = array('user' => $user->getNome(), 'pass' => $user->getIdade());
                        helpers::jsonResponse(0, 'Success', $data);

                } catch (Exception $ex) {
                        helpers::jsonResponse(1, 'Error: '.  $ex->getMessage(), NULL);
                }
        }

}