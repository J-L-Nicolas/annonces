<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\AnnoncesModel;
use App\Models\CategoryModel;

class ApiAnnonces extends BaseController
{

	public function __construct(){

		parent::__construct();
		$this->usersModel = new UsersModel();
		$this->annoncesModel = new AnnoncesModel();
		$this->categoryModel = new CategoryModel();
	}

	public function index($searchType = null, $searchElement = null)
	{
        if ( !empty( $this->request->getVar('id') ) ){

            $liste = $this->annoncesModel->where('idAnnonce', $this->request->getVar('id'))->findAll();
            return $this->response->setJSON($liste);
        }
        
		return $this->response->setJSON(['error' => false]);
	}

}
