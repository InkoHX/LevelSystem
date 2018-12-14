<?php
/**
 * Created by PhpStorm.
 * User: InkoHX
 * Date: 2018/12/14
 * Time: 1:04
 */

namespace InkoHX\LevelSystem;

use InkoHX\LeveLibrary\LevelAPI;
use InkoHX\LevelSystem\commands\defaults\StatusCommand;
use InkoHX\LevelSystem\commands\Permissions;
use InkoHX\LevelSystem\event\level\XpGetEvent;
use InkoHX\LevelSystem\event\player\ThePlayerDeathEvent;
use InkoHX\LevelSystem\event\level\LevelUpEvent;
use pocketmine\plugin\PluginBase;

class Core extends PluginBase
{
    public function onLoad()
    {
        $this->saveDefaultConfig();
        LevelAPI::init();
    }

    public function onEnable()
    {
        Permissions::register();
        $pm = $this->getServer()->getPluginManager();
        $pm->registerEvents(new LevelUpEvent(), $this);
        $pm->registerEvents(new ThePlayerDeathEvent(), $this);
        $pm->registerEvents(new XpGetEvent(), $this);
        $this->getServer()->getCommandMap()->register($this->getName(), new StatusCommand($this->getConfig()->get('status-command-name'), $this));
    }
}