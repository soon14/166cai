<?php

/**
 * Copyright (c) 2014,上海二三四五网络科技股份有限公司
 * 摘    要：基准后台controller
 * 作    者：wangl@2345.com
 * 修改日期：2014.11.06
 */
defined ( 'BASEPATH' ) or die ( 'No direct script access allowed' );
class MY_Controller extends CI_Controller
{
	protected $_pid; // 合作商ID
	protected $_pname; // 合作商名
	protected $_con;
	protected $_act;
	const NUM_PER_PAGE = 10;

	public function __construct()
	{
		parent::__construct ();
		$this->_con = $this->router->class;
		$this->_act = $this->router->method;
		$this->load->library ( 'session' );
		$this->_pid = $this->session->userdata ( 'pid' );
		$this->_pname = $this->session->userdata ( 'pname' );
		if ((! in_array ( $this->_con, array ('index' ) ) || ($this->_con == 'index' && $this->_act == 'index'))    && empty ( $this->_pid ))
		{
			
			$this->redirect ( $this->config->item ( 'base_url' ) .'/index/login' );
		}
		
	}

	protected function redirect($uri = '', $method = 'location', $http_response_code = 302)
	{
		switch ($method)
		{
			case 'refresh' :
				header ( "Refresh:0;url=" . $uri );
				break;
			default :
				header ( "Location: " . $uri, TRUE, $http_response_code );
				break;
		}
		exit ();
	}

	public function display($file, $data)
	{
		$data ['pname'] = $this->_pname;
		$data ['con'] = $this->_con;
		$data ['act'] = $this->_act;
		$this->load->view ( 'template/header', $data );
		$this->load->view ( 'template/side', $data );
		$this->load->view ( $file, $data );
		$this->load->view ( 'template/footer', $data );
	}
	
	protected function cre_pubkey()
	{
		$this->load->library('tools');
		$sec = substr(time(), -5);
		$this->pub_salt = $this->tools->rsa_encrypt($sec);
	}
	
}
