<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Dpool.' . $_EXTKEY,
	'Slider',
	array(
		'Slideritem' => 'show, list',
		
	),
	// non-cacheable actions
	array(
		'Slideritem' => 'show',
		
	)
);

#$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'EXT:threesixtyslider/Hooks/class.threesixtyslider_tcemainprocdm.php:tx_myextension_tcemainprocdm';
?>