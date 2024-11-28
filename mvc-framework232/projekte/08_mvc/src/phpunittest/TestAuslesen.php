<?php

namespace dateninjson\phpunittest;

use dateninjson\Models\Textspeichernjson\AuslesenDatensatz;
use PHPUnit\Framework\TestCase;

class TestAuslesen extends TestCase
{
   public function testClassAuslesen()
   {
       $test = new AuslesenDatensatz('../Speicherort/', 'datensatz.json');
       $this->assertEquals('test','test');
   }
}