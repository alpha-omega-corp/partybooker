db_create:
	docker-compose up -d

db_reset:
	php artisan migrate:fresh --seed

seo:
	npx unlighthouse --site partybooker.ch

stripe_hook:
	stripe listen --forward-to localhost:8000/stripe/webhook
