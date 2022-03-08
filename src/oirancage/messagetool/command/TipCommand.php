<?php

namespace oirancage\messagetool\command;

use CortexPE\Commando\args\TextArgument;
use CortexPE\Commando\BaseSubCommand;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

class TipCommand extends BaseSubCommand
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