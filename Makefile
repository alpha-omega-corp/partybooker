
db_create:
	docker-compose up -d

db_fresh:
    php artisan migrate:fresh --path database/migrations/done/ && php artisan migrate && php artisan db:seed

run:
	php artisan --env dev serve

dev:
    npm run dev
