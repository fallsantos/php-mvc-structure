<?php


namespace App\controller\admin;


use Src\classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerAuth extends ClassRender implements InterfaceView
{
    public function __construct()
    {
        $this->setTitle("Autenticação");
        $this->setDescription("");
        $this->setKeyworks("");
        $this->setDirectory("admin/auth");
        
        $params = [
            'name' => 'Fall Santos'
        ];
        
        $this->renderLayout('login',$params);
    }

}