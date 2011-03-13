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
    sed -i '' "s/host=/host=$DB/g" config/databases.yml
    sed -i '' "s/dbname=/dbname=$PROJECT/g" config/databases.yml
    sed -i '' "s/username: /username: $DBUSER/g" config/databases.yml
    sed -i '' "s/password: /password: $DBPASS/g" config/databases.yml
fi

if [ -e config/properties.ini-dist ]
then
    cp config/properties.ini-dist config/properties.ini
    sed -i '' "s/name=/name=$PROJECT/g" config/properties.ini
fi

DIR=`php symfony configure:author "$NAME"`
DIR=`php symfony project:permissions`
DIR=`php symfony cc`