<?php
header('Content-Type: text/html; charset=utf-8');

class ProblemController extends CI_Controller {
    public function addProblem() {
        $isFirst = $this->input->get('isFirst', true);
        if(empty($isFirst) == FALSE) {
            $this->load->view('www/page/problem_Add');
        } else {
            $eName = $_POST['eName'];
            $eCategory = $_POST['eCategory'];
            $eAddress = $_POST['address'];
            $postCode = $_POST['postCode'];
            $contact = $_POST['contact'];                        
            $mobilePhone = $_POST['mobilePhone'];
            $phone = $_POST['phone'];
            $faxNumber = $_POST['faxNumber'];
            $eMail = $_POST['eMail'];
            $qq = $_POST['qq'];
            $mainProducts = $_POST['mainProducts'];
            $pName = $_POST['pName'];
            $pCategory = $_POST['pCategory'];
            $principal = $_POST['principal'];
            $phone2 = $_POST['phone2'];
            $faxNumber2 = $_POST['faxNumber2'];
            $background = $_POST['background'];
            $description = $_POST['description'];
            
 
            $record = array(
                'eName' => $eName,
                'eCategory' => $eCategory,
                'eAddress' => $eAddress,
                'ePostCode' => $postCode,
                'contact' => $contact,
                'mobilePhone' => $mobilePhone,
                'telePhone' => $phone,
                'faxNumber' => $faxNumber,
                'eMail' => $eMail,
                'qq' => $qq,
                'pName' => $pName,
                'pCategory' => $pCategory,
                'cName' => $principal,
                'cTelePhone' => $phone2,
                'pFaxNumber' => $faxNumber2,
                'bgDescription' => $background,
                'pDescription' => $description,
            );
            
            $this->load->model('problemmodel');
            $this->problemmodel->addProblem($record);
            $data['records'] = $this->problemmodel->getProblem();
            $this->load->view('www/page/problem', $data);
        }
    }

    public function deleteProblem() {
        $this->load->model('problemmodel');
        $pID = $this->input->get('pID', true);
        
        $this->problemmodel->deleteProblem($pID);
        $data['records'] = $this->problemmodel->getProblem();
        
        $this->load->view('www/page/problem', $data);  
    }    
    
    public function loadProblem() {
        $this->load->model('problemmodel');
        $pID = $this->input->get('pID', true);
        
        $data['records'] = $this->problemmodel->selectProblem($pID);
        
        $this->load->view('www/page/problem_Modify', $data); 
    }
    
    public function modifyProblem() {
            $pID = $_POST['pID'];
        
            $eName = $_POST['eName'];
            $eCategory = $_POST['eCategory'];
            $eAddress = $_POST['eAddress'];
            $ePostCode = $_POST['ePostCode'];
            $contact = $_POST['contact'];                        
            $mobilePhone = $_POST['mobilePhone'];
            $telePhone = $_POST['telePhone'];
            $faxNumber = $_POST['faxNumber'];
            $eMail = $_POST['eMail'];
            
            $qq = $_POST['qq'];
            $mainProducts = $_POST['mainProducts'];
            $pName = $_POST['pName'];
            $pCategory = $_POST['pCategory'];
            $contactName = $_POST['contactName'];
            //$phone2 = $_POST['phone2'];
            $pFaxNumber = $_POST['pFaxNumber'];
            $bgDescription = $_POST['bgDescription'];
            $pDescription = $_POST['pDescription'];
            
 
            $record = array(
                'eName' => $eName,
                'eCategory' => $eCategory,
                'eAddress' => $eAddress,
                'ePostCode' => $ePostCode,
                'contact' => $contact,
                'mobilePhone' => $mobilePhone,
                'telePhone' => $telePhone,
                'faxNumber' => $faxNumber,
                'eMail' => $eMail,
                'qq' => $qq,    
                'mainProducts' => $mainProducts,
                'pName' => $pName,
                'pCategory' => $pCategory,
                'contactName' => $contactName,
                //'phone2' => $phone2,
                'pFaxNumber' => $pFaxNumber,
                'bgDescription' => $bgDescription,
                'pDescription' => $pDescription,
            );
            
            $this->load->model('problemmodel');
            $this->problemmodel->modifyProblem($record, $pID);
            
            $data['records'] = $this->problemmodel->getProblem();
            $this->load->view('www/page/problem', $data);
    }
    
    public function exportProblem() {
        $this->load->model('problemmodel');
        $pID = $this->input->get('pID', true);
        
        $data['records'] = $this->problemmodel->selectProblem($pID);
        
        $this->load->view('problem_Export', $data);
    }
    
    public function exportProblem2() {
        $this->load->library('word');
        $section = $this->word->createSection(array('orientation'=>'landscape'));
        // Add text elements
        $section->addText('Hello World!');
        $section->addTextBreak(1);
		
        $section->addText('I am inline styled.', array('name'=>'Verdana', 'color'=>'006699'));
        $section->addTextBreak(1);

        $this->word->addFontStyle('rStyle', array('bold'=>true, 'italic'=>true, 'size'=>16));
        $this->word->addParagraphStyle('pStyle', array('align'=>'center', 'spaceAfter'=>100));
        $section->addText('I am styled by two style definitions.', 'rStyle', 'pStyle');
        $section->addText('I have only a paragraph style definition.', null, 'pStyle');
        $filename='just_some_random_name.docx'; //save our document as this file name
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document'); //mime type
        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache

        $objWriter = PHPWord_IOFactory::createWriter($this->word, 'Word2007');
        $objWriter->save('php://output');
    }

    public function pdf()
    {
        $this->load->helper(array('dompdf', 'file'));
        $this->load->model('problemmodel');
        $pID = $this->input->get('pID', true);
        $data['records'] = $this->problemmodel->selectProblem($pID);
        
        // page info here, db calls, etc.     
        $html = $this->load->view('problem_Export2pdf', $data, true);
        pdf_create($html, 'filename');  
    }


    
    public function getProblem() {
        $this->load->model('problemmodel');
        $data['records'] = $this->problemmodel->getProblem();
        $data['queryData'] = $this->problemmodel->getQueryData();
        
        //Print_r($data['queryData']['queryCName']);
        $this->load->view('www/page/problem', $data);
    }
    
    public function selectProblemByEName() {
        $eName = $_POST['queryEName'];
        $this->load->model('problemmodel');
        $data['records'] = $this->problemmodel->selectProblemByEName($eName);
        $data['queryData'] = $this->problemmodel->getQueryData();
        
        $this->load->view('www/page/problem', $data);
    }
    
    public function selectProblemByPCategory() {
        $pCategory = $_POST['queryPCategory'];
        $this->load->model('problemmodel');
        $data['records'] = $this->problemmodel->selectProblemByPCategory($pCategory);
        $data['queryData'] = $this->problemmodel->getQueryData();
        
        $this->load->view('www/page/problem', $data);
    }
    
    public function selectProblemByContactName() {
        $contactName = $_POST['queryContactName'];
        $this->load->model('problemmodel');
        $data['records'] = $this->problemmodel->selectProblemByContactName($contactName);
        $data['queryData'] = $this->problemmodel->getQueryData();
        
        $this->load->view('www/page/problem', $data);
    }
};
