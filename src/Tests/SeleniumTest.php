<?php
require 'vendor/autoload.php';

class SeleniumTest extends PHPUnit_Framework_TestCase {

 protected static $user_id = "linglongmeng2";
 protected static $security_key = "5ArEFhXszqEEPswiYTFV";

 public function testGoogle() {
  $url = "https://" . self::$user_id . ":" . self::$security_key . "@hub-cloud.browserstack.com/wd/hub";
  $caps = array(
    "browser" => "IE",
    "browser_version" => "9.0",
    "os" => "Windows",
    "os_version" => "7",
    "browserstack.debug" => "true"
  );
  $web_driver = RemoteWebDriver::create(
    $url,
    $caps
  );
  $web_driver->get("http://www.google.com");
  print $web_driver->getTitle();
  $element = $web_driver->findElement(WebDriverBy::name("q"));
  if ($element) {
    $element->sendKeys("Browserstack");
    $element->submit();
  }
  $web_driver->quit();
 }
 public function testBrowserStack() {
  $url = "https://" . self::$user_id . ":" . self::$security_key . "@hub-cloud.browserstack.com/wd/hub";
  $caps = array(
    "browser" => "IE",
    "browser_version" => "9.0",
    "os" => "Windows",
    "os_version" => "7",
    "browserstack.debug" => "true"
  );
  $web_driver = RemoteWebDriver::create(
    $url,
    $caps
  );
  $web_driver->get("https://www.browserstack.com");
  print $web_driver->getTitle();
  $web_driver->quit();
 }
 public function testLocalHost() {
  $url = "https://" . self::$user_id . ":" . self::$security_key . "@hub-cloud.browserstack.com/wd/hub";
  $caps = array(
    "browser" => "IE",
    "browser_version" => "9.0",
    "os" => "Windows",
    "os_version" => "7",
    "browserstack.debug" => "true",
    "browserstack.local" => "true"
  );
  $web_driver = RemoteWebDriver::create(
    $url,
    $caps
  );
  $web_driver->get("http://www.facebook.com");
  print $web_driver->getTitle();
  $web_driver->quit();
 }
}
?>
