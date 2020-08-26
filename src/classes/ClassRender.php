<?php
/**
 * User: Fall
 * Date: 19/07/2018
 * Time: 21:59
 *
 * Classe responsáve pela renderização do layout.
 */

namespace Src\classes;


class ClassRender
{
    # Propriedades
    private $directory;
    private $title;
    private $description;
    private $keyworks;

    public function getDirectory()
    {
        return $this->directory;
    }
    public function setDirectory($directory)
    {
        $this->directory = $directory;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getKeyworks()
    {
        return $this->keyworks;
    }
    public function setKeyworks($keyworks)
    {
        $this->keyworks = $keyworks;
    }

    # Método responsável por renderizar todoo o layout
    public function renderLayout(string $layout = null, array $params = null)
    {
        $p = $params;
        switch ($layout) {
            case 'admin':
                include_once (SITE['root'] . "/app/view/admin.php");
                break;
            case 'login':
                include_once (SITE['root'] . "/app/view/login.php");
                break;
            case 'error':
                include_once (SITE['root'] . "/app/view/error.php");
                break;
            default:
                include_once (SITE['root'] . "/app/view/default.php");
        }
    }

    # Adiciona caracteristicas específicas no head
    public function addHead($params = null)
    {   
        $p = $params;
        // Se o arquivo existir, ele vai incluir.
        if(file_exists(SITE['root'] . "/app/view/{$this->getDirectory()}/head.php")){
            include_once (SITE['root'] . "/app/view/{$this->getDirectory()}/head.php");
        }
    }

    public function addHeader($params = null)
    {
        $p = $params;
        if(file_exists(SITE['root'] . "/app/view/{$this->getDirectory()}/header.php")){
            include_once SITE['root'] . "/app/view/{$this->getDirectory()}/header.php";
        }
    }

    # Adiciona caracteristicas específicas no main
    public function addMain($params = null)
    {
        $p = $params;
        if(file_exists(SITE['root'] . "/app/view/{$this->getDirectory()}/main.php")){
            include (SITE['root'] . "/app/view/{$this->getDirectory()}/main.php");
        }
    }

    # Adiciona caracteristicas específicas no footer
    public function addFooter($params = null)
    {
        $p = $params;
        if(file_exists(SITE['root'] . "/app/view/{$this->getDirectory()}/footer.php")){
            include_once (SITE['root'] . "/app/view/{$this->getDirectory()}/footer.php");
        }
    }
}