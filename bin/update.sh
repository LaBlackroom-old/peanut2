#!/bin/sh

DIR=`php -r "echo realpath(dirname(\\$_SERVER['argv'][0]));"`
VENDOR=$DIR/lib/vendor
PLUGINS=$DIR/plugins
GENERATOR=$DIR/data

# initialization
if [ "$1" = "--install" ]; then
    rm -rf $VENDOR/symfony
    rm -rf $PLUGINS
    rm -rf $GENERATOR/generator

    rm -rf cache && sudo rm -Rf log && rm -Rf web/uploads
    mkdir cache && mkdir log && mkdir web/uploads
    chmod 777 cache && chmod 777 log && chmod 777 web/uploads
fi


##
# @param destination directory (e.g. "doctrine")
# @param URL of the git remote (e.g. git://github.com/doctrine/doctrine2.git)
# @param revision to point the head (e.g. origin/HEAD)
#
install_git()
{
    INSTALL_DIR=$1
    SOURCE_URL=$2
    BRANCH=$3
    REV=$4

    if [ -z $REV ]; then
        REV=origin/HEAD
    fi

    if [ ! -d $INSTALL_DIR ]; then
        git clone $SOURCE_URL $INSTALL_DIR 
    fi

    cd $INSTALL_DIR
    git fetch origin
    git reset --hard $REV
    git checkout -b $BRANCH
    git pull origin $BRANCH
    cd ..
}

# vendor
mkdir -p $VENDOR && cd $VENDOR


# symfony
install_git symfony git://github.com/vjousse/symfony-1.4.git master


cd ../..


# plugins
mkdir -p $PLUGINS && cd $PLUGINS

# peanutHtml5Plugin
install_git peanutHtml5Plugin git://github.com/pocky/peanutHtml5Plugin.git master

# peanutAssetPlugin
install_git peanutAssetPlugin git://github.com/LaBlackroom/peanutAssetPlugin.git master

# sfDoctrineGuardPlugin
install_git sfDoctrineGuardPlugin git://github.com/pocky/sfDoctrineGuardPlugin.git master

# sfTaskExtraPlugin
install_git sfTaskExtraPlugin git://github.com/annismckenzie/sfTaskExtraPlugin.git master

# peanutCorporatePlugin
install_git peanutCorporatePlugin git://github.com/LaBlackroom/peanutCorporatePlugin.git master

# csDoctrineActAsSortablePlugin
install_git csDoctrineActAsSortablePlugin git://github.com/pocky/csDoctrineActAsSortablePlugin.git master

# sfCKEditorPlugin
install_git sfCKEditorPlugin git://github.com/weaverryan/sfCKEditorPlugin.git master

# peanutFormPlugin
install_git peanutFormPlugin git://github.com/LaBlackroom/peanutFormPlugin.git master

# peanutSeoPlugin
install_git peanutSeoPlugin git://github.com/pocky/peanutSeoPlugin.git master

cd ../..


# Admin generator
mkdir -p $GENERATOR && cd $GENERATOR
install_git generator git://github.com/pocky/peanutGenerator.git master


cd ../..