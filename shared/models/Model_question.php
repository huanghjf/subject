<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_question extends MY_Model {

    private $_table = 't_question';

    public function __construct() {
        parent::__construct($this->_table);
    }

}