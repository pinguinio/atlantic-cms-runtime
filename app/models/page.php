<?php

use \puffin\model\pdo as pdo;
use \puffin\model as Model;

class page extends pdo
{
	protected $connection = 'default';
	protected $table = 'pages';
}
