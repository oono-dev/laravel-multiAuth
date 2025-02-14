## Laravel+React  MultiAuth boiler template

This is Laravel boiler template for multiauth. The overview is below.

- Laravel11
- Breeze
- react
- vite
- Inertia.js

Using this repository, You can build multiauth appclication faster!<br>
All the necessary frameworks, such as guards, controllers, migration, and routes have been set up.

## How to start
At first, exec command below.
```
composer install && npm install
```
then, start container
```
./vendor/bin/sail up -d
```
and start vite
```
npm run dev
```
next, migrate
```
./vendor/bin/sail artisan migrate
```
you can access http://localhost.

## Otehr info
generate user and admin data
```
./vendor/bin/sail artisan db:seed
```
then, you can login as a user and as an admin.

#### user login
http://localhost/login
#### admin login
http://localhost/admin/login

## Contributing
Contributions are always welcome! If you have any ideas, suggestions, fixes, feel free to contribute. You can do that by going through the following steps:

1. Clone this repo
2. Create branch: `git checkout -b your-feature`
3. Make some changes
4. Test your changes
5. Push your branch and open a Pull Request
