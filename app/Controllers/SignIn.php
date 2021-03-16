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

		echo view('common/HeaderSite', $data);
		echo view('SignIn');
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

			$data = [
				'page_title' => 'SignIn',
				'erros' 	=> $this->validator->getErrors(),
            ];

			echo view('common/HeaderSite', $data);
			echo view('SignIn', $data);
			echo view('common/FooterSite');
        }
	}

	public function setRegister(){
		
		$data = [
			'name' 			=> $this->request->getVar('name'),
			'password'      => $this->request->getVar('password'),
			'confpassword'  => $this->request->getVar('confpassword'),
			'email'         => $this->request->getVar('email'),
			'tel'        	=> $this->request->getVar('tel'),
			'sex'         	=> $this->request->getVar('sex'),
		];
		dd($data);
	}

}
