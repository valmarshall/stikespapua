<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'STIKES Papua ~ Home'
		];

		return view('index.php', $data);
	}
}
