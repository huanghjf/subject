<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_user_comment extends MY_Model {

    private $_table = 't_user_comment';

    public function __construct() {
        parent::__construct($this->_table);
    }

}