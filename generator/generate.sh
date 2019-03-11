#!/bin/sh
openapi-generator generate -g php -o ../ -i ../../spec/v1.10.0/unit4-multivers-webapi-v1.10.0.yaml -c config.json