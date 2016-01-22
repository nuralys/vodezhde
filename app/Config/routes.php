<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/admin/users/:action', array('controller' => 'users','admin' => true));
	Router::connect('/admin', array('controller' => 'pages', 'action' => 'index', 'admin' => true));
	Router::connect('/admin/models/add', array('controller' => 'childmodels', 'action' => 'add', 'admin' => true));
	Router::connect('/admin/models/edit/*', array('controller' => 'childmodels', 'action' => 'edit', 'admin' => true));
	
	Router::connect('/category/*', array('controller' => 'products', 'action' => 'index'));
	Router::connect('/product/*', array('controller' => 'products', 'action' => 'view'));
	Router::connect('/search', array('controller' => 'products', 'action' => 'search'));
	Router::connect('/models/invite_cooperation', array('controller' => 'childmodels', 'action' => 'invite_cooperation'));
	Router::connect('/models', array('controller' => 'childmodels', 'action' => 'index'));
	Router::connect('/albums', array('controller' => 'albums', 'action' => 'index'));
	Router::connect('/albums/*', array('controller' => 'albums', 'action' => 'view'));
	Router::connect('/news', array('controller' => 'news', 'action' => 'index'));
	Router::connect('/news/*', array('controller' => 'news', 'action' => 'view'));
	Router::connect('/', array('controller' => 'pages', 'action' => 'home'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/page/*', array('controller' => 'pages', 'action' => 'index'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
