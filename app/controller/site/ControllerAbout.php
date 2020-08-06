<?php
/**
 * User: FALL
 * Date: 21/09/2018
 * Time: 21:35
 */

namespace App\controller\Site;

use Src\classes\ClassRender;
use Src\interfaces\InterfaceView;

class ControllerAbout extends ClassRender implements InterfaceView
{
    public function __construct()
    {
        $this->setTitle("Sobre mim");
        $this->setDescription("Sobre mim.");
        $this->setKeyworks("Sobre, Sobre mim.");
        $this->setDirectory("site/about");

        $this->renderLayout('', ['title' => 'Sobre']);
    }
}