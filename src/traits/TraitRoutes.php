<?php

namespace Src\Traits;

trait TraitRoutes
{
    public function definedRoures()
    {
        return array(
            ""         => "site\ControllerHome",
            "home"     => "site\ControllerHome",
            "index"    => "site\ControllerHome",
            "sobre"    => "site\ControllerAbout",
            "contato"  => "site\ControllerContact",
            "sitemap"  => "site\ControllerSitemap",
            "send"     => "site\ControllerSend",
            "teste"    => "site\ControleTestando",

            "admin"    => "admin\ControllerAdmin",

            "auth"    => "admin\ControllerAuth"
        );
    }
}