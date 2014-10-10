<?php
class ProblemModel extends CI_Model {        
    public function addProblem($record) {
        $this->db->insert('Problem', $record);
    }

    public function deleteProblem($pID) {
        $this->db->where('pID', $pID);
        $this->db->delete('Problem');
    }    
    
    public function modifyProblem($record, $pID) {
        $this->db->where('pID', $pID);
        $this->db->update('Problem', $record);
    }
    
    public function getProblem() {
        $query = $this->db->get('Problem');
        
        return $query->result();
    }
    
    public function getQueryData() {
        $query = $this->db->query('SELECT DISTINCT pName FROM Problem');
        $queryData['queryPName'] = $query->result();
        $query = $this->db->query('SELECT DISTINCT eName FROM Problem');
        $queryData['queryEName'] = $query->result();
        $query = $this->db->query('SELECT DISTINCT pCategory FROM Problem');
        $queryData['queryCategory'] = $query->result();
        $query = $this->db->query('SELECT DISTINCT contactName FROM Problem');
        $queryData['queryCName'] = $query->result();
         
        return $queryData; 
    } 
    
    public function selectProblem($pID) {
        $query = $this->db->query('SELECT * FROM Problem WHERE pID = \''.$pID.'\'');
        
        return $query->result();  
    }
    
    
    public function selectProblemByEName($eName) {
        $query = $this->db->query('SELECT * FROM Problem WHERE eName = \''.$eName.'\'');
        
        return $query->result();  
    }
    
    public function selectProblemByPCategory($pCategory) {
        $query = $this->db->query('SELECT * FROM Problem WHERE pCategory = \''.$pCategory.'\'');
        
        return $query->result();  
    }
    
    public function selectProblemByContactName($contactName) {
        $query = $this->db->query('SELECT * FROM Problem WHERE pID = \''.$contactName.'\'');
        
        return $query->result();  
    }
};
