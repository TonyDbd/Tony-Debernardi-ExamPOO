       
                            Partie théorique (10 point)


1) Ecrire une interface qui obligera une classe à implémenter la fonction login prenant en
paramètre un user et un password (0.5 point)
```php
    interface loginInterface {
        public function login($user, $password);
    } 

    class Classe implements loginInterface{ 

        public function login($user, $password){
            $this->user = $user;
            $this->password = $password;
    } ```

2) Citez 6 méthodes magiques. Expliquez à quelle moment elles sont déclenchées et les
paramètres qu’elles prennent. (1.5 points)

    __construct() - crée un nouvel objet à l'aide du new "nom de l'objet"
    __destruct() - peu être appelé implicitement a la fin du script et détruit l'objet
    __set( $name, $value ) - est appelé quand on essaie d'affecter une variable à un attribut qui n'existe pas ou qui est privé (en gros quand on y a pas accès). je cherche à mettre à jour la valeur de cet attribut.
    __get( $name ) - méthode appelée quand on cherche à accéder à un attribut dont on a pas l'accès 
(privé ou protected ou qui n'existe pas).
    __isset( $name ) - méthode appelée quand isset() ou empty() sont appelées sur des propriétés inaccessibles (privées) ou inexistante.
    __unset( $name ) - méthode appelé sur des propriétés inaccessibles (privées) ou inexistante efface $name.

3) Je suis une méthode magique appelé implicitement à la fin d’un script. Qui suis-je ? (1
point)

    __destruct()

4) Je suis une classe qui pourra être hérité mais qui ne pourra pas être instancier (impossible
de faire new ...). Qui suis-je et comment faire pour me créer ? (1 point)

    abstarct class 

    Créer dans le dossier class une class abstract ( qui sera un genre de moule pour toutes les autres "sous-class" qui font appel à elle ). Puis dans la "sous-class" en question rajouter extends.
    ex : class AnimalHerbivore extends Animal

5) Donnez 3 types de visibilité sur un attribut expliquez la différence. (1.5 points)

    Public -> accessible depuis extérieur de la class
    Private -> uniquement accessible depuis l'intérieur de la class
    Protected -> comme private sauf qu'ont peut y accéder via l'héritage en plus

6) Expliquez ce qu’est une exception. Décrire les éléments qui la compose (1 point)

    Il permet de gerer les erreurs / avec un message et du code.
    throw new exception 

7) Dans un modèle MVC quel est le rôle du router. Quelle est la variable super globale qu’il
utilise pour accomplir son rôle ? (1 point)

    Il va appeler les fonctions correspondantes en fonction de paramètres passés dans l’url avec le $_GET

8) Expliquez les avantages de l’utilisation d’un pattern MVC. (1.5 points)

    Une conception claire et efficace grâce à la séparation des données de la vue et du contrôleur.
    Un gain de temps de maintenance et d’évolution du site.
    Une plus grande souplesse pour organiser le développement du site entre différents développeurs (indépendance des données, de l’affichage (webdesign) et des actions).

9) Détaillez les éléments qui composent un pattern MVC (1 point)

    Models -> Class - Interfaces - Manager (CRUD - PDO).
    View -> Assets (images..) - Parts (HTML / CSS / JS ) - Pages PHP.
    Controllers -> DefaultController.php - Controller des classes ( Actions du CRUD ).
