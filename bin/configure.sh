clear
DIR=`php -r "echo realpath(dirname(\\$_SERVER['argv'][0]));"`
cd $DIR

echo "Your name (complete)?"
read NAME

echo "Project name?"
read PROJECT

echo "Database server?"
read DB

echo "Database user?"
read DBUSER

echo "Database password?"
read DBPASS

if [ -e config/databases.yml-dist ]
then
    cp config/databases.yml-dist config/databases.yml
    DIR=`php symfony configure:database "mysql:host=$DB;dbname=$PROJECT" "$DBUSER" "$DBPASS"`
fi

if [ -e config/properties.ini-dist ]
then
    cp config/properties.ini-dist config/properties.ini
    DIR=`php symfony configure:name "$PROJECT"`
fi

DIR=`php symfony configure:author "$NAME"`
DIR=`php symfony project:permissions`
DIR=`php symfony plugin:publish-assets`
DIR=`php symfony cc`