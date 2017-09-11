<?php 
/**
 * PHP class for cleaning resources.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2016 - 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-Cleaner
 * @since      1.0.0
 */

namespace Josantonius\Cleaner\Tests;

use Josantonius\Cleaner\Cleaner;

/**
 * Tests class for Cleaner library.
 *
 * @since 1.0.0
 */
class CleanerTest { 

    /**
     * Remove magic quotes.
     */
    public static function testRemoveMagicQuotes() {

        Cleaner::removeMagicQuotes();
    }

    /**
     * Remove globals.
     */
    public static function testUnregisterGlobals() {

        Cleaner::unregisterGlobals();
    }
}