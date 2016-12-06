<?php
//Use composer to insall phpunit-selenium
require 'vendor/autoload.php';
define('BROWSERSTACK_USER', 'linglongmeng2');
define('BROWSERSTACK_KEY', '5ArEFhXszqEEPswiYTFV');
class WebTest extends PHPUnit_Extensions_Selenium2TestCase
{
  public static $browsers = array(
    array(
      'browserName' => 'chrome',
      'host' => 'hub-cloud.browserstack.com',
      'port' => 80,
      'desiredCapabilities' => array(
        'version' => '30',
        'browserstack.user' => BROWSERSTACK_USER,
        'browserstack.key' => BROWSERSTACK_KEY,
        'os' => 'OS X',
        'os_version' => 'Mountain Lion',
	"browserstack.local" => true
      )
    )
    );
    protected function setUp()
    {
        parent::setUp();
        $this->setBrowserUrl('http://scrutinizer.dev/app_dev.php');
    }


    public function testLocal()
    {
        $this->url('');
        //$element = $this->byName('q');
        //$element->click();
        //$this->keys('Browserstack');
        //$button = $this->byName('btnG');
        //$button->click();
        //$this->assertEquals('Browserstack - Google zoeken', $this->title());
    }
}
?>
