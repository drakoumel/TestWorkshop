# Test workshop

## Setup environment

### VM

If you do not have a local setup with at least php 5.6, please use the provided VM via vagrant:

`vagrant up`

### Accessing the vm

`vagrant ssh`

## Run tests

### Unit tests

`php vendor/bin/codecept run unit`

### Integration tests

`php vendor/bin/codecept run integration`

### Add test to a suite

`php vendor/bin/codecept generate:phpunit <suite> <ClassName>`

E.g: `php vendor/bin/codecept generate:phpunit unit TestWorkshop/FizzBuzz/Foo`


## Metrics

`php vendor/bin/phpmetrics --report-html=fizzBuzzMetrics.html src --offline`