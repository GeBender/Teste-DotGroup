<?php
/**
 * Teste DotGroup: Avaliação para Analista Desenvolvedor.
 *
 * PHP version 5.5.12
 *
 * @category  FizzBuzz
 * @package   Index
 * @author    GêBender <gesianbender@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: <git_id>
 * @link      http://www.gebender.com.br/teste-dot-group/fizz-buzz
 */
namespace FizzBuzz;

class FizzBuzz
{
    /**
     * Retorna os números enviados, trocando por "Fizz" os múltiplos de 3,
     * por "Buzz" os múltiplos de 5
     * e por "FizzBuzz" os múltiplos de 3 e 5.
     *
     * @param int $fizzBuzz
     * @return array
     */
    public function show($fizzBuzz)
    {
        $nFizzBuzz = array();
        for ($i = 1; $i <= 100; $i++) {
            $nFizzBuzz[] = $this->fizzBuzz($i);
        }

        return $nFizzBuzz;
    }


    /**
     * Verifica se retornará Fizz, Buzz, FizzBuzz ou o número
     *
     * @param int $i
     * @return string|int
     */
    public function fizzBuzz($i)
    {
        if($i % 3 === 0 && $i % 5 ==0){
            return "FizzBuzz";
        }
        else if($i % 3 === 0){
            return "Fizz";
        }
        else if($i % 5 === 0){
            return "Buzz";
        }
        else {
            return $i;
        }

    }
}
