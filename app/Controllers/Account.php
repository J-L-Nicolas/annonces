<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Account extends BaseController
{

	public function __construct(){

		parent::__construct();
        $this->security();
        $this->userModel = new UsersModel();

	}

	public function index($searchType = null, $searchElement = null)
	{
        $selectUser =  $this->userModel->where('idUser', $this->session->get()['userID'])->first();

		$data = [
			'page_title'    => 'Profil',
            'session'       => $this->session,
            'user'          =>  $selectUser,
		];

		echo view('common/HeaderSite', $data);
		echo view('account', $data);
		echo view('common/FooterSite');
	}

}
