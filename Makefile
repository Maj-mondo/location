.PHONY: dev
.DEFAULT_GOAL=dev

vendor: composer.json
	composer install

composer.lock: composer.json
	composer update

dev: vendor
	php -S 127.0.0.1:3000 -d display_errors=1
