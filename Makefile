db_create:
	docker-compose up -d

db_reset:
	php artisan migrate:fresh --seed

seo_health:
	npx unlighthouse

sitemap:
	php artisan app:create-sitemap all

htaccess_listing:
	php artisan app:create-sitemap listing

stripe_hook:
	stripe listen --forward-to localhost:8000/stripe/webhook
