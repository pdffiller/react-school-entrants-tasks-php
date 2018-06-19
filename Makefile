.PHONY: test test-all test-1 test-2 test-3 clear

install:
	composer install

test:
	php vendor/bin/codecept run unit

test-1:
	php vendor/bin/codecept run unit task1

test-2:
	php vendor/bin/codecept run unit task2

test-3:
	php vendor/bin/codecept run unit task3

clear:
	rm -rf vendor