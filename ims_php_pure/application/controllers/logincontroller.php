<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class LoginController extends CI_Controller {
    public function index() {
        $this->load->view('login');
    }
    
    public function login() {
        $username = $this->input->post('username');
        
        if ($username != '123') {
            $this->load->view('login');
        } else {
            $this->load->view('home');
        }
    }
}
 