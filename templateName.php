<?php
/**
 * tempalteName
 * returns lower-case template name for given tempalte ID, with spaces replaced by underscores
 * eg: <body class="[[*template:templateName]]"> -> <body class="test_template">
 * 
 * AUTHOR: Jason Carney, DashMedia.com.au
 */
$tplObject = $modx->getObject('modTemplate', $input);
return strtolower(str_replace(" ", "_", $tplObject->get('templatename')));