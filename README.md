## Dare Business Capital

### Deployment
1. Copy the environment file: `cp .env.example .env`
2. Update `.env` variables:
    ```
    APP_NAME="Dare Business Capital"
    APP_ENV=production
    ...
    APP_DEBUG=false
    APP_URL=https://darebizcapital.com
    ...
    DB_DATABASE=dare-capital
    DB_USERNAME=<db-username>
    DB_PASSWORD=<db-password>
    ```
3. Install PHP dependencies: `composer install`
4. Auto-generate key for the project: `php artisan key:generate`
5. Clear cached config code, such as `.env` variables that may have changed: `php artisan config:clear`
6. Clear view and route cache: `php artisan cache:clear`
7. Create symbolic link from `public/storage` and `storage/app/public`: `php artisan storage:link`
8. Run migrations and seed the database: `php artisan migrate --seed`
9. Install JavaScript dependencies and build for production: `npm install && npm run production`

### Seed users
Seed site users: `php artisan db:seed --class=UsersTableSeeder`
