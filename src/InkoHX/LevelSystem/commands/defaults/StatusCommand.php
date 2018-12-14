<?php
/**
 * Created by PhpStorm.
 * User: InkoHX
 * Date: 2018/12/14
 * Time: 16:33
 */

namespace InkoHX\LevelSystem\commands\defaults;

use InkoHX\LeveLibrary\LevelAPI;
use InkoHX\LevelSystem\commands\Permissions;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pocketmine\Player;
use pocketmine\plugin\Plugin;

class StatusCommand extends PluginCommand
{
    /**
     * StatusCommand constructor.
     *
     * @param $name
     * @param Plugin $owner
     */
    public function __construct($name, Plugin $owner)
    {
        $this->setDescription('Show your level.');
        $this->setPermission(Permissions::USER.'status');
        parent::__construct($name, $owner);
    }

    /**
     * @param CommandSender $sender
     * @param string $commandLabel
     * @param array $args
     *
     * @return mixed
     */
    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if (!$this->testPermission($sender) && !$sender instanceof Player) {
            return true;
        }
        $level = LevelAPI::getLevel($sender);
        $needed = LevelAPI::NeededXP($sender);
        $sender->sendMessage("Level: Lv.{$level}\nNeeded XP: {$needed}");
        return true;
    }
}