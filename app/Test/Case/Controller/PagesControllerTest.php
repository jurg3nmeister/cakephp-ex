<?php
App::uses('PagesController', 'Controller');
App::uses('Home', 'View');

class PagesControllerTest extends ControllerTestCase {
  public function setUp() {
    parent::setUp();
    $PagesController = new PagesController();
    $HomeView = new View($PagesController);
  }

  public function testHomePageContents() {
    
  }
}
