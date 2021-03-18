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
		$listeAnnonces = null;
		$idcategoy = 0;
	
		if(!empty($this->request->getVar('categorySelected')) && $this->request->getVar('categorySelected') != 0){
			
			$listeAnnonces = $this->annoncesModel->where('idCategoryAnnonce', $this->request->getVar('categorySelected'))->paginate(9);
			$idcategoy = $this->request->getVar('categorySelected');
		}else{

			$listeAnnonces = $this->annoncesModel->paginate(9,'group1');
		}

		$data = [
			'page_title' => 'Annonces',
			'session'       => $this->session,
			'annonces'      => $listeAnnonces,
			'listeCategory' => $this->categoryModel->findAll(),
            'categoryFind'  => $this->categoryModel,
            'usersFind'  	=> $this->usersModel,
			'idcategoy' 	=> $idcategoy,
			'pager'			=> $this->annoncesModel->pager,

		];

		echo view('common/HeaderSite', $data);
		echo view('Home', $data);
		echo view('common/FooterSite');
	}

}
