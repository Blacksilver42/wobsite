cd /var/www/html/git;

dirs=`ls -lF | grep '/' | awk '{print $9}'`

echo '$dirs:' $dirs

for dir in $dirs; do
	echo -n "$dir -- "
	cd $dir
	git pull
	cd ..
done
