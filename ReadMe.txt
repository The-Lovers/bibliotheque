# bibliotheque

Après avoir faire le clone du projet, suis les étapes :

1- Installation des dépendances
	composer install

2- Créer le fichier .env
	cp .env.example .env

3- Puis ouvre .env et configure au minimum :
	APP_NAME=Laravel
	APP_ENV=local
	APP_KEY=
	APP_DEBUG=true
	APP_URL=http://localhost

	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=nom_db
	DB_USERNAME=root
	DB_PASSWORD=
	
4- Générer la clé de l’application
	php artisan key:generate
	
5- Installer les dépendances front (si présentes)
	Regarde s’il y a un package.json; s'il est présent alors exécute ces commandesn sinon c'est pas utile (pour ce cas c'est pas nécessaire, donc ne les exécute pas)
		npm install
		npm run dev

6- Migrations & données
	php artisan migrate
	
7- Si le projet utilise des seeders (ce qui n'est pas le cas pour celui-ci)
	php artisan db:seed
	
NB: la commande qui lance à la fois les migrations et les seed est :
	php artisan migrate --seed
	
8- Vider le cache (très fréquent après clone)
	php artisan optimize:clear
	
9- Lancer le serveur
	php artisan serve
	
		
