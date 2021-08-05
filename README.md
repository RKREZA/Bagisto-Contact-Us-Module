# Bagisto-Contact-Us-Module
 Bagisto Contact Us Module 1.0.

### Requirements

* **Bagisto**: 1.1 or Higher

### Installation and Configuration

##### a. Download & Extract the contents of zip

##### b. Create folder "RKREZA" inside "packages" folder & copy the "Contact" folder inside it

##### c. Go to config\app.php & add "RKREZA\Contact\Providers\ContactServiceProvider::class" (without double quotation) inside 'providers'

##### d. Go to config\concord.php & add "\RKREZA\Contact\Providers\ModuleServiceProvider::class" (without double quotation) inside 'modules'

##### e. Go to composer.json & add "RKREZA\\Contact\\": "packages/RKREZA/Contact/src" inside 'autoload' -> 'psr-4'

##### f. Run the following command
		~~~
		composer dump-autoload
		php artisan migrate
		php artisan config:cache
		php artisan view:cache
		php artisan route:cache
		~~~

##### g. Now, you are good to go. Access the contact form at 'yourdomain.com/contact' & Messages list in admin panel at 'yourdomain.com/admin/contact'
