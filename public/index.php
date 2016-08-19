<?php
include "../vendor/autoload.php";

use Phidias\Api\Server;

Server::import("../vendor/phidias/documentation.api");
Server::import("../vendor/phidias/api-utilities/db.api");
Server::import("../vendor/phidias/rack.api");
Server::import("../");

Server::run();