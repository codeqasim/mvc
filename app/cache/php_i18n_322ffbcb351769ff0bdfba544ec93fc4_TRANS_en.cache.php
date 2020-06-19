<?php class TRANS {
const language_name = 'English';
const language_type = 'LTR';
const country = 'us';
const login = 'Login';
const signup = 'Signup';
const agents = 'Agents';
const hero1 = 'Your new travel mate';
const hero2 = 'Book Hotels &amp; Flights at The Best price.';
const category_somethingother = 'Something other...';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function TRANS($string, $args=NULL) {
    $return = constant("TRANS::".$string);
    return $args ? vsprintf($return,$args) : $return;
}