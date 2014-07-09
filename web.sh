#!/bin/bash
if [[ $EUID -ne 0 ]]; then
	echo "You must be a root user" 2>&1
	exit 1
fi

if [[ $1 == "html" || $2 == "html" ]]; then
	echo "html"
	cp -a * /var/www/html
else
	echo "www"
	cp -a * /var/www
fi