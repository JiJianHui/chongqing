<?php
class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

        function index() {
            $this->load->view('uploadView');
        }
        
	function upload_file()
	{
            $flag = $this->input->get('flag');
            /*
            switch($flag) {
                case 's':
                    $config['upload_path'] = './uploads/Student';
                    break;
                case 'p':
                    $config['upload_path'] = './uploads/Problem';
                    break;
                case 'c':
                    $config['upload_path'] = './uploads/ICase';
                    break;
		
            }
             * 
             */$config['upload_path'] = './uploads';
		$config['allowed_types'] = '*';

		$this->load->library('upload', $config);

		if ($this->upload->do_upload() == TRUE)
		{
                     echo 'succeed';
		}
		else
		{
	             echo 'false';
		}
	}
}
?>