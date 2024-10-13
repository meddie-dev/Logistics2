set -e

echo "Deploying..."

(php artisan down --message="Deploying...") || true

git pull origin master


php artisan up

echo "Deployed!"