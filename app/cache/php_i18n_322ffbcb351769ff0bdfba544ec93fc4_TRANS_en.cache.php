<?php class TRANS {
const language_name = 'English';
const language_type = 'LTR';
const country = 'us';
const lang_code = 'en';
const login = 'Login';
const signup = 'Signup';
const agents = 'Agents';
const hero1 = 'Your new travel mate';
const hero2 = 'Book Hotels &amp; Flights at The Best price.';
const hotels_hotels = 'Hotels';
const hotels_hotel = 'Hotel';
const hotels_rooms = 'rooms';
const hotels_Featuredhotels = 'Featured Hotels';
const hotels_featuredhotelst1 = 'Choose from the best featured hotels worldwide offering the best price. Book your trip now!';
const hotels_featuredhotelst2 = 'Find the best featured hotels around the world with us';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function TRANS($string, $args=NULL) {
    $return = constant("TRANS::".$string);
    return $args ? vsprintf($return,$args) : $return;
}