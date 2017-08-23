<?php

class FM_Admin {
  public static $instance = null;
  public static function get_instance() {
    if (null == self::$instance) {
      self::$instance = new self;
    }

    return self::$instance;
  }

  private function __construct() {
  }
}
