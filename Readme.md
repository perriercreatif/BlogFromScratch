![Logo Perriercreatif](http://perriercreatif.free.fr/images/logoperriercreatiffinal.png)  
by Perriercreatif

Module Simplon Online
========


PHP blog with an MVC architecture (Model - View - Controller) and OOP (Object Oriented Programming)!


Summary
--------
* Operating instructions


instructions
--------------------
* Place the folder in your www folder and then activate your server (WAMP, LAMP...)

* Create your database

![image01](blogFromScratch/images/readme01.png)

* Import post.sql 

![image02](blogFromScratch/images/readme02.png)

* Change the following lines with your personal data the file BDDConnect.php in the Controller folder:

![image03](blogFromScratch/images/readme03.png)

```
class BDDconnect
{
    ...
    private $IdMyAdmin = 'yourPhpMyAdminID'; 
    private $PwdMyAdmin = 'yourPassword';
    ...
```

* Type localhost in your browser
  
  ![image04](blogFromScratch/images/readme04.png)

* Go get the blogFromScratch folder

![image05](blogFromScratch/images/readme05.png)

* Click on Dashboard and connect with these login details (You can change them in the Controller folder in the login.php file)
![image06](blogFromScratch/images/readme06.png)

```
    define('LOGIN','superelien');
    define('PASSWORD','tarzan');

```

Now here you could explore the blog created, modify or delete as you wish.

