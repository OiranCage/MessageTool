<?php

namespace oirancage\messagetool\command;

use CortexPE\Commando\BaseCommand;
use pocketmine\command\CommandSender;

class MessageToolCommand extends BaseCommand
{

    /**
     * @inheritDoc
     */
    protected function prepare(): void
    {
        $this->registerSubCommand(new PopupCommand("popup", "send a popup message", ["p"]));
        $this->registerSubCommand(new TipCommand("tip", "send a tip message", ["t"]));
        $this->registerSubCommand(new ActionBarCommand("actionbar", "send a action bar message ", ["a"]));
    }

    /**
     * @inheritDoc
     */
    public function onRun(CommandSender $sender, string $aliasUsed, array $args): void
    {
    }
}