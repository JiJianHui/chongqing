<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class LoginController extends CI_Controller {
    public function index() {
        $this->load->view('www/page/login');
    }
    /*Modified*/
    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('user_password');

        $this->load->model('usermodel');
        
        $res = $this->usermodel->exists($username, $password);
  
        switch($res) {
            case -1: // User doesn't exist
                $data['errorInformation'] = '账号不存在！！！';
                $this->load->view('www/page/login', $data);
                break;
            case 0: // Password is wrong
                $data['errorInformation'] = '密码错误！！！';
                $this->load->view('www/page/login', $data);
                break;
            case 1: // Both are correct
                //$this->load->view('home');
  
                
                $this->load->model('problemmodel');
                $data['records'] = $this->problemmodel->getProblem();
                $data['queryData'] = $this->problemmodel->getQueryData();
                
                $this->load->view('www/page/problem', $data);

                //Print_r($data['queryData']['queryCName']);

                break;
        }
    }
}
 