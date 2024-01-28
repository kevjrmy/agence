1. Create the model Property for our real estate agency web:
  * the '-m' flag for 'model'
  `php artisan make:model -m Property`

2. Set Mysqlite as database:
  go to '.env' file and specify mysql as database -> `DB_CONNECTION=sqlite`
  (if problems try -> `sudo apt-get install php-sqlite3` and  `php -m | grep pdo_sqlite`)

3. Create our models:
  go to 'database/migration/{file}' and add the fields to our new model
  exemple -> `$table->string('title');`
  now run migrate cmd -> `php artisan migrate`

4. Regroup our admin board in '/routes/web.php':
  `Route::prefix('admin')->name('admin.')->group(function () { // code });`

5. Create our property controller with namespace Admin:
  * the double "\" is for escaping the backslash in our bash cmd
  * the '-r' flag for 'resource'
  `php artisan make:controller Admin\\PropertyController -r`

6. Create our request for all the property forms:
  `php artisan make:request Admin\\PropertyFormRequest`
  go to 'app/Http/Requests/{namespace}/{file}' and authorise it (`return true;`)
  see function rules() and specify form rules validation -> `'title' => ['required', 'min:2'],`