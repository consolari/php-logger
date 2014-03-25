<?php
namespace Consolari\Entries;

class Query extends AbstractEntry
{
    private $entry = array(
        'value'=>array(
            'sql'=>'',
        )        
    );
    
    public function setSql($str = '')
    {
        $this->entry['value']['sql'] = $str;    
    }
    
    public function format()
    {
        $this->entry['type'] = EntryType::SQL;
        $this->entry['time'] = $this->getTime();
        $this->entry['memory'] = $this->getMemory();
        $this->entry['group'] = $this->groupName;
        $this->entry['label'] = $this->label;
        
        return $this->entry;
    }
}