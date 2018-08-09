#!/usr/bin/env bash

IMAGE_NAME="codelytv-bootstrap"

if [[ "$(docker images -q ${IMAGE_NAME}:latest 2> /dev/null)" == "" ]]; then
  docker build -t ${IMAGE_NAME} -f docker/php.dockerfile ./docker
fi

if [[ ! -a vendor ]]; then
    docker run -v $(pwd):/app -t --rm ${IMAGE_NAME} sh -c "composer install"
fi

docker run -it --rm -v $(pwd):/app ${IMAGE_NAME} sh
