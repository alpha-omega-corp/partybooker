stripe_hook:
	stripe listen --forward-to localhost:8000/stripe/webhook

db_create:
	docker-compose up -d

db_fresh:
    php artisan migrate:fresh --path database/migrations/done/ && php artisan migrate && php artisan db:seed

seo:
	npx unlighthouse --site partybooker.ch
