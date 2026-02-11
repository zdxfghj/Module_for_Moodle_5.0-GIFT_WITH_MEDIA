<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version information for the GIFT with media format question importer.
 *
 * @package    qformat_giftmedia
 * @copyright  2013 Jean-Michel Vedrine
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'qformat_giftmedia';
$plugin->version = 2024100100; // YYYYMMDDXX
$plugin->requires = 2023042400; // Moodle 5.0.0 (2023042400)
$plugin->release = '1.0.0 for Moodle 5';
$plugin->maturity = MATURITY_STABLE;
$plugin->supported = [50, 51]; // Поддержка Moodle 5.0 и 5.1

