<?php

namespace App\Controllers;

class Op extends BaseController
{

	public function __construct(){

		parent::__construct();

	}

	public function index($searchType = null, $searchElement = null)
	{

		$data = [
			'page_title' => 'Aide',
		];

		echo view('common/HeaderSite', $data);
		echo view('aide');
		echo view('common/FooterSite');
	}

}
