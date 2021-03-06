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
        // Get students by company
        $query = $this->db->query('SELECT DISTINCT company FROM Student');
        $res = $query->result();
        $queryData['companies'] = $res;
        
        $i = 0;
        
        while($i < count($res)) {
            $c = $res[$i]->company;
            
            $query = $this->db->query('SELECT * FROM Student WHERE company = \''.$c.'\'');            
            $resTmp = $query->result();
            
            $j= 0;
            foreach($resTmp as $item) {
                $problem_Array1[$i][$j] = $item;
                $j = $j + 1;
            }
            
            $i = $i + 1;
        }
        $queryData['sByCompany'] = $problem_Array1;
        
        // Get studetns by department
        $query = $this->db->query('SELECT DISTINCT department FROM Student');
        $res = $query->result();
        $queryData['departments'] = $res;
        
        $i = 0;
        while($i < count($res)) {
            $c = $res[$i]->department;
            $query = $this->db->query('SELECT * FROM Student WHERE department = \''.$c.'\'');            
            $resTmp = $query->result();
            
            $j= 0;
            foreach($resTmp as $item) {
                $problem_Array2[$i][$j] = $item;
                $j = $j + 1;
            }
            $i = $i + 1;
        }
        
        $queryData['sByDepartment'] = $problem_Array2;
        
        return $queryData;
    }
};
