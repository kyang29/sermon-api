This is the Sermon API for my Elevation Church interview.

This is for Step 1 and 2 of the ask.

1.) Create a table in a MySQL DB called “sermons" with 3 columns: ID (youtubeID), title and description. Use the data supplied by this feed. 

2.) Create a new LARAVEL API application with an endpoint "/api/sermons/list”. The API should read the records in the sermon table and return the data in JSON format.

Make sure your database settings match with the database that will be storing this database table.

The Database table was created in this migration:
database\migrations\2019_12_11_021409_create_sermons_table.php

Script for creating Sermons table(As Asked)
'''sql
CREATE TABLE `sermons` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
)
'''
Command to migrate is: php artisan migrate --path=database\migrations\2019_12_11_021409_create_sermons_table.php

The data being seeded into the table was created in this seed file:
C:\Users\Kong\Documents\Repos\sermon-api\database\seeds\SermonsTableSeeder.php

Command to seed is: php artisan db:seed --class=SermonsTableSeeder

There is a swagger page that this api application redirects to if viewed on the front-end describing the endpoints and the parameters.

The API has two endpoints: 
/api/Sermons
Gets all sermons

/api/Sermons/List
Gets the sermon list(This has two optional parameters to implement paging)

Again, Thank you for allowing me to show a little bit of who I am with this opportunity.

If there are any questions that I can answer to make you feel more comfortable with me as a candidate, feel free to contact me.
