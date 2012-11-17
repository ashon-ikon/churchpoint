<?php

/**
 * ---------------------------------------------------------------------
 * IndexController.php 
 * 
 * @project:	Church Point
 * 
 * @Package		Church Point Backend
 * 
 * --------------------------------------------------------------------
 * Created by ashon on Nov 16, 2012
 * 
 * (c) 2010 - 201 Copyright Ashon Associates Inc. Web Solutions 
 * http://www.ashon-associates.com
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
namespace Basic\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    /**
     * This is the default root action of this controller
     * basic/
     * basic/index/
     * basic/index/index/
     * 
     * @return \Zend\View\Model\ViewModel
     */
    public function indexAction()
    {
        echo 'Happy now';
        return new ViewModel();
    }
}