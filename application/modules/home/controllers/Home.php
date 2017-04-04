<?php

/**
 * Created by raheel.
 * Date: 4/4/2017
 */
class Home extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		die("hello from ci hmvc and my base URL is : ".base_url());
	}
}