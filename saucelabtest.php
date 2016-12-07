<?php
  // Setup: $ php composer.phar require facebook/webdriver

    require_once('vendor/autoload.php');
    use Facebook\WebDriver\Remote\RemoteWebDriver;
    use Facebook\WebDriver\WebDriverBy;

    printf('saucelab identifier: '.getenv('SC_IDENTIFIER'));
    $web_driver = RemoteWebDriver::create(
        "http://linglongscru:0fabcea5-5085-44c4-a246-f66ba570dc21@localhost:4444/wd/hub",
        array("platform"=>"Windows 7", "browserName"=>"chrome", "version"=>"40", "tunnelIdentifier" => getenv('SC_IDENTIFIER'))
    );

    $web_driver->get("http://localhost");

    /*
      Test actions here...
    */

    $web_driver->quit();
    print $web_driver->getTitle();
?>
