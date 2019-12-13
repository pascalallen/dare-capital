## Dare Business Capital

### Deployment
1. `cp .env.example .env`
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
3. `composer install`
4. `php artisan key:generate`
5. `php artisan config:clear`
6. `php artisan cache:clear`
7. Create symbolic link from `public/storage` and `storage/app/public`: `php artisan storage:link`
8. `php artisan migrate --seed`
9. `npm install && npm run production`

### Seed users
`php artisan db:seed --class=UsersTableSeeder`
