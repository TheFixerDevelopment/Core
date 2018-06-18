<?php

namespace Legendry\Commands;

use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat as TF;

   public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {

              switch($cmd->getName() ) {

                     case "heal":
                            if ($sender instanceof Player) {
                                  $sender->setHealth(20);
                            }
                    break;

           }
           return true;

     }

}
