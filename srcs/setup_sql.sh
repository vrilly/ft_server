#!/bin/sh

mysqld --daemonize
sleep 10
mysql  < /tmp/wordpress.sql
