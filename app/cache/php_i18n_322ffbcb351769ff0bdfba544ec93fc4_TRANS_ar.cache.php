<?php class TRANS {
const language_name = 'Arabic';
const language_type = 'RTL';
const country = 'sa';
const lang_code = 'ar';
const login = 'Dakhool';
const signup = 'Tasjeel';
const agents = 'Agents';
const hero1 = 'رفيق السفر الجديد الخاص بك';
const hero2 = 'احجز الفنادق والرحلات بأفضل الأسعار';
const category_somethingother = 'Something other...';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function TRANS($string, $args=NULL) {
    $return = constant("TRANS::".$string);
    return $args ? vsprintf($return,$args) : $return;
}