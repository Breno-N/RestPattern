<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

use Slim\Slim as Slim;

class baseController
{
        public $app;
        
        protected $auth = FALSE;
        
        protected $entityManager;
        
        public function __construct()
        {
                //Pegando instancia de Slim
                $this->app = Slim::getInstance();

                //Defina o caminho que irão ficar as entidades do projeto dentro da pasta de Doctryne
                $entidades = array('Models/');
                $isDevMode = true;

                // configurações de conexão
                $dbParams = array(
                    'driver'   => 'pdo_mysql',
                    'user'     => 'root',
                    'password' => '',
                    'dbname'   => 'doctrine',
                );

                //setando as configurações definidas anteriormente
                $config = Setup::createAnnotationMetadataConfiguration($entidades, $isDevMode);

                //criando o Entity Manager com base nas configurações de dev e banco de dados
                $this->entityManager = EntityManager::create($dbParams, $config);
        }
        
        public function is_auth($token = NULL)
        {
                if(!isset($token) || empty($token)) throw new Exception('Erro de autenticação. - 1');

                $crypt = '08hYsfTbO254197';
                
                if($token != $crypt) throw new Exception('Erro de autenticação. - 2');
                
                $this->auth = TRUE;
        }
        
        public function get_request_body()
        {
                return json_decode($this->app->request->getBody());
        }
}