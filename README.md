# LES TESTS

- Utiliser PHP CLI (scripts et tests PHP ok)
- Vérifier si Composer est installé globalement `composer --version` (si non `composer init`)
- Installer PHPUnit : `composer require --dev phpunit/phpunit`
- Lancer le test: `./vendor/bin/phpunit tests/Unit`

---

## 1. Test unitaire simple

- Créer un fichier de test nommé `CalculatorTest.php` 
- Utiliser PHPUnit pour créer une méthode de test `testAdd()`
- Vérifier que l'appel à add(2, 3) retourne 5

- **Résultat :**
```
PHPUnit 11.5.19 by Sebastian Bergmann and contributors.
Runtime:       PHP 8.2.0
.                                                                  1 / 1 (100%)
Time: 00:00.008, Memory: 8.00 MB
OK (1 test, 1 assertion)
```
---

## 2. Test unitaire avec des conditions 

- Créer une méthode de test `testDivide()` dans `CalculatorTest.php` 
- Ajoute un test pour vérifier que divide(6, 2) retourne 3
- Ajoute un test pour vérifier qu'une exception est levée pour divide(5, 0) `testFailedDivideByZero()`

---

## 3. Test unitaire avec mock 

- Écrire un test unitaire pour la classe `UserService` en utilisant un mock pour la classe `User` 
- afin de vérifier que la méthode `getUserDetails()` retourne les valeurs correctes

---


 