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
        $query = $this->db->query('SELECT DISTINCT eName FROM ICase');
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
    
    public function caseStatistics() {
        // Get problems by eCategory
        $query = $this->db->query('SELECT DISTINCT eCategory FROM ICase');
        $res = $query->result();
        $queryData['eCategories'] = $res;
        
        $i = 0;
        
        $problem_Array1 = NULL;
        while($i < count($res)) {
            $c = $res[$i]->eCategory;
            
            $query = $this->db->query('SELECT * FROM ICase WHERE eCategory = \''.$c.'\'');            
            $resTmp = $query->result();
            
            $j= 0;
            foreach($resTmp as $item) {
                $problem_Array1[$i][$j] = $item;
                $j = $j + 1;
            }
            
            $i = $i + 1;
        }
        $queryData['cByECategory'] = $problem_Array1;
        
        // Get Problems by eContact
        $query = $this->db->query('SELECT DISTINCT eContact FROM ICase');
        $res = $query->result();
        $queryData['eContact'] = $res;
        
        $i = 0;
        $problem_Array2 = NULL;
        while($i < count($res)) {
            $c = $res[$i]->eContact;
            $query = $this->db->query('SELECT * FROM ICase WHERE eContact = \''.$c.'\'');            
            $resTmp = $query->result();
            
            $j= 0;
            foreach($resTmp as $item) {
                $problem_Array2[$i][$j] = $item;
                $j = $j + 1;
            }
            $i = $i + 1;
        }
        
        $queryData['cByEContact'] = $problem_Array2;
        
        
        return $queryData;
    }
};
