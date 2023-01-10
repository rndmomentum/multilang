<?php 
namespace Momentumplanet\Multilang;

class Multilang
{
    public $language;
    public $directory;

    function __construct()
    {
        $lang = new Language();
        $dir = new Directory();

        $this->language = $lang->getLanguage();
        $this->directory = $dir->getDirectory();
    }

    public function lang($file)
    {
        $explode = explode('.',$file);
        if(file_exists($this->directory.'/'.$this->language.'/'.$explode[0]))
        {
            return 'file exists';
        }

        return 'file not exists';
    }
}
