#!/bin/sh

export PHP_POST_PROCESS_FILE="/usr/local/bin/prettier --write"

#openapi-generator validate -i ../../multivers-spec/v1.10.0/unit4-multivers-webapi-v1.10.0.yaml

openapi-generator generate -g php -o ../ -i ../../multivers-spec/v1.10.0/unit4-multivers-webapi-v1.10.0.yaml -c config.json
