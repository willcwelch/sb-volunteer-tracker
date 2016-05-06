# sb-volunteer-tracker
A web app for the Stony Brook University community to track volunteer data for projects of all sizes and increase awareness of service work.

## Installation
This project is based off of the [CakePHP](http://book.cakephp.org/3.0/en/installation.html) MVC framework.

1. Set up a LAMP server and install [Composer](https://getcomposer.org), the PHP dependency manager.
2. Clone this repository, move into the root directory and run `composer install`.
3. Create a MySQL database and run the included database.sql file to set up the requisite tables.
4. Update the `Datasources.default` array in config/app.php with your database configuration.
5. Run `bin/cake server` in the root directory to test the app in your development environment. To deploy to a production server, follow CakePHP's [instructions](http://book.cakephp.org/3.0/en/deployment.html).

## Documentation
The specification for this website is described in the docs folder. Install [MkDocs](http://www.mkdocs.org) to compile the Markdown documentation into a website.

## Dependencies
This app uses [Bootstrap v3.3.6](http://getbootstrap.com) and [jQuery v2.2.3](http://jquery.com). You can update the versions by replacing the the files in the js and css folders in webroot.