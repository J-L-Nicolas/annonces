<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\I18n\Time;

class SignIn extends BaseController
{
	
	public function __construct(){

		parent::__construct();
		$this->userModel = new UsersModel();
	}

	/* ****************************************************
	* affiche les deux formulaires connexion et Inscrition
	****************************************************** */
	public function index($searchType = null, $searchElement = null){

		$data = [
			'page_title' 	=> 'SignIn',
			'activeMenu' 	=> 'signin',
			'session' 		=> $this->session,
			'focusInput' 	=> 'form1Example1'
		];

		if (!empty($this->request->getVar('form'))){
			if($this->request->getVar('form') == 'login'){
				$data = array_merge($data, $this->setLogin());
			}

			if($this->request->getVar('form') == 'register'){
				$data = array_merge($data, $this->setRegister());
				$data['focusInput'] = 'form6Example1';
			}
		}
		

		echo view('common/HeaderSite', $data);
		echo view('SignIn', $data);
		echo view('common/FooterSite');
	}

	/* ***************************************
	* Gestion de la connexion(Login)
	******************************************* */
	public function setLogin(){

		$rules = [
			'email'        	=> 'required|min_length[6]|max_length[50]|valid_email',
            'password'     	=> 'required|min_length[3]|max_length[200]',
        ];

		if($this->validate($rules)){

            $data = [
				'email'       	=> $this->request->getVar('email'),
                'password'      => $this->request->getVar('password'),
            ];

            if ($user = $this->userModel->where('emailUser', $data['email'])->first()){

				if (password_verify($data['password'], $user['pwdUser'])){

					$this->session->set([
						'userID'=> $user['idUser'],
					]);

					header("Location: " . base_url() . '/account');
					exit;
				}
			};

			$tab = [
				'errortype' => "Faillogin",
			];

        }else{

			$tab = [
				'errors' 	=> $this->validator->getErrors(),
				'errortype' => "login",
			];
        }

		return $tab;
	}

	/* ***************************************
	* Gestion de l'inscription (Sign In)
	******************************************* */
	public function setRegister(){

		$rules = [
			'name' 			=> 'required|min_length[3]|max_length[50]',
			'password'      => 'required|min_length[3]',
			'confpassword'  => 'required|matches[password]',
			'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.emailUser]',
			'tel'        	=> 'required|min_length[9]|max_length[14]',
			'sex'         	=> 'required',
		];

		if($this->validate($rules)){

			$data = [
				'nameUser' 			=> $this->request->getVar('name'),
				'pwdUser'      		=> password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
				'emailUser'         => $this->request->getVar('email'),
				'telUser'        	=> $this->request->getVar('tel'),
				'sexUser'         	=> $this->request->getVar('sex'),
				'datCreateUser' 	=>Time::now(),
			];

			if ($this->userModel->save($data)){

				$lastIdContact = $this->userModel->insertID();
				$this->session->set([
					'userID'=> $lastIdContact,
				]);
				
				header("Location: " . base_url() . '/account');
				exit;
			}


		}else{

			$tab = [
				'errors' 	=> $this->validator->getErrors(),
				'errortype' => "register",
			];

			return $tab;
        }
	}

	public function disconected(){
		$this->session->destroy();
		header("Location: " . base_url());
		exit;
	}
}
