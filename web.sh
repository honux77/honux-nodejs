if [[ $EUID -ne 0 ]]; then
	echo "You must be a root user" 2>&1
	exit 1

if [[ $last == "html" ]]; then
	echo "html"
	cp -a * /var/www/html
else
	echo "html"
	cp -a * /var/www
fi
