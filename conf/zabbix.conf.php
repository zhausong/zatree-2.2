<?php
    // Zabbix GUI configuration file
    global $DB;

    $DB['TYPE'] = 'MYSQL';
    $DB['SERVER'] = '127.0.0.1';

    $DB['PORT'] = '3306';
    $DB['DATABASE'] = 'zabbix';
    $DB['USER'] = 'zabbix';
    $DB['PASSWORD'] = 'zabbix';

    // SCHEMA is relevant only for IBM_DB2 database
    $DB['SCHEMA'] = '';

    $ZBX_SERVER = '127.0.0.1';
    $ZBX_SERVER_PORT = '10051';
    $ZBX_SERVER_NAME = '';

    $IMAGE_FORMAT_DEFAULT = IMAGE_FORMAT_PNG;

