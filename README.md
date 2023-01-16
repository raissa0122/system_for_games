The "Game System" project, created on Laravel is designed to provide users with information about the most popular games, their genres and creators.

The project consists of several pages, of which:

- Games page: 
   providing information about the games, their pictures, their creation date, genre and creator;

- Creators Table:
    providing information on the name of the creators and the year of the start of the career;

- Genre Table:
     providing genre name information

- Admin panel that only the authenticated admin can access.

The project has a search engine, through which you can search for games by genre, creator and name.

Relationships between tables:
Games->Genres ---> One to many
Games->Creators ---> One to many

Seeders have been created, with information for each table.

There is a downloaded template that was developed for laravel and divided into several views



The application is developed with Laravel Backpack
