<?php
/**
 * Created by PhpStorm.
 * User: InkoHX
 * Date: 2018/12/14
 * Time: 16:26.
 */

namespace InkoHX\LevelSystem\commands;

use pocketmine\permission\Permission;
use pocketmine\permission\PermissionManager;

class Permissions
{
    public const USER = 'inkohx.levelsystem.commands.user.';
    public const ADMIN = 'inkohx.levelsystem.commands.admin.';

    public static function register(): void
    {
        PermissionManager::getInstance()->addPermission(new Permission(self::USER.'status', 'status', Permission::DEFAULT_TRUE));
    }
}
