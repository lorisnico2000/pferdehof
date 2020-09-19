<?php
$currentApplicationContext = \TYPO3\CMS\Core\Core\Environment::getContext();

if ($currentApplicationContext->isDevelopment()) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = 1;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['debug'] = true;
    $GLOBALS['TYPO3_CONF_VARS']['FE']['debug'] = true;
}