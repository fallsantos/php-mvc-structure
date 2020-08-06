<?php
/**
 * User: Fall
 * Date: 04/07/2018
 * Time: 19:50
 *
 * Caminhos absolutos e relativos.
 */

# Arquivos diretórios raizes
$internalFolder="php-mvc-structure";

$prootocol = "http";

define('SITE', [
    'name'        => 'MVC Structure',
    'description' => 'Flávio Santos - Desenvolvedor fullstack.',
    'locale'      => 'pt_br',
    'url'         => "{$prootocol}://{$_SERVER['HTTP_HOST']}" . ($internalFolder ? '/' . $internalFolder : ''),
    'assets'      => "{$prootocol}://{$_SERVER['HTTP_HOST']}" . ($internalFolder ? '/' . $internalFolder : '') . '/assets',
    'root'        => ( substr($_SERVER['DOCUMENT_ROOT'],-1) == '/' )
        ? "{$_SERVER['DOCUMENT_ROOT']}{$internalFolder}"
        : "{$_SERVER['DOCUMENT_ROOT']}/{$internalFolder}"
]);

# Diretórios específios/atalhos
define('RESOURSE', [
    'image' => SITE['url'] . '/public/resources/img',
    'css'   => SITE['url'] . '/public/resources/css',
    'js'    => SITE['url'] . '/public/resources/js',
    'lib'   => SITE['url'] . '/public/resources/lib'
]);

# Acesso ao banco de dados
define('DATABASE', [
    'host'   => 'localhost',
    'name' => 'dev_db',
    'user'   => 'root',
    'pass'   => '',
    'options' => [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,# Feedback de erros
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

# Sentry - monitoramento de erros
define('SENTRY_DSN', '');
