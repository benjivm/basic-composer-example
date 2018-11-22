This example project shows how to install Composer locally and consume an example REST API with the Guzzle client. You need to have PHP installed for this to work.

Here's what you need to do:

### Clone this project somewhere
`git clone git@github.com:benjivm/basic-composer-example.git`

### Install Composer for local usage
Run [these lines](https://getcomposer.org/download/) (listed under *Command-line installation*), in order, in the terminal at our project's root directory to download `composer.phar`.

### Install Composer dependencies
Run from the terminal in our project's root directory:
`php composer.phar install`

### Check it out
Now we'll just start up PHP's built in server and check it out:
`php -S localhost:3000`

Open [http://localhost:3000]() in your browser and you should see Guzzle consuming [this example REST API](https://jsonplaceholder.typicode.com/).

Edit the `index.php` file to see what's going on.