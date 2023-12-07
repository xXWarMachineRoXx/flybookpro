<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
  | -------------------------------------------------------------------------
  | URI ROUTING
  | -------------------------------------------------------------------------
  | This file lets you re-map URI requests to specific controller functions.
  |
  | Typically there is a one-to-one relationship between a URL string
  | and its corresponding controller class/method. The segments in a
  | URL normally follow this pattern:
  |
  |	example.com/class/method/id/
  |
  | In some instances, however, you may want to remap this relationship
  | so that a different class/function is called than the one
  | corresponding to the URL.
  |
  | Please see the user guide for complete details:
  |
  |	https://codeigniter.com/user_guide/general/routing.html
  |
  | -------------------------------------------------------------------------
  | RESERVED ROUTES
  | -------------------------------------------------------------------------
  |
  | There are three reserved routes:
  |
  |	$route['default_controller'] = 'welcome';
  |
  | This route indicates which controller class should be loaded if the
  | URI contains no data. In the above example, the "welcome" class
  | would be loaded.
  |
  |	$route['404_override'] = 'errors/page_missing';
  |
  | This route will tell the Router which controller/method to use if those
  | provided in the URL cannot be matched to a valid route.
  |
  |	$route['translate_uri_dashes'] = FALSE;
  |
  | This is not exactly a route, but allows you to automatically route
  | controller and method names that contain dashes. '-' isn't a valid
  | class or method name character, so it requires translation.
  | When you set this option to TRUE, it will replace ALL dashes in the
  | controller and method URI segments.
  |
  | Examples:	my-controller/index	-> my_controller/index
  |		my-controller/my-method	-> my_controller/my_method
 */
$route['default_controller'] = 'MainController';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['getIATA'] = 'MainController/getIATA';
$route['payment/(:any)'] = 'MainController/payment';
$route['ticket/(:any)'] = 'MainController/ticket';
$route['tick'] = 'MainController/tick';
$route['call'] = 'MainController/call';
$route['dashboard'] = 'MainController/dashboard';
$route['gticket/(:any)'] = 'MainController/gticket/$1';
$route['read'] = 'MainController/read';
$route['logout'] = 'Signup/logout';
$route['LoginUser'] = 'Signup/loginurl';
$route['about-us'] = 'MainController/about';
$route['contact-us'] = 'MainController/contact';
$route['privacy-policy'] = 'MainController/privacy';
$route['cancellation-and-refund-policy'] = 'MainController/refund';
$route['terms-conditions'] = 'MainController/terms';




$route['first-class-flight-reservations'] = 'MainController/first_cls_reservation';
$route['business-class-flight-reservations'] = 'MainController/business_cls_reservation';
$route['group-travel-flight-reservation'] = 'MainController/group_tvl_reservation';

$route['flight-tickets-to-orlando'] = 'MainController/flight_to_orlando';
$route['flight-tickets-to-las-vegas'] = 'MainController/flight_to_las_vegas';
$route['flight-tickets-to-new-york'] = 'MainController/flight_to_new_york';

$route['book-cheap-flights-to-chicago'] = 'MainController/cheap_flight_chicago';
$route['book-cheap-flights-to-dallas'] = 'MainController/cheap_flight_dallas';
$route['book-cheap-flights-to-denver'] = 'MainController/cheap_flight_denver';
$route['book-cheap-flights-to-los-angeles'] = 'MainController/cheap_flight_los_angeles';
$route['book-cheap-flights-to-miami'] = 'MainController/cheap_flight_miami';

$route['cheap-flight-to-california'] = 'MainController/landing_california';
$route['cheap-flight-to-alaska'] = 'MainController/landing_alaska';
$route['site-map'] = 'MainController/site_map';
$route['success'] = 'MainController/success_msg';
$route['user-inquiry'] = 'MainController/user_inquiry';
$route['lp-page'] = 'MainController/lp_page';
$route['book-airline-tickets-under-49'] = 'MainController/flight_under49';
$route['flight-tickets-under-39'] = 'MainController/flight_under39';

