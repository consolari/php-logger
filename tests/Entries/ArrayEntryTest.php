<?php

class ArrayEntryTest extends PHPUnit_Framework_TestCase
{
    public function testSetValue()
    {
        $entry = new Consolari\Entries\ArrayEntry;
        
        $row = array(
            'one'=>'two',        
            'three'=>'four',        
        );
        
        $entry->setValue(array(
            0=>$row,       
            1=>$row,       
        ));

        $entry->setGroupName('Array');
        
        $data = $entry->format();
        
        $this->assertEquals('two', $data['value'][0]['one']);
        $this->assertEquals('four', $data['value'][0]['three']);
        
        $this->assertEquals('two', $data['value'][1]['one']);
        $this->assertEquals('four', $data['value'][1]['three']);
        
        $this->assertEquals(Consolari\Entries\EntryType::ARRAYENTRY, $data['type']);
        $this->assertEquals('Array', $data['group']);
    }
}