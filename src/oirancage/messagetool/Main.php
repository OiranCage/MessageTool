<?php declare(strict_types=1);

namespace oirancage\messagetool;

use CortexPE\Commando\exception\HookAlreadyRegistered;
use CortexPE\Commando\PacketHooker;
use oirancage\messagetool\command\MessageToolCommand;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\scheduler\ClosureTask;
use pocketmine\Server;

class Main extends PluginBase
{
    protected function onEnable(): void
    {
        if (!PacketHooker::isRegistered()){
            try {
                PacketHooker::register($this);
            } catch (HookAlreadyRegistered $ex) {
                // This cannot happen though...
            }
        }

        $this->getServer()->getCommandMap()->register("message-tool", new MessageToolCommand($this, "messagetool", aliases: ["mt"]));
    }
}