<?php

class M_Attachment extends CI_Model {

    var $table;

    function __construct() {
        parent::__construct();
        $this->table = "attachment";
    }

    function get_attachments($status='published', $year = '', $month = '') {
        
        $year = $year ? $year : date('Y');
        $month = $month ? $month : date('m');
        $this->db->select("attachment.id_attach,attachment.name,attachment.file,attachment.type,attachment.caption,attachment.description,attachment.alternate,attachment.date,attachment.status");
        $this->db->where('YEAR(date)',$year);
        $this->db->where('MONTH(date)',$month);
        $this->db->where('status',$status);
        $this->db->from($this->table);
        $this->db->order_by('id_attach','desc');
        $result = $this->db->get();
        if ($result->num_rows() > 0):
            return $result->result();
        endif;
    }

    function get_year_month(){
        $this->db->select('MONTH(date) as month, YEAR(date) as year');
        $this->db->from($this->table);
        $this->db->where('status','published');
        $this->db->group_by('YEAR(date),MONTH(date)');
        $this->db->order_by('MONTH(date)','desc');
        return $this->db->get();
    }
    function get_attachment($id = "") {
        $this->db->select("attachment.id_attach,attachment.name,attachment.file,attachment.type,attachment.caption,attachment.description,attachment.alternate,attachment.date,attachment.status");
        $this->db->from($this->table);
        $this->db->where("id_attach", $id);
        $result = $this->db->get();
        if ($result->num_rows() == 1):
            return $result->row();
        endif;
    }

    function add_attachment($data) {
        $insert = $this->db->insert($this->table, $data);
        if ($insert) :
            return $this->db->insert_id();
        endif;
    }

    function edit_attachment($id, $data) {
        $this->db->where("id_attach", $id);
        $update = $this->db->update($this->table, $data);
        if ($update) :
            return true;
        endif;
    }
    

}

?>
