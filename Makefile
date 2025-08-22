# Makefile for siponpes-beta Laravel project

.PHONY: install test migrate seed serve clean

install:
	docker run --rm -v $$(pwd):/opt -w /opt laravelsail/php82-composer:latest composer install
	docker run --rm -v $$(pwd):/opt -w /opt node:20 npm install

migrate:
	./vendor/bin/sail artisan migrate --force

seed:
	./vendor/bin/sail artisan db:seed --force

test:
	./vendor/bin/sail test

serve:
	./vendor/bin/sail up

clean:
	rm -rf vendor node_modules
	rm -rf storage/framework/cache/* storage/framework/sessions/* storage/framework/views/*
	rm -rf bootstrap/cache/*
