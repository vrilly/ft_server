#!/bin/sh

service mysql start
sleep 3
mysql  < /tmp/wordpress.sql
sleep 3
service mysql stop
