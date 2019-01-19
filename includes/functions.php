<?php

function debug ($variable) {
  echo '<pre>' . print_r($variable, true) . '<pre>';
}

function str_random ($length) {
  $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
  return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
}

/**
 * Return previous data submitted from a form
 * @param $key
 * @return string
 */
function get_data ($key) {
  return isset($_POST[$key]) ? $_POST[$key] : '';
}

function flash ($type, $message) {
  $_SESSION['flash'][$type][] = $message;
}

function success ($message) {
  flash('success', $message);
}

function error ($message) {
  flash('danger', $message);
}

function info ($message) {
  flash('info', $message);
}

function warning ($message) {
  flash('warning', $message);
}

