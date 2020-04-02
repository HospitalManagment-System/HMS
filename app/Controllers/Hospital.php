<?php namespace App\Controllers;

class Hospital extends BaseController
{
	public function adduser()
	{
        echo view('templates/header');
		return view('pages/adduser');
	}

    public function reception()
    {
        echo view('templates/header');
        return view('pages/reception');
    }

    public function doctors()
    {
        echo view('templates/header');
        return view('pages/doctors');
    }

    public function appointments()
    {
        echo view('templates/header');
        return view('pages/appointment');
    }
	//--------------------------------------------------------------------

}
