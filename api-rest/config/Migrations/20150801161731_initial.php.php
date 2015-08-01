<?php
use Phinx\Migration\AbstractMigration;

class Initial extends AbstractMigration
{

    public function up()
    {
        $table = $this->table('tasks');
        $table->addColumn('title', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false
        ])
            ->addColumn('description', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false
        ])
            ->addColumn('priority', 'integer', [
            'default' => '1',
            'limit' => null,
            'null' => false
        ])
            ->addColumn('created', 'datetime', [
            'default' => null,
            'limit' => null,
            'null' => true
        ])
            ->create();
        $this->execute(
            "INSERT INTO `tasks` VALUES " . "('1', 'FizzBuzz', 'Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima “Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos de ambos (3 e 5), imprima “FizzBuzz”.', '2', '2015-08-01 18:18:23')," .
                                            "('2', 'Refactor 1', 'Refatore o código abaixo, fazendo as alterações que julgar necessário. (...)', '3', '2015-08-01 18:18:23')," .
                                            "('3', 'Refactor 2', 'Refatore o código abaixo, fazendo as alterações que julgar necessário. (...)', '3', '2015-08-01 18:18:25')," .
                                            "('4', 'API Rest', 'Desenvolva uma API Rest para um sistema gerenciador de tarefas (inclusão/alteração/exclusão). As tarefas consistem em título e descrição, ordenadas por prioridade.', '1', '2015-08-01 18:18:30')");
    }

    public function down()
    {
        $this->dropTable('tasks');
    }
}