$route['flight-search'] = 'MainController/flight_search';
//Airlines

$route['hawaiian-flights'] = 'MainController/hawaiian_flights';
$route['jetblue-airways'] = 'MainController/jetblue_flights';
$route['spirit-airlines'] = 'MainController/landing_page1';
$route['frontier-airlines'] = 'MainController/landing_page2';
$route['hawaiian-airlines'] = 'MainController/hawaiian_airlines';
$route['flights-to-united-states'] = 'MainController/united_flights';
$route['allegiant-airlines'] = 'MainController/allegiant_airlines';
$route['flights-to-southwest'] = 'MainController/flights_southwest';
$route['air-canada'] = 'MainController/air_canada';
$route['air-france'] = 'MainController/air_france';
$route['discount-and-savings-claim'] = 'MainController/discount_claim';
$route['top-destination'] = 'MainController/top_destination';
$route['cheap-flight-tickets'] = 'MainController/cheap_ft';
$route['spirit-airlines'] = 'MainController/spirit_airlines';
$route['alaska-airlines'] = 'MainController/alaska_airlines';
$route['jetblue-airways'] = 'MainController/jetblue_airways';
$route['cheap-flight'] = 'MainController/cheap_flight';
$route['aeromexico-airlines'] = 'MainController/aeromexico_airlines';
$route['flair-airlines'] = 'MainController/flair_airlines';
$route['test-front-page'] = 'MainController/test_front_page';
$route['southwest-airlines'] = 'MainController/southwest_airlines';
$route['front-page'] = 'MainController/front_page';
$route['disclaimer'] = 'MainController/disclaimer_page';
$route['british-airways'] = 'MainController/british_airways';
$route['norse-airlines'] = 'MainController/norse_airlines';
$route['canadian-north'] = 'MainController/canadian_north';
$route['qatar-airways'] = 'MainController/qatar_airways';
$route['emirates-airlines'] = 'MainController/emirates_airlines';
$route['klm-airlines'] = 'MainController/klm_airlines';
$route['united-airlines'] = 'MainController/united_airlines';
$route['lufthansa-airlines'] = 'MainController/lufthansa_airlines';
$route['qantas-airways'] = 'MainController/qantas_airways';
$route['virgin-atlantic-airways'] = 'MainController/virgin_atlantic_airways';
$route['virgin-australia'] = 'MainController/virgin_australia';
$route['japan-airlines'] = 'MainController/japan_airlines';
$route['asiana-airlines'] = 'MainController/asiana_airlines';
$route['all-nippon-airways'] = 'MainController/all_nippon_airways';
$route['cathay-pacific-airways'] = 'MainController/cathay_pacific_airways';
$route['copa-airlines'] = 'MainController/copa_airlines';
$route['etihad-airlines'] = 'MainController/etihad_airlines';
$route['latam-airlines'] = 'MainController/latam_airlines';
$route['philippine-airlines'] = 'MainController/philippine_airlines';
$route['singapore-airlines'] = 'MainController/singapore_airlines';
$route['turkish-airlines'] = 'MainController/turkish_airlines';
$route['volaris'] = 'MainController/volaris';
$route['air-new-zealand'] = 'MainController/air_new_zealand';
$route['central-mountain-air']='MainController/central_mountain_air';
$route['iberia-airline']='MainController/iberia_airline';
$route['lot-polish-airlines']='MainController/lot_polish_airlines';



$route['test']='MainController/test';
$route['about-usx'] = 'MainController/about_usx';
$route['contact-usx'] = 'MainController/contact_usx';
$route['cheap-flight-booking'] = 'MainController/cheap_flights';
$route['cheap-flight-tickets'] = 'MainController/cheap_flight_tickets';
$route['flights-under-49'] = 'MainController/flights_under_49';
$route['flights-under-69'] = 'MainController/flights_under_69';
$route['flights-under-99'] = 'MainController/flights_under_99';
$route['flights-under-199'] = 'MainController/flights_under_199';

