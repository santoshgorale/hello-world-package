# hello-world-package

# Step to use the package 
1. Create A New Folder.
2. open cmd/git bash and run "composer require santosh/hello-world-package" command.
3. create new PHP file and paste below code in the file.
4. run index.php.

require_once './vendor/autoload.php';
$objHelloWorld = new \HelloWorld\HelloWorld();
echo  $objHelloWorld->display();
