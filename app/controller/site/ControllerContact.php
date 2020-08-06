<?php
/**
 * User: FALL
 * Date: 21/09/2018
 * Time: 21:29
 */

namespace App\controller\Site;

use Src\classes\ClassRender;
use Src\interfaces\InterfaceView;

class ControllerContact extends ClassRender implements InterfaceView
{
    public function __construct()
    {
        $this->setTitle("Contato");
        $this->setDescription("Entre em contato.");
        $this->setKeyworks("MVC, contato, entre em contato, contate-nos");
        $this->setDirectory("site/contact");

        $this->renderLayout();
    }

    public function teste()
    {
        echo "Método de teste!";
    }
}