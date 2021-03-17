<?php

namespace App\Controllers;

class SignIn extends BaseController
{

	public function __construct(){

		parent::__construct();

	}

	public function index($searchType = null, $searchElement = null)
	{
		$data = [
			'page_title' => 'SignIn',
		];

		if (!empty($this->request->getVar('form'))){
			if($this->request->getVar('form') == 'login'){
				$data = array_merge($data, $this->setLogin());
			}

			if($this->request->getVar('form') == 'register'){
				$data = array_merge($data, $this->setRegister());
			}
		}
		

		echo view('common/HeaderSite', $data);
		echo view('SignIn', $data);
		echo view('common/FooterSite');
	}

	public function setLogin(){

		$rules = [
			'email'         => 'required|min_length[6]|max_length[50]|valid_email',
            'password'     => 'required|min_length[3]|max_length[200]',
        ];

		if($this->validate($rules)){

            $note = '';
            if (!empty($this->request->getVar('note'))){
                $note = $this->request->getVar('note');
            }

            $data = [
				'email'             => $this->request->getVar('email'),
                'password'        => $this->request->getVar('password'),
            ];

            dd($data);

        }else{
			$tab = [
				'errors' => $this->validator->getErrors(),
				'errortype' => "login",
			];
			return $tab;
        }
	}

	public function setRegister(){

		$rules = [
			'name' 			=> 'required|min_length[3]|max_length[50]',
			'password'      => 'required|min_length[3]',
			'confpassword'  => 'required|matches[password]',
			'email'         => 'required|min_length[6]|max_length[50]|valid_email',
			'tel'        	=> 'required|min_length[9]|max_length[14]',
			'sex'         	=> 'required',
		];

		if($this->validate($rules)){

			$data = [
				'name' 			=> $this->request->getVar('name'),
				'password'      => $this->request->getVar('password'),
				'confpassword'  => $this->request->getVar('confpassword'),
				'email'         => $this->request->getVar('email'),
				'tel'        	=> $this->request->getVar('tel'),
				'sex'         	=> $this->request->getVar('sex'),
			];

			dd($data);

		}else{

			$tab = [
				'errors' => $this->validator->getErrors(),
				'errortype' => "register",
			];
			return $tab;
        }
		
	}

}
