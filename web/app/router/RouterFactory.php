<?php

namespace App;

use Nette;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;


class RouterFactory
{
	use Nette\StaticClass;

	/**
	 * @return Nette\Application\IRouter
	 */
	public static function createRouter()
	{
		$router = new RouteList;
		$router[] = new Route('/', 'Homepage:default');
		$router[] = new Route('/admin/', 'Admin:admin');
		$router[] = new Route('/<.+>', 'Shortener:short');
		return $router;
	}

}
