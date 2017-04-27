<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: Panel/panel_widget.php
| Author: Frederick MC Chan (Chan)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
// Path Definitions
$widget_locale = fusion_get_locale('', WIDGETS."/panel/locale/".LANGUAGE.".php");
$widget_title = $widget_locale['PW_0100'];
$widget_icon = 'panel.svg';
$widget_description = $widget_locale['PW_0101'];
$widget_admin_file = 'panel_admin.php';
$widget_display_file = 'panel.php';
$widget_admin_callback = 'panelWidgetAdmin';
$widget_display_callback = 'panelWidget';