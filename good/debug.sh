#!/usr/bin/env bash

# debug.sh

# run container without making it a daemon - useful to see logging output

docker run \
    --rm \
    -p8088:80 \
    --name="good" \
    -v `pwd`:/home/app \
    good
