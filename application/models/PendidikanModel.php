<?php

class PendidikanModel extends CI_Model
{
    public function get_all_data_pendidikan()
    {
        $query = "SELECT * FROM pendidikan";
        return $this->db->query($query)->result_array();
    }

    function pendidikan_get_list($where = null)
	{
		if ($where) {
			$this->db->where($where);
		}
		$q = $this->db->get('pendidikan');
		return $result = $q->num_rows() > 0 ? $q->result_array() : array();
	}
}
