<?php

namespace Src\Traits;

trait TraitUrlParser{
    public function parseUrl($param = null): array
    {   // o que vai dividir o array, rtrim() para tirar os espaços, Get do .htacces
        $url = explode("/", rtrim($_GET['url'], FILTER_SANITIZE_URL));

        return ($param == null) ? $url : $url[$param];
    }
}
