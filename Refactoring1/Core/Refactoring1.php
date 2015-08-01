<?php
/**
 * Teste DotGroup: Avaliação para Analista Desenvolvedor.
 *
 * PHP version 5.5.12
 *
 * @category  Refactoring1
 * @package   Core
 * @author    GêBender <gesianbender@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: <git_id>
 * @link      http://www.gebender.com.br/teste-dot-group/fizz-buzz
 */
namespace Refactoring1;

class Refactoring1
{

    public $loginVar = 'loggedin';
    public $destino = 'http://www.google.com';

    /**
     * Verifica se usuário está login
     */
    public function isLogged()
    {
        try {
            if ($this->checkLogin() === true) {
                $this->redirect();
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }


    /**
     * Faz a checagens necessárias para verificar login do usuário
     *
     * @return bool;
     */
    public function checkLogin()
    {
        if ($this->checkLoginSession() === true || $this->checkLoginCookie() === true) {
            return true;
        } else {
            throw new \Exception('Not logged in. No Google for You :(');
        }

    }


    public function checkLoginSession()
    {
        session_start();
        if (isset($_SESSION[$this->loginVar]) === true) {
            return (bool) $_SESSION[$this->loginVar];
        }
    }


    public function checkLoginCookie()
    {
        if (isset($_COOKIE[$this->loginVar]) === true) {
            return (bool) $_COOKIE[$this->loginVar];
        }
    }


    /**
     * Redireiciona quando estiver logado
     */
    public function redirect()
    {
        header("Location: " . $this->destino);
        exit();

    }
}
