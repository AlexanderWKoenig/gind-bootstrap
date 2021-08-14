<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
   'gind_bootstrap',
   'Configuration/TsConfig/TCEFORM.tsconfig',
   'Ginds custom TCEFORM TsConfig'
);