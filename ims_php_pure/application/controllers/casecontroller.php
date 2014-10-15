<?php
class CaseController extends CI_Controller {
    public function addCase() {
        $isFirst = $this->input->get('isFirst', true);
        
        if(empty($isFirst) == FALSE) {
            $this->load->view('www/page/case_Add');
        } else {
            /*$department = $_POST['department'];
            $sector = $_POST['sector'];
            $category = $_POST['category'];
            $mobilePhone = $_POST['mobilePhone'];
            $faxNumber = $_POST['faxNumber'];                        
            $eMail = $_POST['eMail'];
            $qq = $_POST['qq'];*/
            $title = $_POST['title'];
            $abstract = $_POST['abstract'];
            $description = $_POST['description'];
            $course = $_POST['course'];
            $cSolution = $_POST['cSolution'];
            $sEmployed = $_POST['sEmployed'];
            $sImplementation = $_POST['sImplementation'];
 
            $record = array(
                /*'department' => $department,
                'sector' => $sector,
                'category' => $category,
                'mobilePhone' => $mobilePhone,
                'faxNumber' => $faxNumber,
                'eMail' => $eMail,
                'qq' => $qq,*/
                'title' => $title,
                'abstract' => $abstract,
                'description' => $description,
                'course' => $course,
                'cSolution' => $cSolution,
                'sEmployed' => $sEmployed,
                'sImplementation' => $sImplementation,
            );
            
            $this->load->model('casemodel');
            $this->casemodel->addCase($record);
            $data['records'] = $this->casemodel->getCase();
            $data['queryData'] = $this->casemodel->getQueryData();
            $this->load->view('www/page/case', $data);
        }
    }

    public function deleteCase() {
        $this->load->model('casemodel');
        $cID = $this->input->get('cID', true);
        
        $this->casemodel->deleteCase($cID);
        $data['records'] = $this->casemodel->getCase();
        
        $this->load->view('www/page/case', $data);  
    }    
    
    public function loadCase() {
        $this->load->model('casemodel');
        $cID = $this->input->get('cID', true);
        
        $data['records'] = $this->casemodel->selectCase($cID);
        /*Modified Modified */
        $this->load->view('www/page/case_Modify', $data); 
    }
    
    public function modifyCase() {
        $sID = $_POST['cID'];
        
        $department = $_POST['department']; 
        $sector = $_POST['sector'];
        $category = $_POST['category'];
        $mobilePhone = $_POST['mobilePhone'];
        $faxNumber = $_POST['faxNumber'];                        
        $eMail = $_POST['eMail'];
        $qq = $_POST['qq'];
        $title = $_POST['title'];
        $abstract = $_POST['abstract'];
        $description = $_POST['description'];
        $course = $_POST['course'];
        $cSolution = $_POST['cSolution'];
        $sEmployed = $_POST['sEmployed'];
        $sImplementation = $_POST['sImplementation'];

        $record = array(
            'department' => $department,
            'sector' => $sector,
            'category' => $category,
            'mobilePhone' => $mobilePhone,
            'faxNumber' => $faxNumber,
            'eMail' => $eMail,
            'qq' => $qq,
            'title' => $title,
            'abstract' => $abstract,
            'description' => $description,
            'course' => $course,
            'cSolution' => $cSolution,
            'sEmployed' => $sEmployed,
            'sImplementation' => $sImplementation,
        );

        $this->load->model('casemodel');
        $this->casemodel->modifyCase($record, $cID);
        $data['records'] = $this->casemodel->getCase();
        $data['queryData'] = $this->casemodel->getQueryData();
        $this->load->view('www/page/case', $data);
    }
    
    public function exportCase() {
        $this->load->model('casemodel');
        $sID = $this->input->get('cID', true);
        
        $data['records'] = $this->casemodel->selectCase($cID);
        
        $this->load->view('case_Export', $data);
    }
    
    public function pdf()
    {
        $this->load->helper(array('dompdf', 'file'));
        $this->load->model('casemodel');
        $sID = $this->input->get('sID', true);
        $data['records'] = $this->casemodel->selectCase($sID);
        
        // page info here, db calls, etc.     
        $html = $this->load->view('case_Export2pdf', $data, true);
        pdf_create($html, 'filename');  
    }
    
    public function getCase() {
        $this->load->model('casemodel');
        $data['records'] = $this->casemodel->getCase();
        $data['queryData'] = $this->casemodel->getQueryData();
        
        $this->load->view('www/page/case', $data);
    }
    
    public function selectCaseByDepartment() {
        $department = $_POST['queryDepartment'];
        $this->load->model('casemodel');
        $data['records'] = $this->casemodel->selectCaseByDepartment($department);
        $data['queryData'] = $this->casemodel->getQueryData();
        
        $this->load->view('www/page/case', $data);
    }
};
