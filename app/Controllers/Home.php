<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\AnnoncesModel;
use App\Models\CategoryModel;

class Home extends BaseController
{

	public function __construct(){

		parent::__construct();
		$this->usersModel = new UsersModel();
		$this->annoncesModel = new AnnoncesModel();
		$this->categoryModel = new CategoryModel();
	}

	public function index($searchType = null, $searchElement = null)
	{
		$data = [
			'page_title' => 'Annonces',
			'session'       => $this->session,
			'annonces'      => $this->annoncesModel->findAll(),
            'categoryFind'  => $this->categoryModel,
            'usersFind'  => $this->usersModel,
		];

		echo view('common/HeaderSite', $data);
		echo view('Home', $data);
		echo view('common/FooterSite');
	}

}
