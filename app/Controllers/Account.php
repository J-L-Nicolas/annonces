<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\AnnoncesModel;
use App\Models\CategoryModel;

class Account extends BaseController
{

	public function __construct(){

		parent::__construct();
        $this->security();
        $this->userModel = new UsersModel();
        $this->annoncesModel = new AnnoncesModel();
		$this->categoryModel = new CategoryModel();
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

    public function FormAnnonce(){

        $data = [
			'page_title'    => 'new annonces',
            'session'       => $this->session,
		];

        if( !empty($this->request->getVar('form')) ){
            
            $tab = null;

            if (!empty($this->request->getFile('image'))){
				
				$tab['image'] = $this->request->getFile('image');
				
			}

            $tab = [
                'name'      => $this->request->getVar('name'),
                'more'      => $this->request->getVar('more'),
                'price'     => $this->request->getVar('price'),
                'image'     => $this->request->getFile('image'),
                'category'  => $this->request->getVar('category'),
            ];

            dd($tab);
        }

        $data = [
			'page_title'    => 'new annonces',
            'session'       => $this->session,
		];
    
        echo view('common/HeaderSite', $data);
		echo view('account/formAnnonce', $data);
		echo view('common/FooterSite');
    }



}
