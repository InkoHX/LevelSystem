<?php
/**
 * Created by PhpStorm.
 * User: InkoHX
 * Date: 2018/12/14
 * Time: 1:57.
 */

namespace InkoHX\LevelSystem\event\level;

use InkoHX\LeveLibrary\event\level\PlayerLevelUpEvent;
use pocketmine\event\Listener;

class LevelUpEvent implements Listener
{
    public function event(PlayerLevelUpEvent $event)
    {
        $event->getPlayer()->sendMessage("§l§bLEVEL UP!!§r {$event->getOldLevel()} §c➡§r {$event->getNewLevel()}");
    }
}
