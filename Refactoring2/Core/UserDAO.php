<?php
/**
 * Teste DotGroup: Avaliação para Analista Desenvolvedor.
 *
 * PHP version 5.5.12
 *
 * @category  Refactoring2
 * @package   Core
 * @author    GêBender <gesianbender@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: <git_id>
 * @link      http://www.gebender.com.br/teste-dot-group/fizz-buzz
 */
namespace Refactoring2;

require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Connection.php';

class UserDAO
{

    private $conn;

    /**
     * Carrega variaveis de configuração
     */
    public function __construct()
    {
        $Connection = new Connection();
        $this->conn = $Connection->newConnection();

    }


    /**
     * Retorna lista de usuários
     */
    public function getUsers()
    {
        $sql = 'SELECT name FROM user ORDER BY name';
        $statement = $this->conn->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_COLUMN, 0);

    }
}
