<?php

/* etracker */
/*
require_once "etracker.inc.php";

// easy base code (pagename will be detected automatically)
echo etracker::getCode("YOUR_SECURECODE");

// normal base code
echo etracker::getCode("YOUR_SECURECODE", array('et_pagename' => "YOUR_PAGENAME", 'et_areas' => "YOUR_AREA1/AREA2"));

// base code for campaign / target pages
echo etracker::getCode(
  "YOUR_SECURECODE",
  array(
    'et_pagename'  => 'YOUR_PAGENAME',        // pagename
    'et_areas'     => 'YOUR_AREA1/AREA2',     // slash delimited area names
    'et_ilevel'    => 4,                      // level of interest
    'et_target'    => 'YOUR_TARGET1,TARGET2', // comma delimited target names
    'et_tval'      => 5.80,                   // target value
    'et_tsale'     => 1,                      // target is sale (1) not a lead (0)
    'et_tonr'      => 'YOUR_INV_NR:123',      // target order number
    'et_se'        => CAMPAIGN_ID,            // campaign id
    'et_cust'      => CUSTOMER_STATUS,        // status of customer
    'et_basket'    => 'ARTICLE1,DESCRIPTION1,GROUP1,AMOUNT1,PRICE1' // shopping cart
  ),
  true
);
*/
/* etracker end */

include "contact.html";

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$content = $_POST["content"];

$content = str_replace("\n.", "\n..", $content);

if (mail("info@sprachrechner.de" , $subject , $content, "From: ".$name."<".$email.">") === TRUE) {	
	echo "<div style='margin-left: auto; margin-right: auto; width: 70%; background-color: #fff; border: 2px solid gray; border-radius: 10px; margin-bottom: 10px; padding-left: 1em;'>Ihre E-Mail wurde gesendet.</div>";
}
else {
	echo "<div style='margin-left: auto; margin-right: auto; width: 70%; background-color: #fff; border: 2px solid gray; border-radius: 10px; margin-bottom: 10px; padding-left: 1em;'>Fehler bei der Versendung der E-Mail. Bitte wenden Sie sich an den <a href='mailto:admin@sprachrechner.de?Subject='Fehler: Kontaktformular' target='_top'>Administrator</a> mit einer genauen Fehlerbeschreibung.</div>";
}

?>