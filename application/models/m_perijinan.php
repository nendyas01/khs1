<?php

class m_perijinan extends CI_Model
{

    public function perijinan()
    {
    }

    public function perijinan_add($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
