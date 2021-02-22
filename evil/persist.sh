#!/usr/bin/env bash

# persist.sh

# run container without making it a daemon - useful to see logging output
# we are adding a named volume for /data in the container so the
# counter persists between runs.

docker run \
    --rm \
    -p8087:80 \
    --name="evil" \
    -v `pwd`:/home/app \
    -v name:/data \
    evil
