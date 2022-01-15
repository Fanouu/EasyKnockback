<?php
    
namespace EasyKnockback;

use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageByEntityEvent;

use pocketmine\utils\Config;

class EventListener implements Listener{
    
    public function onDamage(EntityDamageByEntityEvent $event){
        if(Main::getConfigs()->get("KnockBack") !== 0){
            $event->setKnockBack(Main::getConfigs()->get("KnockBack"));
        }
    }
}