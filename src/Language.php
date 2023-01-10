<?php
namespace Momentumplanet\Multilang;

class Language
{
    private $lang;

    function __construct()
    {
        //check if cookie ada tak 
        if(isset($_COOKIE['language']))
        {
            $this->lang = $_COOKIE['language'];
        }else{
            //set language based on config file
            $this->lang = Config::LANG;
        }
    }

    public function setLanguage($lang)
    {
        $this->lang = $lang;
        setcookie('language',$this->lang);
    }

    public function getLanguage()
    {
        return $this->lang;
    }

}
