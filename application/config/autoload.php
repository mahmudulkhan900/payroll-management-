<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$autoload['packages'] = array();
$autoload['libraries'] = array('session','database','form_validation');
$autoload['drivers'] = array();
$autoload['helper'] = array('url','form');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array('Home_model','Department_model','Staff_model','Salary_model','Leave_model');
