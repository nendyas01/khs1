<?php

class m_perijinan_add extends CI_Model
{


    public function perijinan_add($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
