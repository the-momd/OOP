<?php
include_once 'baseModel.php';
class Task extends baseModel {
    protected $table = 'tasks';
    protected $primaryKey = 'id';

        public function __construct() {
        parent::__construct();
    }
}

$taskModel = new Task;
$data = $taskModel->find(1);
var_dump($data);
