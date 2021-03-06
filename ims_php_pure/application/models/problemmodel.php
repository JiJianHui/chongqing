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
        $query = $this->db->query('SELECT DISTINCT cName FROM Problem');
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
    
    public function problemStatistics() {
        // Get problems by pCategory
        $query = $this->db->query('SELECT DISTINCT pCategory FROM Problem');
        $res = $query->result();
        $queryData['pCategories'] = $res;
        
        $i = 0;
        
        while($i < count($res)) {
            $c = $res[$i]->pCategory;
            
            $query = $this->db->query('SELECT * FROM Problem WHERE pCategory = \''.$c.'\'');            
            $resTmp = $query->result();
            
            $j= 0;
            foreach($resTmp as $item) {
                $problem_Array1[$i][$j] = $item;
                $j = $j + 1;
            }
            
            $i = $i + 1;
        }
        $queryData['pByCategory'] = $problem_Array1;
        
        // Get Problems by cName
        $query = $this->db->query('SELECT DISTINCT cName FROM Problem');
        $res = $query->result();
        $queryData['cNames'] = $res;
        
        $i = 0;
        while($i < count($res)) {
            $c = $res[$i]->cName;
            $query = $this->db->query('SELECT * FROM Problem WHERE cName = \''.$c.'\'');            
            $resTmp = $query->result();
            
            $j= 0;
            foreach($resTmp as $item) {
                $problem_Array2[$i][$j] = $item;
                $j = $j + 1;
            }
            $i = $i + 1;
        }
        
        $queryData['pByCName'] = $problem_Array2;
        
        // Get Problems By eCategory
        $query = $this->db->query('SELECT DISTINCT eCategory FROM Problem');
        $res = $query->result();
        $queryData['eCategories'] = $res;
        
        $i = 0;
        
        while($i < count($res)) {
            $c = $res[$i]->eCategory;
            $query = $this->db->query('SELECT * FROM Problem WHERE eCategory = \''.$c.'\'');            
            $resTmp = $query->result();
            
            $j= 0;
            foreach($resTmp as $item) {
                $problem_Array3[$i][$j] = $item;
                $j = $j + 1;
            }
            
            $i = $i + 1;
        }
        $queryData['pByECategory'] = $problem_Array3;
        
        
        return $queryData;
    }
};
