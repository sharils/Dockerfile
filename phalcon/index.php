<?php
$phalcon_version = phpversion('phalcon');
if ($phalcon_version === false) {
    echo 'Phalcon does not exist.', PHP_EOL;
} else {
    echo "Hello Phalcon $phalcon_version!", PHP_EOL;
}
