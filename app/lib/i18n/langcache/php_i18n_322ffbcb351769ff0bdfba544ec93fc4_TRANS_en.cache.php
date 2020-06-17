<?php class TRANS {
const L1 = 'Home';
const L2 = 'About';
const category_somethingother = 'Something other...';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function TRANS($string, $args=NULL) {
    $return = constant("TRANS::".$string);
    return $args ? vsprintf($return,$args) : $return;
}