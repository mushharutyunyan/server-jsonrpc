## Installation

Clone this repository

```bash
composer install
```
- create .env file in route folder and change database credentials
```bash
php artisan migrate --seed
```
```bash
php artisan passport:install
```
```bash
php artisan passport:client --password
```
- What should we name the password grant client?
    - any name you want
- Which user provider should this client use to retrieve users? [users]:
    - press enter
```bash
Password grant client created successfully.
Client ID: 945cbfe9-eb0b-4e59-91d0-d5ce74ac4a33
Client secret: aRX9QxACKr51QyUi0Hjc6kPb5q9CJedexgESVcpc
```
Credentials need to be added in Client application .env file

```bash
Default username password
Username: client@example.com
Password: password
```



