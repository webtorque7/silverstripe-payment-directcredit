<?php

class DirectCreditTest extends SapphireTest {
  
  function setUp() {
    parent::setUp();
  }
  
  public function testClassConfig() {
		$processor = PaymentFactory::factory('DirectCredit');
		$this->assertEquals(get_class($processor), 'DirectCreditProcessor');
		$this->assertEquals(get_class($processor->gateway), 'DirectCreditGateway');
		$this->assertEquals(get_class($processor->payment), 'Payment');
	}
}