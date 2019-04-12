![Logo Perriercreatif](http://perriercreatif.free.fr/images/logoperriercreatiffinal.png)  
by Perriercreatif

Module Simplon Online
========


Blog PHP avec une architecture MVC (Modèle - Vue - Contrôleur) et en OOP (Object Oriented Programming)!


Sommaire
--------
* Notice d’utilisation


Notice d’utilisation
--------------------
* Placer le dossier dans votre dossier www puis activer votre serveur (WAMP, LAMP...)

* Créer  votre base de données

![image01](blogFromScratch/images/readme01.png)

* Importer post.sql 

![image02](blogFromScratch/images/readme02.png)

* Changer les ligne suivante avec vos données personnel le fichier BDDConnect.php dans le dossier Controller:

![image03](blogFromScratch/images/readme03.png)

```
class BDDconnect
{
    ...
    private $IdMyAdmin = 'vosIdentifiantPhpMyAdmin'; 
    private $PwdMyAdmin = 'votreMotDePasse';
    ...
```

* Tapez localhost dans votre navigateur
  
  ![image04](blogFromScratch/images/readme04.png)

* Allez chercher le dossier blogFromScratch

![image05](blogFromScratch/images/readme05.png)

* Cliqué sur Dashboard et connectez-vous avec ces identifiants (Vous pouvez les changer dans le dossier Controller le fichier login.php)
![image06](blogFromScratch/images/readme06.png)

```
    define('LOGIN','superelien');
    define('PASSWORD','tarzan');

```

Voilà maintenant bous pouvais explorer le blog créé, modifier où supprimer à votre guise.

