## SETUP

- Install `php` `php-dom` `php-intl` `php-curl` `php-zip`
- Install [composer](https://getcomposer.org/download/)

### Install dependencies

```
composer install
npm install
```

### Create .env file

- Keys in **.env.example**
- Production environment file

```
ssh gapf_nanstis@gapf.ftp.infomaniak.com
nano pblive/.env
```

### Database

Create container

```
docker-compose up -d
```

Run migrations

```
php artisan migrate:fresh --path database/migrations/done/ && php artisan migrate && php artisan db:seed
```

### Run

```
npm run dev
php artisan serve
```



