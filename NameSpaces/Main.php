<?php

# App\Utilities\User;
include "utilities/user.php";

# App\Models\User;
include "models/user.php";

# direct use of namespaces in object creation
// $model = new \App\Models\User;
// $util = new \App\Utilities\User;

use App\Models\User as UserModel;
use App\Utilities\User as UserUtil;
$model = new UserModel;
$util = new UserUtil;
UserUtil::test();