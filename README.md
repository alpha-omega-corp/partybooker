## SETUP

- Install `php` `php-dom` `php-intl` `php-curl` `php-zip` (`brew install php` on mac)
- Install [composer](https://getcomposer.org/download/)

### Install dependencies

```
composer install
npm install
```

### Create .env file

- Create .env file, copied from **.env.example**. This should be sufficient for running the app locally.

- Access to production environment file via ssh, if required (get password from Nicho):
```
ssh gapf_nanstis@gapf.ftp.infomaniak.com
nano pblive/.env
```

### Database

It is necessary to create a local copy of the production db to run the app locally

1. Create Docker container

```
docker-compose up -d
```

2. Run migrations from production db

```
php artisan migrate:fresh --path database/migrations/done/ && php artisan migrate && php artisan db:seed
```

### Run

```
npm run dev
php artisan serve
```



