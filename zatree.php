<?php
    /*
    ** Zabbix
    ** Copyright (C) 2001-2015 Zabbix SIA
    **
    ** This program is free software; you can redistribute it and/or modify
    ** it under the terms of the GNU General Public License as published by
    ** the Free Software Foundation; either version 2 of the License, or
    ** (at your option) any later version.
    **
    ** This program is distributed in the hope that it will be useful,
    ** but WITHOUT ANY WARRANTY; without even the implied warranty of
    ** MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    ** GNU General Public License for more details.
    **
    ** You should have received a copy of the GNU General Public License
    ** along with this program; if not, write to the Free Software
    ** Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
    **/

    require_once dirname(__FILE__) . '/include/config.inc.php';
    require_once dirname(__FILE__) . '/include/hosts.inc.php';
    require_once dirname(__FILE__) . '/include/reports.inc.php';

    $page['title'] = _('Zabbix zatree');
    $page['file'] = 'zatree.php';
    $page['hist_arg'] = array('mode', 'groupid', 'hostid', 'tpl_triggerid');
    $page['scripts'] = array('class.calendar.js');
    $page['type'] = detect_page_type(PAGE_TYPE_HTML);
    require_once dirname(__FILE__) . '/include/page_header.php';

    $zatree_widget = new CWidget(null,"zatree_iframe");
    $zatree_widget->addPageHeader(_('Zatree'));
    $zatree_iframe_left = new CIFrame("zatree/left.php","20%","100%","yes","zatree_iframe_left");
    $zatree_iframe_right = new CIFrame("zatree/graph.php","80%","100%","yes","zatree_iframe_right");
    $zatree_iframe_left->setAttribute("name","leftFrame");
    $zatree_iframe_right->setAttribute("name","rightFrame");
    $zatree_widget->addItem($zatree_iframe_left);
    $zatree_widget->addItem($zatree_iframe_right);
    $zatree_widget->show();

    require_once dirname(__FILE__) . '/include/page_footer.php';
?>
