## BACKEND PROJET 


## Server Requirements

- PHP >= 8.0

### Database Requirements

- MySQL 5.6+
- PostgreSQL 9.4+
- SQLite 3.8.8+
- SQL Server 2017+

## Installation
### 1. Clone the project

```bash
git clone https://github.com/Ken-dia/adacy-mini-projet-flux-rss-api.git
```
### 2. Installation Composer Dependencies

Vous devez installer toutes les dépendances du projet avec **Composer***. C'est ce qui installe réellement Laravel lui-même, parmi d'autres packages nécessaires pour démarrer.

```bash
php composer install
```
### 3. Créez une copie de votre fichier .env

Les fichiers .env ne sont généralement pas soumis au contrôle de code source pour des raisons de sécurité. Mais il existe un .env.example qui est un modèle du fichier .env que le projet attend de nous. Nous allons donc faire une copie du fichier .env.example et créer un fichier .env que nous pourrons commencer à remplir pour faire des choses comme la configuration de la base de données dans les prochaines étapes.

```bash
cp .env.example .env
```
Cela créera une copie du fichier .env.example dans votre projet et nommera simplement la copie .env.
### 6. Créer une base de données vide pour l'application


### 8. Dans le fichier .env, ajoutez les informations de la base de données pour permettre à Laravel de se connecter à la base de données

Dans le fichier .env, remplissez les options DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME et DB_PASSWORD pour correspondre aux informations d'identification de la base de données que vous venez de créer. Cela nous permettra d'exécuter des migrations et d'amorcer la base de données à l'étape suivante.
#### SQLite Configuration

```bash
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database.sqlite
```
Pour activer les contraintes de clé étrangère pour les connexions SQLite, vous devez définir la variable d'environnement DB_FOREIGN_KEYS sur true :

```bash
DB_FOREIGN_KEYS=true
```

#### MYSQL Configuration

```bash
DB_CONNECTION=mysql
DB_HOST=hostname
DB_PORT=3306
DB_DATABASE=Your database name
DB_USERNAME=Your database username
DB_PASSWORD=Your database password
```

#### Postgresql Configuration

```bash
DB_CONNECTION=pgsql
DB_HOST=hostname
DB_PORT=5432
DB_DATABASE=Your database name
DB_USERNAME=Your database username
DB_PASSWORD=Your database password
```

### 9. Migratation de la base de donnée

Une fois vos informations d'identification dans le fichier .env, vous pouvez maintenant migrer votre base de données

```bash
php artisan migrate
```

### 10. Seed la base de donnée

Une fois les migrations terminées et que vous disposez de la structure de base de données requise, vous pouvez amorcer la base de données (ce qui signifie y ajouter des données factices).

```bash
php artisan db:seed ArticleSeeder
```
### 11. Development server
```bash
php artisan server --port=8000
```
