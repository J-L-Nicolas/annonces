<?php

namespace App\Controllers;

class Home extends BaseController
{

	public function __construct(){

		parent::__construct();

	}

	public function index($searchType = null, $searchElement = null)
	{

		$data = [
			'page_title' => 'Annonces',
			'session'       => $this->session,
		];

		echo view('common/HeaderSite', $data);
		echo view('Home');
		echo view('common/FooterSite');
	}

}
