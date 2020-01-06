#!/bin/sh

docker container stop ft_server
docker image build -t ft_server:1.0 .
docker container prune -f
docker container run --publish 8080:80 --publish 8443:443 --detach --name ft_server ft_server:1.0
