# salesdock

In order to run this project for testing. Please download and extract the project,  now install the php packages using the command<b> "composer install"</b>.
then <b> create a .env file </b> in the root folder (make a copy of .env.example and rename it).Now <b>run the command "php artisan key:generate" </b>in the root folder via termail. Next you need to <b>create a database</b> and <b>add credentials in .env</b> (DB_DATABASE=databasename DB_USERNAME=username DB_PASSWORD=password). after that execute the migration command in the root folder via termail : <b>"php artisan migrate"</b>..after that to add test datas to table execute the below commands : 

<b>"php artisan tinker"</b> then <b>"Lead::factory()->count(10)->create();" , "Relation::factory()->count(10)->create();", "Sale::factory()->count(10)->create();"</b>, now you can close tinker and serve the project by executing the command :<b>"php artisan serve"</b>

now open the coming up url, click on any action urls and and that perticular data will be added to sales table.

HOW TO ADD NEW MODEL

in App\Services\InjectorService you can add new models by adding the model and variable in the add function (same as existing models.)
!important - make sure variable is available in request.
    


