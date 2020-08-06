<?php

namespace Src\suport;

use CoffeeCode\Optimizer\Optimizer;

class Seo
{
    protected $optimizer;

    public function __construct(string $schema = 'article')
    {
        $this->optimizer = new Optimizer();
        $this->optimizer->openGraph(// Principal padrão de otimização para redes sociais.
            SITE['name'],
            SITE['locale'],
            $schema
        )->publisher(
            'Fallsantosdev-102683498111476',
            'fallsantosdev'
        )->twitterCard(
            'fallsantos_dev',
            'fallsantos_dev',
            'fallsantosdev.com'
        )->facebook(
            '709786403148614'
        );
    }

    public function render(string $title, string $description, string $url, string $image, bool $follow = true): string
    {
        return $seo = $this->optimizer->optimize(
            $title,
            $description,
            $url,
            $image,
            $follow
        )->render();

        /*echo "<pre>";
        print_r($seo->debug());
        echo "</pre>";*/
    }
}
