<?php
class Recruiter_m extends CI_Model
{
    public function viewall($name)
    {
        $this->db->where('Posted_By', $name);
        $query = $this->db->get('Job');
        return $query->result();
    }
    public function applications($id)
    {
        $this->db->where('Job', $id);
        $query  = $this->db->get('applications');
        $result = $query->result_array();
        if ($query->num_rows() > 0) {
            foreach ($result as $row) {
                $this->db->or_where('id =', $row["Seeker"]);
            }
            $query2  = $this->db->get('applicant');
            $result2 = $query2->result();
            return $result2;
        } else {
            return null;
        }
    }

    
    public function createJob($position, $description, $posted_by, $salary)
    {
        $data = array(
            'Title ' => $position,
            'Description ' => $description,
            'Posted_By' => $posted_by,
            'salary' => $salary
        );
        $this->db->insert('Job', $data);
        return "true";
    }
    public function getName($id)
    {
        $this->db->select('Posted_By');
        $this->db->where('id', $id);
        $query  = $this->db->get('Job');
        $result = $query->result();
        return $result;
    }
}
?>
