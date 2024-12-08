## Installation

Follow the steps to install "SalesInvoiceSyatem":

- Clone the repository
```
git clone https://github.com/ThushanthSbm/sales_invoices_system
```
- Enter into directory
```
cd sales_invoices_system
```
- Install dependencies
```
composer install
```
```
cp .env.example .env
```
- Generate app key
```
php artisan key:generate
```
- Add MySQL database details in .env file. For sqlite database, create a file in "database" folder named "database.sqlite"
```
php artisan migrate
```
- Add dummy data
```
php artisan db:seed
```
- Add storage link
```
php artisan storage:link
```
- Open .env file and set APP_DEBUG=false
- Run development server
```

php artisan serve
```
- open http://localhost:8000/sales_invoice in your browser


## Default Login
Admin Login : 
- Url : http://localhost:8000/sales_invoice
- username/Email : test1@mail.com
- password : password123

Admin Login :
- Url : http://localhost:8000/sales_invoice
- username/Email : test2@mail.com
- password : password456
