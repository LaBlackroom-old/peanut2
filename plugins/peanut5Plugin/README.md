# About #
Ce plugin à pour but de permettre l'utilisation de html5 dans symfony.

## Création d'une application html5 ##
L'opération pour créer une application html5 n'est pas complexe, il suffit d'activer le plugin puis d'utiliser la tache dédiée,
 reprenant celle créée initialement par symfony avec la ligne de commande suivante :

    $ php symfony peanut:generate-app <app>

Les options sont identiques à celles de la commande generate:app

__Important__
Lors de la création de l'application, l'ensemble des fichiers sont optimisés pour html5. Il faut cependant
supprimer les mêmes fichiers dans le repertoire web (et faire une sauvegarde en cas de modification) ou activer l'overide dans la méthode
copy de la classe `plugins/peanut5plugin/lib/task/appeanutGenerateAppTask.class.php`. Exemple :

    160. $this->getFilesystem()->copy($skeletonDir.'/web/robots.txt', sfConfig::get('sf_web_dir').'/robots.txt', $options(array('override' => true);


