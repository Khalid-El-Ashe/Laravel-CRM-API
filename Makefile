.RECIPEPREFIX +=
.DEFAULT_GOAL := help

PROJECT_NAME := CRM

help:
	@echo "Welcome to IT Support, have you tried turning it off and on again?"

install:
	@composer install

test:
	php artisan test

app:
	docker-compose exec -it app bash

migrate:
	php artisan migrate

analyze:
	./vendor/bin/phpstan analyze

generate:
	php artisan ide-helper:models --write

nginx:
	docker exec -it nginx bin/sh

php:
	docker exec -it app bin/sh

mysql:
	docker exec -it mysql bin/sh

redis:
	docker exec -it redis bin/sh

stop:
	docker compose down

