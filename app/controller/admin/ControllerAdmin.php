<?php
/**
 * Created by PhpStorm.
 * User: FALL
 * Date: 13/08/2018
 * Time: 19:34
 */

namespace App\controller\Admin;

use Src\classes\ClassRender;
use Src\interfaces\InterfaceView;

class ControllerAdmin extends ClassRender implements InterfaceView
{
    public function __construct()
    {
        $this->setTitle("Página Administrativa");
        $this->setDescription("Página administrativa");
        $this->setKeyworks("ADM");
        $this->setDirectory("admin/admin");

        isAuth();
        
        $this->renderLayout(true);
    }

    public function trafego()
    {
        echo "Tráfego";
    }
}