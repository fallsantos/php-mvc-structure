<?php
/**
 * User: Fall
 * Date: 11/07/2018
 * Time: 17:23
 */

namespace App\controller\Site;

use Src\suport\Seo;
use Src\classes\ClassConnection;
use Src\classes\ClassRender;// <- A classe de renderização do layout
use Src\interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView
{
    private $seo;

    public function __construct()
    {
        $this->setTitle("Flávio Santos");
        $this->setDescription("Desenvolvedor full stack.");
        $this->setKeyworks("desenvolvedor, developer, programador, programmer");
        $this->setDirectory("site/home");

        $seo = (new Seo())->render(
             SITE['name'],
             SITE['description'],
             SITE['url'],
            'https://via.placeholder.com/1200x628.png?text=fallsantosdev'
        );
        
        $params = [
            'seo' => $seo,
            'title' => 'MVC Structure'
        ];
        
        //$conn = new ClassConnection();
        //echo  SITE['assets'];
        //print_r($conn->connect_db());
        $this->renderLayout('',$params);
    }

}