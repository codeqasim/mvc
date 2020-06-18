<?php class TRANS {
const language_type = 'LTR';
const login = 'Login';
const signup = 'Signup';
const agents = 'Agents';
const category_somethingother = 'Something other...';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function TRANS($string, $args=NULL) {
    $return = constant("TRANS::".$string);
    return $args ? vsprintf($return,$args) : $return;
}