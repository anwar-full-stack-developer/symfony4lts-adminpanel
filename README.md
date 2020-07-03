# Symfony (v4.4) LTS - Admin Panel
This is an simple applicaiotn using symfony veriosn v4.4. This application inclues following features
- User Signup
- User Login
- User forgot password
- Admin Panel / Backend Panel
- Bootstrap 4 integration
- Admin LTE Theme integration
- Fully Ready admin panel

# Installation
Clone git repo

```
git clone https://github.com/ranaars/symfony4lts-adminpanel.git
```

Install dependencies:
```
composer install
```

Create database:
```
php bin/console doctrine:database:create
```

Run database migration
```
php bin/console doctrine:migrations:migrate
```

Run Server / project

```
symfony server:start -d --no-tls --allow-http
```

# Run Web / review

```
http://127.0.0.1:8000/
```
