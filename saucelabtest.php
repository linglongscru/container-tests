<?php
  // Setup: $ php composer.phar require facebook/webdriver
 
  require_once('vendor/autoload.php');
  use Facebook\WebDriver\Remote\RemoteWebDriver;
  use Facebook\WebDriver\WebDriverBy;
 
  $web_driver = RemoteWebDriver::create(
    "https://linglongscru:0fabcea5-5085-44c4-a246-f66ba570dc21@ondemand.saucelabs.com:443/wd/hub",
    array("platform"=>"Windows 7", "browserName"=>"chrome", "version"=>"40")
  );
  $web_driver->get("http://scrutinizer.dev/");
 
  /*
    Test actions here...
  */
 
  $web_driver->quit();
  print $web_driver->getTitle();
?>
