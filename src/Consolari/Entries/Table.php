<?php
namespace Consolari\Entries;

class Table extends AbstractEntry
{
    protected $value = '';
    
    public function setValue(array $table = array())
    {
        $this->value = $table;    
    }
    
    public function format()
    {
        $entry = array(
            'value'=>$this->value,         
            'type'=>EntryType::TABLE,                
            'time'=>$this->getTime(),                
            'memory'=>$this->getMemory(),
            'group'=>$this->groupName,
            'label'=>$this->label,
        );
        
        return $entry;
    }
}