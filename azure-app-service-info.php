<?php 
/*
Plugin Name: Azure App Service Info
Plugin URI:  TBD
Description: Adds a Microsoft Azure App Service deployment identifier to the footer of the admin section. 
Version:     0.1
Author:      Haig Didizian
Author URI:  http://www.agorasource.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

/*
  Copyright 2016 Haig Didizian

  This file is part of Azure App Service Info.

  Azure App Service Info is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 2 of the License, or
  (at your option) any later version.

  Azure App Service Info is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with Azure App Service Info.  If not, see <http://www.gnu.org/licenses/>.
*/

defined( 'ABSPATH' ) or die();

function aasi_register_activation_hook() {
  // do nothing currently
}

register_activation_hook( __FILE__, 'aasi_register_activation_hook' ); 

function aasi_register_uninstall_hook() {
  // do nothing currently
}

register_uninstall_hook( __FILE__, 'aasi_register_uninstall_hook' );

// this plugin is only relevant to the admin, 
// so don't run unless we are in the admin section
if ( is_admin() ) { 
  require_once( dirname(__file__) . '/admin/admin.php' );
}

?>
