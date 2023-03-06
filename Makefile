run:
	php main.php

algo:
	php ./algo/linkedlist.php

server:
	php -S localhost:8000

composer:
	composer init

unit_test:
	composer require --dev phpunit/phpunit

phptest:
	./vendor/bin/phpunit test/ValidationTest.php