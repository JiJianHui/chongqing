<?php
class StudentModel extends CI_Model {
    public function addStudent($record) {
        $this->db->insert('Student', $record);
    }

    public function deleteStudent($sID) {
        $this->db->where('sID', $sID);
        $this->db->delete('Student');
    }    
    
    public function modifyStudent($record, $sID) {
        $this->db->where('sID', $sID);
        $this->db->update('Student', $record);
    }
    
    public function getStudent() {
        $query = $this->db->get('Student');
        
        return $query->result();
    }
    
    public function selectStudent($sID) {
        $query = $this->db->query('SELECT * FROM Student WHERE sID = \''.$sID.'\'');
        
        return $query->result();  
    }
    
    public function getQueryData() {
        $query = $this->db->query('SELECT DISTINCT company FROM Student');
        $queryData['queryCompany'] = $query->result();
        $query = $this->db->query('SELECT DISTINCT sName FROM Student');
        $queryData['querySName'] = $query->result();
        
        return $queryData; 
    } 
    
    public function selectStudentByCompany($company) {
        $query = $this->db->query('SELECT * FROM Student WHERE company = \''.$company.'\'');
        
        return $query->result();  
    }
    
    public function selectStudentBySName($sName) {
        $query = $this->db->query('SELECT * FROM Student WHERE sName = \''.$sName.'\'');
        
        return $query->result();  
    }
    
    public function studentStatistics() {
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
