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
		$config['upload_path'] = './uploads/';
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