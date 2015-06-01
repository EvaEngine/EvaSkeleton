test:
	phpunit --bootstrap ./tests/Bootstrap.php ./tests

git-pull:
	git pull

git-push:
	git push -u

rollback:
	git reset --hard HEAD~1

clear-all:
	rm config/_*
	rm cache/api/*
	rm cache/global/*
	rm cache/html/*
	rm cache/model/*
	rm cache/schema/*
	rm cache/view/*

install:
	docker run -v $(shell pwd -P):/opt -it eva/php composer install --dev -vvv
	git submodule update --init --recursive
	chmod 777 ./tmp ./config ./logs ./cache ./cache/api ./cache/global ./cache/html ./cache/model ./cache/schema ./cache/token ./cache/view ./public/uploads ./public/cache ./public/tmp ./public/thumbnails/thumb
	docker run -v $(shell pwd -P):/opt -it eva/node cnpm install --verbose
	docker run -v $(shell pwd -P):/opt -it eva/node bower install --allow-root
	docker run -v $(shell pwd -P):/opt -it eva/node gulp
	chmod +x ./utilities/*

upgrade:
	git pull
	git submodule update --init --recursive
	docker run -v $(shell pwd -P):/opt -it eva/php composer update --optimize-autoloader --prefer-dist -vvv
	docker run -v $(shell pwd -P):/opt -it eva/node cnpm update --verbose
	docker run -v $(shell pwd -P):/opt -it eva/node bower update --allow-root
	docker run -v $(shell pwd -P):/opt -it eva/node gulp

update:
	git pull
	git submodule update --init --recursive
	docker run -v $(shell pwd -P):/opt -it eva/node gulp
	docker run -v $(shell pwd -P):/opt -it eva/php composer --optimize dump-autoload -vvv

up:
	docker-compose -f ~/opt/htdocs/Dockerfiles/docker-compose.yml up -d

php:
	docker-compose -f ~/opt/htdocs/Dockerfiles/docker-compose.yml run php /bin/bash

mysql:
	docker run -v $(shell pwd -P):/opt -it --rm eva/mysql sh -c 'exec mysql -h"192.168.59.103" -P"3306" -uroot -p"123456"'
