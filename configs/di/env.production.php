<?php
/*
 * This file is for your production environment
 */
return array(
    'Quasar\Env\Config\CoreSettings' => array(
        'params' => array(
            'displayErrors' => false,
            'logErrors' => true,
            'errorLog' => ROOT_PATH . '/logs/errors.log',
            'errorReportingLevel' => E_ALL
        )
    )
);