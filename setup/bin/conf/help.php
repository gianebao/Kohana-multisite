<?php
$GLOBALS['helps'] = array(

    'config' => "= Kohm Configure = \n"
        . "\tdefinition: Add or modify a configuration value.\n"
        . "\tusage: kohm config <name.subcontext> <value>\n",

    'create' => "= Kohm Create = \n"
        . "\tdefinition: Creates a new application.\n"
        . "\tusage: kohm create <name> [template]\n\n"
        . "\t[template]\n"
        . "\tdefault    default template.\n",

    'delete' => "= Kohm Delete = \n"
        . "\tdefinition: Removes an existing application.\n"
        . "\tusage: kohm delete [options] <name>\n\n"
        . "\t[options]\n"
        . "\t--app     application\n"
        . "\t--all     application and the temporary files.\n"
        . "\t--cache   file cache(s) of the application.\n",
);

function _help($key)
{
    echo $GLOBALS['helps'][$key];
    exit("\n");
}
