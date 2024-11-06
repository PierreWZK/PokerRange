# Lancer le projet

Pour démarrer Poker Range en local, suivez les étapes ci-dessous.

## Prérequis

Assurez-vous que les éléments suivants sont installés sur votre machine :
- **PHP** (version 8.0 ou plus)
- **Composer** (gestionnaire de dépendances PHP)
- **Node.js** et **npm** (pour la gestion des packages front-end, si nécessaire)
- **MySQL** ou autre base de données compatible (si nécessaire)

## Étapes d'installation

1. **Cloner le dépôt**  
   Clonez le projet depuis GitHub :
   ```bash
   git clone https://github.com/username/PokerRange.git
   cd PokerRange
   ```

2. **Installer les dépendances PHP avec Composer**  
   Exécutez la commande suivante pour installer les dépendances back-end de Laravel :
   ```bash
   composer install
   ```

3. **Configurer les variables d'environnement**  
   Dupliquez le fichier `.env.example` pour créer un fichier `.env`, puis ouvrez-le pour définir les configurations nécessaires :
   ```bash
   cp .env.example .env
   ```

   - Configurez la connexion à votre base de données dans le fichier `.env` (DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD).
   - Assurez-vous également de définir `APP_KEY` en exécutant la commande :
     ```bash
     php artisan key:generate
     ```

4. **Migrer la base de données**  
   Pour créer les tables nécessaires, exécutez les migrations :
   ```bash
   php artisan migrate
   ```

5. **Lancer le serveur de développement**  
   Démarrez le serveur Laravel avec la commande suivante :
   ```bash
   php artisan serve
   ```

6. **Accéder à l’application**  
   Ouvrez votre navigateur et rendez-vous à l’adresse suivante :
   ```
   http://localhost:8000
   ```

Votre projet Poker Range est maintenant opérationnel et prêt à être exploré ! Vous pouvez également exécuter des tests et gérer vos configurations dans le fichier `.env` selon vos besoins.

--- 

Avec cette section, les utilisateurs pourront configurer et démarrer le projet facilement.
