it: fix stan test ## Runs the cs, stan, and test targets

help: ## Displays this list of targets with descriptions
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(firstword $(MAKEFILE_LIST)) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY: fix
fix: vendor
	vendor/bin/php-cs-fixer fix

.PHONY: stan
stan: vendor ## Runs a static analysis with phpstan
	vendor/bin/phpstan analyse

.PHONY: test
test: vendor ## Runs auto-review, unit, and integration tests with phpunit
	vendor/bin/phpunit

vendor: composer.json composer.lock
	composer validate --strict
	composer install
	composer normalize
