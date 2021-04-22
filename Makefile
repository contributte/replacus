.PHONY: install qa cs csf phpstan tests coverage-clover coverage-html

install:
	composer update

qa: phpstan cs

cs:
	vendor/bin/codesniffer src tests

csf:
	vendor/bin/codefixer src tests

phpstan:
	vendor/bin/phpstan analyse -l max -c phpstan.neon src

tests:
	vendor/bin/phpunit tests --colors=always

coverage-clover:
	phpdbg -qrr vendor/bin/phpunit tests --colors=always -c tests/coverage.xml

coverage-html:
	phpdbg -qrr vendor/bin/phpunit tests --coverage-html tests/output/coverage-html -c tests/coverage.xml
