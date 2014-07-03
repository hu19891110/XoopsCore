<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         Comments
 * @author          trabis <lusopoemas@gmail.com>
 * @version         $Id$
 */

include __DIR__ . '/header.php';
//there is no way to override current tabs when using system menu
//this dirty hack will have to do it
$_SERVER['REQUEST_URI'] = "admin/main.php";
Comments::getInstance()->displayPost();
