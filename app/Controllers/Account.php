<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\AnnoncesModel;
use App\Models\CategoryModel;

use CodeIgniter\I18n\Time;

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
            'activeMenu' 	=> 'account',
            'session'       => $this->session,
            'user'          =>  $selectUser,
            'annonces'      => $this->annoncesModel->where('idUserAnnonce', $this->session->get()['userID'])->findAll(),
            'categoryFind'  => $this->categoryModel
		];

		echo view('common/HeaderSite', $data);
		echo view('account', $data);
		echo view('common/FooterSite');
	}

    public function FormAnnonce(){
     
        $listecategorys =  $this->categoryModel->findAll();

        $data = [
			'page_title'    => 'new annonces',
            'activeMenu' 	=> 'account',
            'session'       => $this->session,
            'categorys' => $listecategorys,
		];

        if (!empty($this->request->getVar())){

            $rules = [
                'name' 		    => 'required|min_length[3]|max_length[50]',
                'more'          => 'required|min_length[10]',
                'price'         => 'required|min_length[1]',
                'category'      => 'required',
            ];
    
            if( $this->validate($rules) ){
    
                $data = [  
                    'idUserAnnonce'     => $this->session->get()['userID'],
                    'idCategoryAnnonce' => $this->request->getVar('category'),
                    'nameAnnonce'       => $this->request->getVar('name'),
                    'moreAnnonce'       => $this->request->getVar('more'),
                    'priceAnnonce'      => $this->request->getVar('price'),
                    'pictureAnnonce'    => '',
                    'dateCreateAnnonce' => Time::now(),
                ];
    
                if ( $this->request->getFile('image')->isValid() ){
                    
                    /*  */
                    $file = $this->request->getFile('image');
                    
                    $newName =  $file->getRandomName();
    
                    $file->move(ROOTPATH . 'public/assets/images/annonce/original', $newName);
    
                    /* creation miniature */
                    $image = \Config\Services::image()
                    ->withFile(ROOTPATH . 'public/assets/images/annonce/original/' . $newName)
                    ->fit(70, 70, 'center')
                    ->save(ROOTPATH . 'public/assets/images/annonce/min/' . $newName);
    
                    /* creation covert pour presentation */
                    $image = \Config\Services::image()
                    ->withFile(ROOTPATH . 'public/assets/images/annonce/original/' . $newName)
                    ->fit(286, 200, 'center')
                    ->save(ROOTPATH . 'public/assets/images/annonce/cover/' . $newName);
    
                    $data['pictureAnnonce'] = $newName;
                }
                
                $this->annoncesModel->save($data);

                header("Location: " . base_url() . '/account');
			    exit;
            } else {
    
                $data = [
                    'page_title'    => 'new annonces',
                    'session'       => $this->session,  
                    'errors' => $this->validator->getErrors(),
                    'categorys' => $listecategorys,
                ];
            } 
        }
        
     
        echo view('common/HeaderSite', $data);
		echo view('account/CreatformAnnonce', $data);
		echo view('common/FooterSite');
    }


    /* ****************************
    *   edition annonce
    ********************************* */
    public function updateformAnnonce($id=null , $userid=null){

        $annonce = $this->annoncesModel->where('idAnnonce', $id)->first();

        if (empty($id) || empty($annonce) || empty($userid) || $annonce['idUserAnnonce'] != $this->session->get()['userID']){
            header("Location: " . base_url() . '/account');
			exit;
        }
        /* security */

        $data = [
			'page_title'    => 'Edit annonces',
            'activeMenu' 	=> 'account',
            'session'       => $this->session,
            'annonce'       => $annonce,
            'annoncesid'    => $id,
            'urldata'       => $id . '/' . $userid,
		];

        if (!empty($this->request->getVar())){

            $rules = [
                'name' 		    => 'required|min_length[3]|max_length[50]',
                'more'          => 'required|min_length[10]',
                'price'         => 'required|min_length[1]',
                'category'      => 'required',
            ];

            if( $this->validate($rules) ){

                $data = [ 
                    'idCategoryAnnonce' => $this->request->getVar('category'), 
                    'nameAnnonce'       => $this->request->getVar('name'),
                    'moreAnnonce'       => $this->request->getVar('more'),
                    'priceAnnonce'      => $this->request->getVar('price'),
                ];

                if ( $this->request->getFile('image')->isValid() ){
                    
                    /*  */
                    $file = $this->request->getFile('image');
                    
                    $newName =  $file->getRandomName();
    
                    $file->move(ROOTPATH . 'public/assets/images/annonce/original', $newName);
    
                    /* creation miniature */
                    $image = \Config\Services::image()
                    ->withFile(ROOTPATH . 'public/assets/images/annonce/original/' . $newName)
                    ->fit(70, 70, 'center')
                    ->save(ROOTPATH . 'public/assets/images/annonce/min/' . $newName);
    
                    /* creation covert pour presentation */
                    $image = \Config\Services::image()
                    ->withFile(ROOTPATH . 'public/assets/images/annonce/original/' . $newName)
                    ->fit(286, 200, 'center')
                    ->save(ROOTPATH . 'public/assets/images/annonce/cover/' . $newName);
    
                    $data['pictureAnnonce'] = $newName;

                    /* delete old image if exist */
                    if ($annonce['pictureAnnonce'] != ''){
                        unlink (ROOTPATH . 'public/assets/images/annonce/original/' . $annonce['pictureAnnonce']);
                        unlink (ROOTPATH . 'public/assets/images/annonce/min/' . $annonce['pictureAnnonce']);
                        unlink (ROOTPATH . 'public/assets/images/annonce/cover/' . $annonce['pictureAnnonce']);
                    }
                }

                $this->annoncesModel
                    ->where('idAnnonce', $annonce['idAnnonce'])
                    ->set($data)
                    ->update();
                
                header("Location: " . base_url() . '/account');
                exit;
                
            }else {
    
                $data = [
                    'page_title'    => 'new annonces',
                    'session'       => $this->session, 
                    'activeMenu' 	=> 'account', 
                    'annonce'       => $annonce,
                    'annoncesid'    => $id,
                    'urldata'       => $id . '/' . $userid,
                    'errors'        => $this->validator->getErrors(),
                ];
            } 
            
        }

        $listecategorys =  $this->categoryModel->findAll();
        $data['categorys'] = $listecategorys;

        echo view('common/HeaderSite', $data);
		echo view('account/UpdateFormAnnonce', $data);
		echo view('common/FooterSite');

    }



}
