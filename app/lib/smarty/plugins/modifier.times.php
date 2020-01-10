<?php

function smarty_modifier_times($var) {
    $pl = function ($int, $arr) {
        if ($int > 1) {
            $out = ' ' . $arr[1];
        } else {
            if ($int == 1) {
                $out = ' ' . $arr[0];

        }
  }
        return $int . $out;
    };

    $label = time() - $var;

    $w = Cms::lang('second');
    $arrSec = [$w, $w . Cms::lang('time_s')];
    $w = Cms::lang('minute');
    $arrMin = [$w, $w . Cms::lang('time_s')];
    $w = Cms::lang('hour');
    $arrHour = [$w, $w . Cms::lang('time_s')];
    $w = Cms::lang('day');
    $arrDays = [$w, $w . Cms::lang('time_s')];
    $w = Cms::lang('month');
    $arrMonths = [$w, $w . Cms::lang('time_s')];
    $back = Cms::lang('ago');

    if ($label == 0) {
        $out = Cms::lang('moment_ago');
    } elseif ($label < 60) {
        $out = $pl($label, $arrSec) .' '. $back;
    } elseif ($label < 3600) {
        $out = $pl(intval($label / 60), $arrMin) .' '. $back;
    } elseif ($label < (3600 * 24)) {
        $out = $pl(intval($label / 3600), $arrHour) .' '. $back;
    } elseif ($label < (3600 * 24 * date('t'))) {
        $out = $pl(intval($label / (3600 * 24)), $arrDays) .' '. $back;
    } elseif ($label < (3600 * 24 * (date('L') + 365))) {
        $out = $pl(intval($label / (3600 * 24 * 30)), $arrMonths).' '. $back;
    } else {
        $out = date('d.m.Y / H:i', $var);
    }

    return $out;
}
