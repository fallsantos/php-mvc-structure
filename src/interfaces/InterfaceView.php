<?php
/**
 * User: Fall
 * Date: 19/07/2018
 * Time: 22:15
 */

namespace Src\Interfaces;

interface InterfaceView
{
    public function setDirectory($directory);

    public function setTitle($title);

    public function setDescription($description);

    public function setKeyworks($keyworks);
}