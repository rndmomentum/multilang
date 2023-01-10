<?php
namespace Momentumplanet\Multilang;

class Directory
{
    private $directory; 

    function __construct()
    {
        if(isset($_COOKIE['language-directory']))
        {
            $this->directory = $_COOKIE['language-directory'];
        }else{
            $this->directory = Config::DIR;
        }
    }

    public function setDirectory($directory)
    {
        $this->directory = $directory;
        setcookie('language-directory',$this->directory);
    }

    public function getDirectory()
    {
        return $this->directory;
    }
}
