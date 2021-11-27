<?php

declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.0', '>=')) {
    return array(
        'parameters' => array(
            'ignoreErrors' => array(
                array(
                    'message' => '#^Negated boolean expression is always false\.$#',
                    'count'   => 1,
                    'path'    => __DIR__ . '/src/Zend/Config/Writer/Xml.php',
                ),
                array(
                    'message' => '#^Negated boolean expression is always false\.$#',
                    'count'   => 1,
                    'path'    => __DIR__ . '/src/Zend/Config/Xml.php',
                ),
            )
        )
    );
} else {
    return array();
}
