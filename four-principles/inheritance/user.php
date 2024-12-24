<?php
include_once 'baseModel.php';
class User extends baseModel {
    protected $table = 'users';
    protected $primaryKey = 'id';

        public function __construct() {
        parent::__construct();
    }
}

$user = new User();
$userData = $user->find(1);
// $userData = $user->delete(2);
var_dump($userData);
