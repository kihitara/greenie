<?php
 
/**
 * Settings for the Greenie theme
 */

defined('MOODLE_INTERNAL') || die;

// Adds our page to the structure of the admin tree

if ($ADMIN->fulltree) { 

// Theme colour setting
$name = 'theme_greenie/themecolor';
$title = get_string('themecolor','theme_greenie');
$description = get_string('themecolordesc', 'theme_greenie');
$default = '#589d2f';
$choices = array('#589d2f'=>'green', '#990000'=>'red');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Decide whether to show an image or text in the header
$name = 'theme_greenie/texttitle';
$title = get_string('texttitle','theme_greenie');
$description = get_string('texttitledesc', 'theme_greenie');
$default = 1;
$choices = array(0=>'Show logo', 1=>'Show custom text title', 2=>'Show course or site title');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Main title
$name = 'theme_greenie/maintitle';
$title = get_string('maintitle','theme_greenie');
$description = get_string('maintitledesc', 'theme_greenie');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

// Subtitle
$name = 'theme_greenie/mainsubtitle';
$title = get_string('mainsubtitle','theme_greenie');
$description = get_string('mainsubtitledesc', 'theme_greenie');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

// Logo file setting
$name = 'theme_greenie/logo';
$title = get_string('logo','theme_greenie');
$description = get_string('logodesc', 'theme_greenie');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

// Foot note setting
$name = 'theme_greenie/footnote';
$title = get_string('footnote','theme_greenie');
$description = get_string('footnotedesc', 'theme_greenie');
$setting = new admin_setting_confightmleditor($name, $title, $description, '');
$settings->add($setting);

// Show the credits to MoodleBites for Theme Designers
$name = 'theme_greenie/mbcredits';
$title = get_string('mbcredits','theme_greenie');
$description = get_string('mbcreditsdesc', 'theme_greenie');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Custom CSS file
$name = 'theme_greenie/customcss';
$title = get_string('customcss','theme_greenie');
$description = get_string('customcssdesc', 'theme_greenie');
$setting = new admin_setting_configtextarea($name, $title, $description, '');
$settings->add($setting);

}