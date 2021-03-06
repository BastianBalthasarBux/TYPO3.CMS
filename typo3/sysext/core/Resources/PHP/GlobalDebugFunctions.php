<?php
    // Simple debug function which prints output immediately
    function xdebug($var = '', $debugTitle = 'xdebug')
    {
        // If you wish to use the debug()-function, and it does not output something,
        // please edit the IP mask in TYPO3_CONF_VARS
        if (!\TYPO3\CMS\Core\Utility\GeneralUtility::cmpIP(\TYPO3\CMS\Core\Utility\GeneralUtility::getIndpEnv('REMOTE_ADDR'), $GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask'])) {
            return;
        }
        \TYPO3\CMS\Core\Utility\DebugUtility::debug($var, $debugTitle);
    }

    // Debug function
    function debug($variable = '', $name = '*variable*', $line = '*line*', $file = '*file*', $recursiveDepth = 3, $debugLevel = E_DEBUG)
    {
        // If you wish to use the debug()-function, and it does not output something,
        // please edit the IP mask in TYPO3_CONF_VARS
        if (!\TYPO3\CMS\Core\Utility\GeneralUtility::cmpIP(\TYPO3\CMS\Core\Utility\GeneralUtility::getIndpEnv('REMOTE_ADDR'), $GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask'])) {
            return;
        }
        $title = $name === '*variable*' ? '' : $name;
        $group = $line === '*line*' ? null : $line;
        \TYPO3\CMS\Core\Utility\DebugUtility::debug($variable, $title, $group);
    }
