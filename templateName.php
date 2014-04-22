<?php
/**
 * tempalteName
 * returns lower-case template name for given tempalte ID, with spaces replaced by underscores
 * eg: <body class="[[*template:templateName]]"> -> <body class="test_template">
 * 
 * AUTHOR: Jason Carney, DashMedia.com.au
 */
$sql = "select templatename from modx_site_templates where id=?";
$stmt = $modx->prepare($sql);
$stmt->execute(array($input));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$oString = strtolower(str_replace(" ", "_", $row["templatename"]));

return $oString;