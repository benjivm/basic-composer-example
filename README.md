This example project shows how to install Composer locally and consume an example REST API with the [Guzzle](https://github.com/guzzle/guzzle) client and render the response with [Blade](https://github.com/EFTEC/BladeOne). You need to have PHP installed for this to work.

Here's what you need to do:

**Clone this project somewhere**

`git clone git@github.com:benjivm/basic-composer-example.git`

**Install Composer for local usage**

Either run [these lines](https://getcomposer.org/download/) (listed under *Command-line installation*), in order, in the terminal at our project's root directory to download `composer.phar`, or run the script: `./install-composer.sh` (this [bash script is from Composer](https://getcomposer.org/doc/faqs/how-to-install-composer-programmatically.md)'s website and checks the installer's hash before downloading).

**Install Composer dependencies**

Run this from the terminal in our project's root directory:
`php composer.phar install`

It will install the packages listed in the `composer.json` file, in our case just Guzzle and the BladeOne template engine.

**Check it out**

Now we'll just start up PHP's built in server and check it out:
`php -S localhost:3000 -t public/`

Open [http://localhost:3000](http://localhost:3000) in your browser and you should see Guzzle consuming [this example REST API](https://jsonplaceholder.typicode.com/).

Edit the `index.php` file to see what's going on.