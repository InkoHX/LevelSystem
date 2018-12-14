<?php
/**
 * Created by PhpStorm.
 * User: InkoHX
 * Date: 2018/12/14
 * Time: 2:04
 */

namespace InkoHX\LevelSystem\event\player;

use InkoHX\LeveLibrary\LevelAPI;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\Player;

class ThePlayerDeathEvent implements Listener
{
    public function event(PlayerDeathEvent $event)
    {
        $player = $event->getPlayer();
        $cause = $player->getLastDamageCause();
        if (!$cause instanceof EntityDamageByEntityEvent) return;
        $damager = $cause->getDamager();
        if (!$damager instanceof Player) return;
        LevelAPI::Auto($damager);
    }
}