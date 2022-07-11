# salesdock

In order to run this project for testing. Clone this project to local,then <b> create a .env file </b> in the root folder (make a copy of .env.example and rename it).Now <b>run the command "php artisan key:generate" </b>in the root folder via termail. Next you need to <b>create a database</b> and <b>add credentials in .env</b> (DB_DATABASE=databasename DB_USERNAME=username DB_PASSWORD=password). after that execute the migration command in the root folder via termail : <b>"php artisan migrate"</b>. now install the php packages using the command<b> "composer install"</b>.after that to add test datas to table execute the below commands : 

<b>"php artisan tinker"</b> then <b>"SubscriptionProduct::factory()->count(100)->create();"</b>, now you can close tinker and serve the project by executing the command :<b>"php artisan serve"</b>

open the comming up url and you will be able to see the filtered data.

# How to add new rule

first create a filter rule class in App\Rules; .For reference or sample check the existing rules in this directory.
in order to apply this filter add new rule class and methods into $rules array of app/Http/Controllers/HomeController.php
$rules[] = [class RuleClass, array ruleMethods]
arguments can be appended to method name using ':' 
exmaple 
     $rules[] = [DownloadSpeedRule::class, ['greaterThan:100', 'lessThan:200']]; 


