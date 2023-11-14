<?php
/*
Plugin Name: Cubic Yards Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/cubic-yards-calculator/
Description: Cubic yard calculator calculates cubic yards, feet, meters for landscape materials. Enter measurements in yards and feet and get volume conversions.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_cubic_yards_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Cubic Yards Calculator by Calculator.iO";

function display_ci_cubic_yards_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/cubic-yards-calculator/" target="_blank"><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48"></a> Cubic Yards Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_cubic_yards_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_cubic_yards_calculator', 'display_ci_cubic_yards_calculator' );