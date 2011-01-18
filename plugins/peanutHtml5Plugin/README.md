# About #
Ce plugin à pour but de permettre l'utilisation de html5 dans symfony.

## Todo ##
- Ajouter tous les validateurs pour les widgets actuels (au 18 Janvier 2011)
- Ajouter les alternatives JS (calendriers par exemple) afin d'offrir un support le plus large possible
- Faire un check des options qui ne pourraient pas être utilisées pour un type de widget et les désactiver.
- S'éclater un peu avec les nouvelles API html5

## Création d'une application html5 ##
L'opération pour créer une application html5 n'est pas complexe, il suffit d'activer le plugin puis d'utiliser la tache dédiée,
 reprenant celle créée initialement par symfony avec la ligne de commande suivante :

    $ php symfony peanut:generate-app <app>

Les options sont identiques à celles de la commande generate:app

__Important__
Lors de la création de l'application, l'ensemble des fichiers sont optimisés pour html5. Il faut cependant
supprimer les mêmes fichiers dans le repertoire web (et faire une sauvegarde en cas de modification) ou activer l'override dans la méthode
copy de la classe `plugins/peanut5plugin/lib/task/appeanutGenerateAppTask.class.php`. Exemple :

    160. $this->getFilesystem()->copy($skeletonDir.'/web/robots.txt', sfConfig::get('sf_web_dir').'/robots.txt', $options = array('override' => true);


## Liste des widgets ##
Voici la liste des widgets :

- sfWidgetFormHtml5Input
- sfWidgetFormHtml5InputColor
- sfWidgetFormHtml5InputDate
- sfWidgetFormHtml5InputDateTime
- sfWidgetFormHtml5InputDateTimeLocal
- sfWidgetFormHtml5InputEmail
- sfWidgetFormHtml5InputFile
- sfWidgetFormHtml5InputMonth
- sfWidgetFormHtml5InputNumber
- sfWidgetFormHtml5InputPassword
- sfWidgetFormHtml5InputRange
- sfWidgetFormHtml5InputSearch
- sfWidgetFormHtml5InputTel
- sfWidgetFormHtml5InputText
- sfWidgetFormHtml5InputTime
- sfWidgetFormHtml5InputWeek
- sfWidgetFormHtml5InputUrl


## Liste des validateurs ##

- sfValidatorHtml5Color
- sfValidatorHtml5Email

