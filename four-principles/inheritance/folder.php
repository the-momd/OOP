<?php
include_once 'baseModel.php';
class Folder extends baseModel {
    protected $table = 'folders';
    protected $primaryKey = 'id';

        public function __construct() {
        parent::__construct();
    }
}

$folderModel = new Folder;
$data = $folderModel->find(1);
var_dump($data);
