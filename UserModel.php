<?php

namespace basanta\phpmvc;

use basanta\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}
