<?php

/**
 * ---------------------------------------------------------------------
 * init_autoload.php 
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

$zf2Path = false;

if (getenv('ZF2_PATH')) {           // Support for ZF2_PATH environment variable or git submodule
    $zf2Path = getenv('ZF2_PATH');
} elseif (get_cfg_var('zf2_path')) { // Support for zf2_path directive value
    $zf2Path = get_cfg_var('zf2_path');
} elseif (is_dir('vendor/ZF2/library')) {
    $zf2Path = 'vendor/ZF2/library';
}

if ($zf2Path) {
    if (isset($loader)) {
        $loader->add('Zend', $zf2Path);
    } else {
        include $zf2Path . '/Zend/Loader/AutoloaderFactory.php';
        Zend\Loader\AutoloaderFactory::factory(array(
            'Zend\Loader\StandardAutoloader' => array(
                'autoregister_zf' => true
            )
        ));
    }
}

if (!class_exists('Zend\Loader\AutoloaderFactory')) {
    throw new RuntimeException('Unable to load ZF2. Run `php composer.phar install` or define a ZF2_PATH environment variable.');
}
