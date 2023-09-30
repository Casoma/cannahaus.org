<?php

require_once __DIR__.'/router.php';

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
get('/', 'views/index.php');

get('/anmeldung/$query_city', 'views/anmeldung.php');
get('/anmeldung', 'views/anmeldung.php');
post('/anmeldung', 'views/anmeldung.php');

post('/contact', 'include/contact_form.php');

// A route with a callback
/*get('/callback', function(){
  echo 'Callback executed';
});*/

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','views/404.php');
