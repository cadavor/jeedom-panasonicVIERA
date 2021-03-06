<?php
/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */

if (!isConnect('admin')) {
    throw new Exception('401 Unauthorized');
}
?>


<div id='div_valuesAlert' style="display: none;"></div>
<a class="btn btn-default pull-right" id="bt_refreshValues"><i class="fa fa-refresh"></i> {{Rafraichir}}</a>
<ul class="nav nav-tabs" role="tablist" id="ul_tabs">

</ul>
<div class="tab-content" style="height:calc(100% - 50px);overflow:auto;overflow-x: hidden;" id="div_tabscontent">

</div>
<?php include_file('core', 'panasonicVIERA', 'class.js', 'panasonicVIERA');?>
<?php include_file('desktop', 'deviceInformations', 'js', 'panasonicVIERA');?>
