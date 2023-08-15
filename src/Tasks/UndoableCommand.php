<?php

namespace Src\Tasks;

interface UndoableCommand extends Command
{
    public function undo();
}
