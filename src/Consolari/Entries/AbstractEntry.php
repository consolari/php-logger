<?php
namespace Consolari\Entries;

abstract class AbstractEntry implements EntryInterface
{
    protected $groupName = 'Default';
    protected $label = 'Label';
    
    public function getTime()
    {
        return time();
    }
    
    public function getMemory()
    {
        return memory_get_usage();        
    }
    
    public function __toString()
    {
        return serialize($this->format());
    }
    
    public function setGroupName($name = '')
    {
        $this->groupName = $name;
    }
    
    public function setLabel($label = '')
    {
        $this->label = $label;
    }
}