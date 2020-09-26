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
    
    public function contact()
	{
		echo view("contact");
	}
    
    public function faqs()
	{
		echo view("faqs");
    }
}