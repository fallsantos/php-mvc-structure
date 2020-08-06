<?php
/**
 * User: Fall
 * Date: 11/07/2018
 * Time: 16:26
 *
 * Arquivo despachante.
 */

namespace App; // namespace

use Src\classes\ClassRoutes;

class Dispatch extends ClassRoutes
{
    # ----- Atributos -----
    private $method;
    private $param = [];
    private $object;
    #----------------------
    private $init;
    private $url;
    private $dir = null;
    private $count;
    private $file;
    private $page;
    #----------------------

    #----------     Método construtor.  ---------------------------------
    public function __construct()
    {
        self::addController();// Vai direcionar para o addController. ↓ lá em baixo.
    }   
    //-------------------------------------------------------------------
    protected function getMethod(): string
    {# protected só para as classes que estenderem poderem retornar seu valor
        return $this->method;
    }
    public function setMethod($method): void
    {
        $this->method = $method;
    }

    protected function getParam(): array
    {
        return $this->param;
    }
    public function setParam($param): void
    {
        $this->param = $param;
    }

    # Método de adição de controller
    private function addController(): void
    {    // ↓↓↓ rotaController vai receber a getRoute(), que é uma requisição do usuário: herdado da ClassRoutes
        $rotaController = $this->getRoute();// >>↓↓
        $nameSpace = "App\\controller\\{$rotaController}";// pega o namespace dos controller
        $this->object = new $nameSpace;// <- Criou um objeto >>↓↓↓
        # ↑↑↑ Exemplo: object = new App\Controller\ControllerSolicitado* "Vai receber um instância do controller solicitado criando um objeto controller"

        # Chama o addMethod
        if(isset($this->parseUrl()[1])){// Se exixtir algo na posição [1] da url(porque a posição[0] já é o controller)
            self::addMethod();// Chama o addMethod, que vai verificar se é um método ou não.
        }
    }

    # Método de adição do métodos(funções) dos controllers
    private function addMethod()
    {              //    ↓↓ se dentro desse objeto ↓↓ existir este método*
        if(method_exists($this->object, $this->parseUrl()[1])){// Verifica se existe o método no objeto => method_exists(objeto(do controller), método) host/[0] => controller/[1] => objeto
                                                        # ↑↑ A posição 2 da url, exemplo: home/teste, 'teste'* onde "home" é o controller e "teste" é o método.
            $this->setMethod("{$this->parseUrl()[1]}");
            // $method = testeMetodo         ↑↑↑
            self::addParam();#Retorno do método setado acima ↓↓
            call_user_func_array([$this->object,$this->getMethod()],$this->getParam());
        }
    }

    # Método de adição de parâmetros dos métodos dos controller ↑↑↑
    private function addParam()
    {
        $arrayCount = count($this->parseUrl());// Vai contar quantos elementos tem o nosso array"url"

        if($arrayCount > 2){// Se for maior que 2 do 3 em diante são parâmetro
            foreach ($this->parseUrl() as $key => $value){
                if($key > 1){
                    $this->setParam($this->param += [$key => $value]);
                }
            }
        }
    }

}