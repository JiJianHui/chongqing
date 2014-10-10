<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class StudentController extends CI_Controller {
    public function addStudent() {
        $isFirst = $this->input->get('isFirst', true);
        
        if(empty($isFirst) == FALSE) {
            $this->load->view('student_Add');
        } else {
            $sName = $_POST['sName'];
            $sSex = $_POST['sSex'];
            $startWorkTime = $_POST['startWorkTime'];
            $birthday = $_POST['birthday'];
            $cMajor = $_POST['cMajor'];                        
            $eTitle = $_POST['eTitle'];
            $company = $_POST['company'];
            $department = $_POST['department'];
            $telePhone = $_POST['telePhone'];
            $mobilePhone = $_POST['mobilePhone'];
            $eMail = $_POST['eMail'];
            $qq = $_POST['qq'];
            $address = $_POST['address'];
            $education = $_POST['education'];
            $gSchool = $_POST['graduateSchool'];
            $major = $_POST['major'];
 
            $record = array(
                'sName' => $sName,
                'sSex' => $sSex,
                'startWorkTime' => $startWorkTime,
                'birthday' => $birthday,
                'cMajor' => $cMajor,
                'eTitle' => $eTitle,
                'company' => $company,
                'department' => $department,
                'telePhone' => $telePhone,
                'mobilePhone' => $mobilePhone,
                'eMail' => $eMail,
                'qq' => $qq,
                'address' => $address,
                'education' => $education,
                'gSchool' => $gSchool,
                'major' => $major,
            );
            
            $this->load->model('studentmodel');
            $this->studentmodel->addStudent($record);
            $data['records'] = $this->studentmodel->getStudent();
            $this->load->view('student', $data);
        }
    }

    public function deleteStudent() {
        $this->load->model('studentmodel');
        $sID = $this->input->get('sID', true);
        
        $this->studentmodel->deleteStudent($sID);
        $data['records'] = $this->studentmodel->getStudent();
        
        $this->load->view('student', $data);  
    }    
    
    public function loadStudent() {
        $this->load->model('studentmodel');
        $sID = $this->input->get('sID', true);
        
        $data['records'] = $this->studentmodel->selectStudent($sID);
        
        $this->load->view('student_Modify', $data); 
    }
    
    public function modifyStudent() {
        $sID = $_POST['sID'];
        
        $sName = $_POST['sName'];
        $sSex = $_POST['sSex'];
        $startWorkTime = $_POST['startWorkTime'];
        $birthday = $_POST['birthday'];
        $cMajor = $_POST['cMajor'];                        
        $eTitle = $_POST['eTitle'];
        $company = $_POST['company'];
        $department = $_POST['department'];
        $telePhone = $_POST['telePhone'];
        $mobilePhone = $_POST['mobilePhone'];
        $eMail = $_POST['eMail'];
        $qq = $_POST['qq'];
        $address = $_POST['address'];
        $education = $_POST['education'];
        $gSchool = $_POST['gSchool'];
        $major = $_POST['major'];
        
        $record = array(
            'sName' => $sName,
            'sSex' => $sSex,
            'startWorkTime' => $startWorkTime,
            'birthday' => $birthday,
            'cMajor' => $cMajor,
            'eTitle' => $eTitle,
            'company' => $company,
            'department' => $department,
            'telePhone' => $telePhone,
            'mobilePhone' => $mobilePhone,
            'eMail' => $eMail,
            'qq' => $qq,
            'address' => $address,
            'education' => $education,
            'gSchool' => $gSchool,
            'major' => $major
        );

        $this->load->model('studentmodel');
        $this->studentmodel->modifyStudent($record, $sID);
        $data['records'] = $this->studentmodel->getStudent();
        $this->load->view('student', $data);
    }
    
    public function exportStudent() {
        $this->load->model('studentmodel');
        $sID = $this->input->get('sID', true);
        
        $data['records'] = $this->studentmodel->selectStudent($sID);
        
        $this->load->view('student_Export', $data);
    }
    
    public function pdf()
    {
        $this->load->helper(array('dompdf', 'file'));
        $this->load->model('studentmodel');
        $sID = $this->input->get('sID', true);
        $data['records'] = $this->studentmodel->selectStudent($sID);
        
        // page info here, db calls, etc.     
        $html = $this->load->view('student_Export2pdf', $data, true);
        pdf_create($html, 'filename');  
    }
    
    public function getStudent() {       
        $this->load->model('studentmodel');
        $data['records'] = $this->studentmodel->getStudent();
        $data['queryData'] = $this->studentmodel->getQueryData();
        
        $this->load->view('student', $data);
    }
    
    public function selectStudentByCompany() {
        $company = $_POST['queryCompany'];
        $this->load->model('studentmodel');
        $data['records'] = $this->studentmodel->selectStudentByCompany($company);
        $data['queryData'] = $this->studentmodel->getQueryData();
        
        $this->load->view('student', $data);
    }
    
    public function selectStudentBySName() {
        $sName = $_POST['querySName'];
        $this->load->model('studentmodel');
        $data['records'] = $this->studentmodel->selectStudentBySName($sName);
        $data['queryData'] = $this->studentmodel->getQueryData();
        
        $this->load->view('student', $data);
    }
};
