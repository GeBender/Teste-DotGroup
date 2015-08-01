<?php
/**
 * Teste DotGroup: Avaliação para Analista Desenvolvedor.
 *
 * PHP version 5.5.12
 *
 * @category  Refactoring2
 * @package   Index
 * @author    GêBender <gesianbender@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: <git_id>
 * @link      http://www.gebender.com.br/teste-dot-group/fizz-buzz
 */
namespace Refactoring2;

require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Core' . DIRECTORY_SEPARATOR . 'MyUserClass.php';

$MyUserClass = new MyUserClass();
$usuarios = $MyUserClass->getUserList();

var_dump($usuarios);
