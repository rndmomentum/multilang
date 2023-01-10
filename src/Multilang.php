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
        if(file_exists($this->directory.'/'.$this->language.'/'.$explode[0].'.json'))
        {
            $lang_file = file_get_contents($this->directory.'/'.$this->language, $explode[0].'.json');

            $a = json_decode($lang_file,true);
            return $a[$explode[1]];
        }

        if(file_exists($this->directory.'/'.Config::LANG.'/'.$explode[0].'.json'))
        {
            $lang_file = file_get_contents($this->directory.'/'.$this->language, $explode[0].'.json');

            $a = json_decode($lang_file,true);
            return $a[$explode[1]];
        }

        return $file;
    }
}
