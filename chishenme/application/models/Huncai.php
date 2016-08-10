<?php

class Application_Model_Huncai extends Zend_Db_Table_Abstract
{

    protected $_primary = "id";
    
    protected $_name = "huncai";
     
    protected $_id;
    
    public function __construct ()
    {
        parent::__construct();
    }

    public function get_list()
    {
        $select = $this->select();
        $select->from($this->_name);
        $result = $this->fetchAll($select);
        if ($result) {
            $result = $result->toArray();
        }
        return $result;
    }
    
    public function insert_record($data)
    {
        return $this->insert($data);
    }
    
    public function update_record($data, $id)
    {
        $db = $this->getDefaultAdapter();
        $where = $db->quoteInto("id = ?", $id);
        return $this->update($data, $where);
    }

}
