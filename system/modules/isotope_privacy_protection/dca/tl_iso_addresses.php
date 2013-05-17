<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  MEN AT WORK 2013
 * @package    isotope_privacy_protection
 * @license    LGPL
 */

$GLOBALS['TL_DCA']['tl_iso_addresses']['fields']['isPrivacyProtection'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_iso_addresses']['isPrivacyProtection'],
    'exclude'   => true,
    'filter'    => true,
    'inputType' => 'checkbox',
    'eval'      => array('feEditable' => true, 'feGroup'    => 'address', 'tl_class'   => 'w50')
);

?>