$route['tfp'] = 'MainController/tfp';

// Destination Pairs
$route['cheap-flight-denver']='MainController/cheap_flight_denver';
$route['cheap-flight-phoenix-to-orlando']= 'MainController/cheap_flight_phoenix_to_orlando';
$route['cheap-flight-phoenix-to-las-vegas']= 'MainController/cheap_flight_phoenix_to_las_vegas';
$route['cheap-flight-phoenix-to-atlanta']= 'MainController/cheap_flight_phoenix_to_atlanta';
$route['cheap-flight-phoenix-to-denver']= 'MainController/cheap_flight_phoenix_to_denver';
$route['cheap-flight-phoenix-to-fort-lauderdale']= 'MainController/cheap_flight_phoenix_to_fort_lauderdale';
$route['cheap-flight-phoenix-to-toronto']= 'MainController/cheap_flight_phoenix_to_toronto';
$route['cheap-flight-phoenix-to-philadelphia']= 'MainController/cheap_flight_phoenix_to_philadelphia';
$route['cheap-flight-phoenix-to-tampa']= 'MainController/cheap_flight_phoenix_to_tampa';
$route['cheap-flight-phoenix-to-miami']= 'MainController/cheap_flight_phoenix_to_miami';
$route['cheap-flight-phoenix-to-newark-liberty-intl']= 'MainController/cheap_flight_phoenix_to_newark_liberty_intl';
$route['cheap-flight-phoenix-to-houston']= 'MainController/cheap_flight_phoenix_to_houston';
$route['cheap-flight-phoenix-to-dallas']= 'MainController/cheap_flight_phoenix_to_dallas';
$route['cheap-flight-phoenix-to-edmonton']= 'MainController/cheap_flight_phoenix_to_edmonton';
$route['cheap-flight-phoenix-to-san-diego']= 'MainController/cheap_flight_phoenix_to_san_diego';
$route['cheap-flight-honolulu-to-las-vegas']= 'MainController/cheap_flight_honolulu_to_las_vegas';
$route['cheap-flight-honolulu-to-newark-liberty-intl']= 'MainController/cheap_flight_honolulu_to_newark_liberty_intl';
$route['cheap-flight-honolulu-to-san-francisco']= 'MainController/cheap_flight_honolulu_to_san_francisco';
$route['cheap-flight-honolulu-to-los-angeles']= 'MainController/cheap_flight_honolulu_to_los_angeles';
$route['cheap-flight-honolulu-to-seattle']= 'MainController/cheap_flight_honolulu_to_seattle';
$route['cheap-flight-honolulu-to-denver']= 'MainController/cheap_flight_honolulu_to_denver';
$route['cheap-flight-honolulu-to-san-diego']= 'MainController/cheap_flight_honolulu_to_san_diego';
$route['cheap-flight-honolulu-to-tampa']= 'MainController/cheap_flight_honolulu_to_tampa';
$route['cheap-flight-honolulu-to-orlando']= 'MainController/cheap_flight_honolulu_to_orlando';
$route['cheap-flight-honolulu-to-miami']= 'MainController/cheap_flight_honolulu_to_miami';
$route['cheap-flight-honolulu-to-new-york']= 'MainController/cheap_flight_honolulu_to_new_york';
$route['cheap-flight-denver-to-los-angeles']= 'MainController/cheap_flight_denver_to_los_angeles';
$route['cheap-flight-los-angeles-to-chicago']= 'MainController/cheap_flight_los_angeles_to_chicago';
$route['cheap-flight-new-york-to-chicago']= 'MainController/cheap_flight_new_york_to_chicago';
$route['cheap-flight-new-york-to-los-angeles']= 'MainController/cheap_flight_new_york_to_los_angeles';
$route['cheap-flight-los-angeles-to-seattle']= 'MainController/cheap_flight_los_angeles_to_seattle';
$route['cheap-flight-los-angeles-to-san-francisco']= 'MainController/cheap_flight_los_angeles_to_san_francisco';
$route['cheap-flight-las-vegas-to-houston']= 'MainController/cheap_flight_las_vegas_to_houston';
$route['cheap-flight-las-vegas-to-phoenix']= 'MainController/cheap_flight_las_vegas_to_phoenix';
$route['cheap-flight-las-vegas-to-los-angeles']= 'MainController/cheap_flight_las_vegas_to_los_angeles';
$route['cheap-flight-las-vegas-to-newark-liberty-intl']= 'MainController/cheap_flight_las_vegas_to_newark_liberty_intl';
$route['cheap-flight-las-vegas-to-miami']= 'MainController/cheap_flight_las_vegas_to_miami';
$route['cheap-flight-las-vegas-to-tampa']= 'MainController/cheap_flight_las_vegas_to_tampa';
$route['cheap-flight-las-vegas-to-philadelphia']= 'MainController/cheap_flight_las_vegas_to_philadelphia';
$route['cheap-flight-las-vegas-to-toronto']= 'MainController/cheap_flight_las_vegas_to_toronto';
$route['cheap-flight-las-vegas-to-denver']= 'MainController/cheap_flight_las_vegas_to_denver';
$route['cheap-flight-las-vegas-to-atlanta']= 'MainController/cheap_flight_las_vegas_to_atlanta';
$route['cheap-flight-las-vegas-to-orlando']= 'MainController/cheap_flight_las_vegas_to_orlando';
$route['cheap-flight-las-vegas-to-dallas']= 'MainController/cheap_flight_las_vegas_to_dallas';
$route['cheap-flight-las-vegas-to-raleigh-durham']= 'MainController/cheap_flight_las_vegas_to_raleigh_durham';
$route['cheap-flight-las-vegas-to-san-diego']= 'MainController/cheap_flight_las_vegas_to_san_diego';
$route['cheap-flight-atlanta-to-orlando']= 'MainController/cheap_flight_atlanta_to_orlando';
$route['cheap-flight-san-francisco-to-orlando']= 'MainController/cheap_flight_san_francisco_to_orlando';
$route['cheap-flight-san-francisco-to-las-vegas']= 'MainController/cheap_flight_san_francisco_to_las_vegas';
$route['cheap-flight-san-francisco-to-denver']= 'MainController/cheap_flight_san_francisco_to_denver';
$route['cheap-flight-san-francisco-to-tampa']= 'MainController/cheap_flight_san_francisco_to_tampa';
$route['cheap-flight-san-francisco-to-miami']= 'MainController/cheap_flight_san_francisco_to_miami';
$route['cheap-flight-san-francisco-to-dallas']= 'MainController/cheap_flight_san_francisco_to_dallas';
$route['cheap-flight-san-francisco-to-calgary']= 'MainController/cheap_flight_san_francisco_to_calgary';
$route['cheap-flight-san-francisco-to-phoenix']= 'MainController/cheap_flight_san_francisco_to_phoenix';
$route['cheap-flight-san-francisco-to-san-diego']= 'MainController/cheap_flight_san_francisco_to_san_diego';
$route['cheap-flight-san-francisco-to-newark-liberty-intl']= 'MainController/cheap_flight_san_francisco_to_newark_liberty_intl';
$route['cheap-flight-san-diego-to-fort-lauderdale']= 'MainController/cheap_flight_san_diego_to_fort_lauderdale';
$route['cheap-flight-san-diego-to-las-vegas']= 'MainController/cheap_flight_san_diego_to_las_vegas';
$route['cheap-flight-san-diego-to-tampa']= 'MainController/cheap_flight_san_diego_to_tampa';
$route['cheap-flight-san-diego-to-denver']= 'MainController/cheap_flight_san_diego_to_denver';
$route['cheap-flight-san-diego-to-atlanta']= 'MainController/cheap_flight_san_diego_to_atlanta';
$route['cheap-flight-san-diego-to-philadelphia']= 'MainController/cheap_flight_san_diego_to_philadelphia';
$route['cheap-flight-san-diego-to-phoenix']= 'MainController/cheap_flight_san_diego_to_phoenix';
$route['cheap-flight-san-diego-to-newark-liberty-intl']= 'MainController/cheap_flight_san_diego_to_newark_liberty_intl';
$route['cheap-flight-atlanta-to-new-york']= 'MainController/cheap_flight_atlanta_to_new_york';
$route['cheap-flight-atlanta-to-ft-lauderdale']= 'MainController/cheap_flight_atlanta_to_ft_lauderdale';
$route['flight-ticket-new-york']='MainController/flight_ticket_new_york';
$route['cheap-flight-los-angeles-to-atlanta']= 'MainController/cheap_flight_los_angeles_to_atlanta';
$route['cheap-flight-los-angeles-to-newark-liberty-intl']= 'MainController/cheap_flight_los_angeles_to_newark_liberty_intl';
$route['cheap-flight-los-angeles-to-denver']= 'MainController/cheap_flight_los_angeles_to_denver';
$route['cheap-flight-los-angeles-to-dallas']= 'MainController/cheap_flight_los_angeles_to_dallas';
$route['cheap-flight-los-angeles-to-las-vegas']= 'MainController/cheap_flight_los_angeles_to_las_vegas';
$route['cheap-flight-los-angeles-to-toronto']= 'MainController/cheap_flight_los_angeles_to_toronto';
$route['cheap-flight-los-angeles-to-fort-lauderdale']= 'MainController/cheap_flight_los_angeles_to_fort_lauderdale';
$route['cheap-flight-los-angeles-to-houston']= 'MainController/cheap_flight_los_angeles_to_houston';
$route['cheap-flight-portland-to-atlanta']= 'MainController/cheap_flight_portland_to_atlanta';
$route['cheap-flight-portland-to-denver']= 'MainController/cheap_flight_portland_to_denver';
$route['cheap-flight-portland-to-houston']= 'MainController/cheap_flight_portland_to_houston';
$route['cheap-flight-portland-to-las-vegas']= 'MainController/cheap_flight_portland_to_las_vegas';
$route['cheap-flight-portland-to-tampa']= 'MainController/cheap_flight_portland_to_tampa';
$route['cheap-flight-portland-to-raleigh-durham']= 'MainController/cheap_flight_portland_to_raleigh_durham';
$route['cheap-flight-portland-to-san-diego']= 'MainController/cheap_flight_portland_to_san_diego';
$route['cheap-flight-portland-to-orlando']= 'MainController/cheap_flight_portland_to_orlando';
$route['cheap-flight-portland-to-newark-liberty-intl']= 'MainController/cheap_flight_portland_to_newark_liberty_intl';
$route['cheap-flight-savannah-to-san-diego']= 'MainController/cheap_flight_savannah_to_san_diego';
$route['cheap-flight-seattle-to-san-diego']= 'MainController/cheap_flight_seattle_to_san_diego';
$route['cheap-flight-seattle-to-calgary']= 'MainController/cheap_flight_seattle_to_calgary';
$route['cheap-flight-seattle-to-atlanta']= 'MainController/cheap_flight_seattle_to_atlanta';
$route['cheap-flight-seattle-to-miami']= 'MainController/cheap_flight_seattle_to_miami';
$route['cheap-flight-seattle-to-phoenix']= 'MainController/cheap_flight_seattle_to_phoenix';
$route['cheap-flight-seattle-to-dallas']= 'MainController/cheap_flight_seattle_to_dallas';
$route['cheap-flight-seattle-to-houston']= 'MainController/cheap_flight_seattle_to_houston';
$route['cheap-flight-seattle-to-newark-liberty-intl']= 'MainController/cheap_flight_seattle_to_newark_liberty_intl';
$route['cheap-flight-phoenix-to-toronto']= 'MainController/cheap_flight_phoenix_to_toronto';



$route['flight'] = 'MainController/flights';
