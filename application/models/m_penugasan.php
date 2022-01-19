<?php

class M_penugasan extends CI_Model
{

    public function tampil_data()
    {
       $client = new GuzzleHttp\Client();

           $response = $client->request('GET','http://localhost:8888/dbiconplus_server/api/penugasan',[
               'auth' => ['admin', '1234'],
               ]);
         // echo $response->getBody()->getContents();
           $result = json_decode($response->getBody()->getContents(), true);
           return $result;
               
       }



    public function input_data($data, $table)
    {
         $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function detail_data($id = NULL){
        $query = $this->db->get_where('penugasan', array('id' => $id))->row();
        return $query;
    }

}