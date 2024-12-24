<?php
include_once 'baseModel.php';
class Article extends baseModel {
    protected $table = 'articles';

        public function __construct() {
        parent::__construct();
    }

    public function mustCommentedArticles(){
        // get most commented articles from database
    }
}

