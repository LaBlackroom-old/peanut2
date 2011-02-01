# About #
Ce plugin à pour but de permettre l'utilisation de html5 dans symfony.

## Todo ##
- Ajouter un support JS pour input week
- S'éclater un peu avec les nouvelles API html5
- Ajouter un widget pour datalist

## Warning ##
Le support des html5forms est encore aléatoire : Chrome/Chromium, Safari, Firefox 4 et Opéra 10.x ne rendent pas les formulaires de la même
façon alors pensez à tester le tout (validation comprise).

Il y a également un parti pris avec ce plugin, faire en sorte que le developpeur ne puisse pas générer un formulaire avec des attributs html invalide.
Le mécanisme des options de symfony a donc été transposé aux attributs et une méthode pour désactiver un attribut. Le tout est visible dans
sfWidgetFormHtml5Input

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
- sfValidatorHtml5Date
- sfValidatorHtml5DateTime
- sfValidatorHtml5DateTimeLocal
- sfValidatorHtml5Month
- sfValidatorHtml5Time
- sfValidatorHtml5Week


## Liste des helpers html5 ##

- html5_javascript_include_tag()
- html5_stylesheet_tag()
- use_html5_stylesheet()
- use_html5_javascript()
- get_html5_javascripts()
- include_html5_javascripts()
- get_html5_stylesheets()
- include_html5_stylesheets()
- get_html5_javascripts_for_form()
- include_html5_javascripts_for_form()
- use_html5_javascripts_for_form()
- get_html5_stylesheets_for_form()
- include_html5_stylesheets_for_form()
- use_html5_stylesheets_for_form()
