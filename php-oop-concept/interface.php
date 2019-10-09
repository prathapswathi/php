<?php

interface Device {

    public function switch_on();
    public function switch_off();
}

interface Volume {

    public function volume_up();
    public function volume_down();
}

interface Pluggable {

    public function plug_in();
    public function plug_off();
}

class CellPhone implements Device, Volume, Pluggable {

    public function switch_on() { echo "Switching on\n"; }
    public function switch_off() { echo "Switching off\n"; }

    public function volume_up() { echo "Volume up\n"; }
    public function volume_down() { echo "Volume down\n"; }

    public function plug_in() { echo "Plugging in\n"; }
    public function plug_off() { echo "Plugging off\n"; }
}

$o = new CellPhone();
$o->switch_on();
$o->volume_down();
$o->plug_in();