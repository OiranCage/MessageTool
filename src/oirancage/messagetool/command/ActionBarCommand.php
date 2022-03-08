<?php

namespace oirancage\messagetool\command;

use pocketmine\command\CommandSender;
use pocketmine\player\Player;

class ActionBarCommand extends \CortexPE\Commando\BaseSubCommand
{
    use MessageArgumentTrait;

    public function onRun(CommandSender $sender, string $aliasUsed, array $args): void
    {
        if(!$sender instanceof Player){
            return;
        }

        $sender->sendActionBarMessage($this->getMessageFromArgument($args));
    }
}