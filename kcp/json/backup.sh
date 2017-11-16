date=`date '+%s'`

echo "Backing up under bkup/$date/"


dir="/var/www/html/kcp/json/bkup/$date/"
mkdir $dir

cp /var/www/html/kcp/json/*.json $dir
