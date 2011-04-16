#!/bin/sh

DIR=`php -r "echo realpath(dirname(\\$_SERVER['argv'][0]));"`
VENDOR=$DIR/lib/vendor
PLUGINS=$DIR/plugins
GENERATOR=$DIR/data/generator

# initialization
if [ "$1" = "--reinstall" ]; then
    rm -rf $VENDOR
    rm -rf $PLUGINS

    rm -rf cache/* && sudo rm -Rf log/*
    mkdir cache && mkdir log
    chmod 777 cache && chmod 777 log
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
    REV=$3

    if [ -z $REV ]; then
        REV=origin/HEAD
    fi

    if [ ! -d $INSTALL_DIR ]; then
        git clone $SOURCE_URL $INSTALL_DIR
    fi

    cd $INSTALL_DIR
    git fetch origin
    git reset --hard $REV
    cd ..
}

# vendor
mkdir -p $VENDOR && cd $VENDOR


# symfony
install_git symfony git://github.com/vjousse/symfony-1.4.git


cd ../..


# plugins
mkdir -p $PLUGINS && cd $PLUGINS

# peanutHtml5Plugin
install_git peanutHtml5Plugin git://github.com/pocky/peanutHtml5Plugin.git

# sfDoctrineGuardPlugin
install_git sfDoctrineGuardPlugin git://github.com/pocky/sfDoctrineGuardPlugin.git

# sfTaskExtraPlugin
install_git sfTaskExtraPlugin git://github.com/annismckenzie/sfTaskExtraPlugin.git

# csDoctrineActAsSortablePlugin
install_git csDoctrineActAsSortablePlugin git://github.com/pocky/csDoctrineActAsSortablePlugin.git

# sfCKEditorPlugin
install_git sfCKEditorPlugin git://github.com/weaverryan/sfCKEditorPlugin.git

# peanutFormPlugin
install_git peanutFormPlugin git@github.com:pocky/peanutFormPlugin.git

cd ../..


# Admin generator
mkdir -p $GENERATOR && cd $GENERATOR
install_git sfDoctrineModule git://github.com/pocky/peanutGenerator.git


cd ../..