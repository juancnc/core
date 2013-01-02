<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2005-2013
 * @author     Leo Feyer <http://www.contao.org>
 * @package    Repository
 * @license    LGPL
 * @filesource
 */


/**
 * Contao Repository :: Configuration file
 *
 * @copyright  Peter Koch 2008-2010
 * @author     Peter Koch, IBK Software AG
 * @license    See accompaning file LICENSE.txt
 */


/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['system'], 4, array
(
	'repository_catalog' => array
	(
		'callback'   => 'RepositoryCatalog',
		'icon'       => RepositoryBackendTheme::image('catalog16'),
		'stylesheet' => RepositoryBackendTheme::file('backend.css')
	),
	'repository_manager' => array
	(
		'callback'   => 'RepositoryManager',
		'icon'       => RepositoryBackendTheme::image('install16'),
		'stylesheet' => RepositoryBackendTheme::file('backend.css')
	)
));

?>