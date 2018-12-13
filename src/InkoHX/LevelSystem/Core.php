<?php
/**
 * Created by PhpStorm.
 * User: InkoHX
 * Date: 2018/12/14
 * Time: 1:04
 */

namespace InkoHX\LevelSystem;

use InkoHX\LeveLibrary\LevelAPI;
use InkoHX\LevelSystem\event\player\ThePlayerDeathEvent;
use InkoHX\LevelSystem\event\level\LevelUpEvent;
use pocketmine\plugin\PluginBase;

class Core extends PluginBase
{
    public function onLoad()
    {
        LevelAPI::init();
    }

    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents(new LevelUpEvent(), $this);
        $this->getServer()->getPluginManager()->registerEvents(new ThePlayerDeathEvent(), $this);
    }
}