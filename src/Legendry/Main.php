<?php

namespace Legendry;

use pocketmine\Player;
use pocketmine\item\Item;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\InteractEvent;
use pocketmine\utils\TextFormat as C;
use pocketmine\utils\TextFormat as TF;
use pocketmine\Server;
use pocketmine\event\player\PlayerJoinEvent;

use Legendry\Commands\heal;
use Legendry\Commands\feed;
use Legendry\Commands\kit;

class Main extends PluginBase {

      public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getLogger()->notice("Aktiviert!");
    }

      public function onJoin(PlayerJoinEvent $event){
         $player = $event->getPlayer();
    }

      public function onDisable(){
        $this->getServer()->getLogger()->notice("Deaktiviert.");
    }

}
