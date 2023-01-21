#!/bin/bash
export PHP_CS_FIXER_IGNORE_ENV=true && php php-cs-fixer.phar fix --verbose --config=.php-cs-fixer.dist.php
