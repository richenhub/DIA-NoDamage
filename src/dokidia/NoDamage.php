<?php

namespace dokidia;

class NoDamage extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener
{
      public function onEnable() {
            $this->getServer()->getPluginManager()->registerEvents($this, $this);
      }

      public function NoDamage(\pocketmine\event\entity\EntityDamageEvent $event){
            $player = $event->getPlayer();
            if ($player->isOp()) {
                  $event->setCancelled(true);
                  $player->sendMessage("Damage Cancelled");
            } else {
                  $event->setCancelled(false);
                  $player->sendMessage("Damage Hasn't Cancelled");
            }
      }
}
