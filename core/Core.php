<?php

namespace core;
class Core
{
    public $moduleName;
    public $actionName;
    public $router;
    public $template;
    public $defaultLayoutPath = 'views/layouts/index.php';
    private static $instance;
    public $db;
    public Controller $controllerObject;
    public $session;
    private function __construct()
    {
        $this->template = new Template($this->defaultLayoutPath);
        $host = Config::get()->dbHost;
        $name = Config::get()->dbName;
        $login = Config::get()->dbLogin;
        $password = Config::get()->dbPassword;
        $this->db = new DB($host, $name, $login, $password);
        $this->session = new Session();
        session_start();
    }
    public function run($route)
    {
        $this->router = new Router($route);
        $params = $this->router->run();
        if(!empty($params))
            $this->template->setParams($params);
    }
    public function finish()
    {
        $this->router->finish();
        $this->template->display();
    }
    public static function get()
    {
        if(empty(self::$instance)) {
            self::$instance = new Core();
        }
        return self::$instance;
    }
}