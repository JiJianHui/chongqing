<?php
class casemodel extends CI_Model {
    public function addCase($record) {
        $this->db->insert('ICase', $record);
    }

    public function deleteCase($cID) {
        $this->db->where('cID', $cID);
        $this->db->delete('ICase');
    }    
    
    public function modifyCase($record, $cID) {
        $this->db->where('cID', $cID);
        $this->db->update('ICase', $record);
    }
    
    public function getCase() {
        $query = $this->db->get('ICase');
        
        return $query->result();
    }
    
    public function selectCase($cID) {
        $query = $this->db->query('SELECT * FROM ICase WHERE cID = \''.$cID.'\'');
        
        return $query->result();  
    }
    
    public function getQueryData() {
        $query = $this->db->query('SELECT DISTINCT department FROM ICase');
        $queryData['queryDepartment'] = $query->result();
        /*$query = $this->db->query('SELECT DISTINCT eName FROM Problem');
        $queryData['queryEName'] = $query->result();
        $query = $this->db->query('SELECT DISTINCT pCategory FROM Problem');
        $queryData['queryCategory'] = $query->result();
        $query = $this->db->query('SELECT DISTINCT contactName FROM Problem');
        $queryData['queryCName'] = $query->result();
        */
        
        return $queryData; 
    } 
    
    public function selectCaseByDepartment($department) {
        $query = $this->db->query('SELECT * FROM ICase WHERE department = \''.$department.'\'');
        
        return $query->result();  
    }
};
