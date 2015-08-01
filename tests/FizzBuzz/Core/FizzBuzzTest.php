<?php
/**
 * Teste DotGroup: Avaliação para Analista Desenvolvedor.
 *
 * PHP version 5.5.12
 *
 * @category  FizzBuzz
 * @package   Test
 * @author    GêBender <gesianbender@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: <git_id>
 * @link      http://www.gebender.com.br/teste-dot-group/fizz-buzz
 */
namespace FizzBuzz;

header('Content-Type: text/html; charset=utf-8');
$DS = DIRECTORY_SEPARATOR;
$dirname = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = require $dirname . $DS . 'FizzBuzz' . $DS . 'Core' . $DS .  'FizzBuzz.php';

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    public $testClass;

    public function setUp()
    {
        $this->testClass = new FizzBuzz();
    }

    public function testShowDeveSerArray()
    {
        $actual = $this->testClass->show(100);
        $this->assertInternalType('array', $actual);
    }


    public function testRetornaFizzParaMultiplosDeTres()
    {
        $expected = 'Fizz';

        $actual = $this->testClass->fizzBuzz(3);
        $this->assertEquals($expected, $actual);
    }

    public function testRetornaBuzzParaMultiplosDeCinco()
    {
        $expected = 'Buzz';

        $actual = $this->testClass->fizzBuzz(5);
        $this->assertEquals($expected, $actual);
    }


    public function testRetornaFizzBuzzParaMultiplosDeTresECinco()
    {
        $expected = 'FizzBuzz';

        $actual = $this->testClass->fizzBuzz(15);
        $this->assertEquals($expected, $actual);
    }


    public function testRetornaOProprioNumeroParaNaoMultiplosDe3e5()
    {
        $expected = 1;

        $actual = $this->testClass->fizzBuzz(1);
        $this->assertEquals($expected, $actual);
    }

}
