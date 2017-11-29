date=`date '+%s'`

echo "Backing up under bkup/$date.tar"


dir="/var/www/html/kcp/json/bkup/$date.tar"

tar -c /var/www/html/kcp/json/*.json -f $dir
