<?php
namespace App\Controller;

use App\Controller\AppController;

class TasksController extends AppController
{
    public $paginate = [
        'page' => 1,
        'limit' => 10,
        'order' => array('priority' => 'ASC'),
        'maxLimit' => 100,
        'fields' => [
            'priority','id', 'title', 'description'
        ],
        'sortWhitelist' => [
            'priority','id', 'title', 'description'
        ]
    ];
}