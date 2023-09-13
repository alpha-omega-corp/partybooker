
db_create:
	docker-compose up -d

db_fresh:
    php artisan --env dev migrate:fresh --path database/migrations/done/ && php artisan --env dev migrate && php artisan db:seed

run:
	php artisan --env dev serve

dev:
    npm run dev
