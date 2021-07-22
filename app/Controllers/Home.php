<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
        return view('page/index');
	}
	public function contact()
	{
        return view('page/contact');
	}
	public function project()
	{
        return view('page/project');
	}
	public function servicesBrand()
	{
        return view('page/services-brand');
	}
	public function servicesCode()
	{
        return view('page/services-code');
	}
	public function servicesCreative()
	{
        return view('page/services-creative');
	}
	public function servicesMarketing()
	{
        return view('page/services-marketing');
	}
}
