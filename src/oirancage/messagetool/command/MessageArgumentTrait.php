<?php

namespace oirancage\messagetool\command;

use CortexPE\Commando\args\BaseArgument;
use CortexPE\Commando\args\TextArgument;
use CortexPE\Commando\exception\ArgumentOrderException;

trait MessageArgumentTrait
{
    /**
     * @throws ArgumentOrderException
     */
    protected function prepare(): void{
        $this->registerArgument(0, new TextArgument("message", true));
    }

    public function getMessageFromArgument(array $args) :string{
        $message =  $args["message"] ?? "this is a test argument.";
        return str_replace("\\n", "\n", $message);
    }

    abstract public function registerArgument(int $int, BaseArgument $param): void;
}