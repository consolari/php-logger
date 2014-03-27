<?php
namespace Consolari\Entries;

class String extends AbstractEntry
{
    protected $value = '';
    
    private $contentType = 'text';
    
    public function setValue($str = '')
    {
        $this->value = $str;    
    }
    
    public function setContentType($contentType = '')
    {
        $this->contentType = $contentType;
    }
    
    public function format()
    {
        $entry = array(
            'value'=>$this->value,         
            'content_type'=>$this->contentType,         
            'type'=>EntryType::STRING,                
            'time'=>$this->getTime(),                
            'memory'=>$this->getMemory(),
            'group'=>$this->groupName,    
            'label'=>$this->label,    
        );
        
        return $entry;
    }
}