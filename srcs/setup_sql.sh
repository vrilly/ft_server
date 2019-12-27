#!/bin/sh

service mysql start
sleep 1
mysql  < /tmp/wordpress.sql
sleep 1
service mysql stop
