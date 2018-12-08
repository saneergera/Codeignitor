<?php
class Seeker_m extends CI_Model
{
    public function getJobs($id)
    {
        $this->db->where('Seeker', $id);
        $query  = $this->db->get('applications');
        $result = $query->result_array();


          foreach ($result as $row) {
              $this->db->where('id !=', $row["Job"]);
          }
          $query2  = $this->db->get('Job');
          $result2 = $query2->result();
          return $result2;


      
    }
    public function allJobs($id)
    {
        $this->db->where('Seeker', $id);
        $query  = $this->db->get('applications');
        $result = $query->result_array();
        foreach ($result as $row) {
            $this->db->or_where('id =', $row["Job"]);
        }
        $query2  = $this->db->get('Job');
        $result2 = $query2->result();
        return $result2;
    }

    public function apply($job,$seeker){

      $data = array(
        'Job' => $job,
        'Seeker' => $seeker);
        $this->db->insert('applications', $data);
        return "done";
    }
}
?>
