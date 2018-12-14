<?php
/**
 * Created by PhpStorm.
 * User: InkoHX
 * Date: 2018/12/14
 * Time: 16:17
 */

namespace InkoHX\LevelSystem\event\level;


use InkoHX\LeveLibrary\event\xp\PlayerAddXpEvent;
use pocketmine\event\Listener;

class XpGetEvent implements Listener
{
    public function event(PlayerAddXpEvent $event)
    {
        $event->getPlayer()->sendMessage("§b§l+{$event->getXp()}XP");
    }
}