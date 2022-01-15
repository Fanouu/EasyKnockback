<?php
    
namespace EasyKnockback;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use EasyKnockback\EventListener;

class Main extends PluginBase{
    
    private static $instance;
    
    protected function onEnable(): void{
        
        $this->getLogger()->info("
        
     _____                    _  __ ____  
    | ____| __ _  ___  _   _ | |/ /| __ ) 
    |  _|  / _` |/ __|| | | || ' / |  _ \ 
    | |___| (_| |\__ \| |_| || . \ | |_) |
    |_____|\__,_||___/ \__, ||_|\_\|____/ 
                       |___/              
        #This plugin was made by Fan. All right reserved
        ");
        self::$instance = $this;
        @mkdir($this->getDataFolder());
        $this->saveResource("settings.yml");
        $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
    }
    
    public static function getInstance(): Main{
        return self::$instance;
    }
    
    public static function getConfigs(){
        return new Config(self::$instance->getDataFolder()."settings.yml", Config::YAML);
    }
}