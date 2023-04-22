# Project Name

## Steps to setup project in local

* Clone the project in your computer from github

* Create `.env` file using this command -
```composer run post-root-package-install```

* Generate artisan key for project - ```composer run post-create-project-cmd```

* Update database settings in `.env` file

* Install composer packages - ```composer install```

* Install node packages - ```npm install```

* Generate storage link - ```php artisan storage:link```

* Run migration on the database along with seeder to feed dummy data - ```php artisan migrate:fresh --seed```

* Run the project server - ```php artisan serve```

* Run the frontend server in watch mode - ```npm run watch```
