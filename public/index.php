<?php

/**
 * ---------------------------------------------------------------------
 * index.php 
 * 
 * @project:	Church Point
 * 
 * @Package		Church Point Backend
 * 
 * --------------------------------------------------------------------
 * Created by ashon on Nov 16, 2012
 * 
 * (c) 2010 - 2012 Copyright Ashon Associates Inc. Web Solutions 
 * http://www.ashon-associates.com
 * 
 * 
 * @license http://www.gnu.org/licenses/ GPL v3
 * 
 *   This program is free software: you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * --------------------------------------------------------------------
 */
ini_set('display_errors', 'On');
error_reporting(E_ALL);

chdir(dirname(__DIR__));

// Setup autoloading
require 'init_autoloader.php';

// Run the application!
Zend\Mvc\Application::init(require 'config/app.config.php')->run();
