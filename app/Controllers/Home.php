<?php 

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{	
		echo view("home");
	}
	
	public function about()
	{	
		echo view("about");
	}
    
    public function bio()
	{
		echo view("bio");
	}
    
    public function anime()
	{
		echo view("anime");
    }
}