<?php

/*
 * @addtogroup bgetech
 * @{
 *
 * @package       Growatt Inverters
 * @file          module.php
 * @author        Martijn Diks
 * @copyright     2018 Michael Tröger
 * @license       
 * @version       0.1
 *
 */
require_once(__DIR__ . "/../libs/GrowattModule.php");  // diverse Klassen

class f3 extends Growatt
{
    const PREFIX = 'f3';

    public static $Variables = [
        ['Voltage L1', vtFloat, 'Volt.230', 0x0000, 4, 2,true],
        ['Voltage L2', vtFloat, 'Volt.230', 0x0002, 4, 2,true],
        ['Voltage L3', vtFloat, 'Volt.230', 0x0004, 4, 2,true],
        ['Current L1', vtFloat, 'Ampere', 0x0006, 4, 2,true],
        ['Current L2', vtFloat, 'Ampere', 0x0008, 4, 2,true],
        ['Current L3', vtFloat, 'Ampere', 0x000A, 4, 2,true],
        ['L3 total reactive energy', vtFloat, 'kVArh', 0x000C, 4, 2,true]
    ];
}
