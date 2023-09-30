<?php
// include the Formr class
require_once 'Formr/class.formr.php';

// create our form object and use Bootstrap 4 as our form wrapper
$form = new Formr\Formr('bootstrap');

// make all fields required
$form->required = '*';
$form->action = '/anmeldung';
// check if the form has been submitted
if($form->submitted())
{
    // get our form values and assign them to a variable
    $data = $form->validate('Vorname, Nachname, Ort, mail, Handy, Geburtsdatum');
    // show a success message if no errors
    if($form->ok()) {

        $filename = '../../data/registration.csv';
        if (file_exists($filename)) {
            $fh = fopen($filename, 'a');
            fwrite($fh, 'd');
        } else {
            echo "sfaf";
            $fh = fopen($filename, 'wb');
            fwrite($fh, 'd');
        }
        $handle = fopen($filename, "a");
        fputcsv($handle, $data);
        fclose($handle);
        #var_dump($data);
        $form->success_message = "Vielen Dank für dein Interesse, {$data['vorname']}!";
    }
}
if(empty($query_city)){
    $subdomain  = explode('.', $_SERVER['HTTP_HOST'])[0];
}else{
    $subdomain = $query_city;
}

if($subdomain == "localhost:8080"){
    //if still empty its just a new registration
    //hack around with please enter city
    $subdomain = 'Bitte wählen';
}

$city_list = ['Hamburg','Berlin','Leipzig','Aurich','Bitte wählen'];
$search_array = array_map('strtolower', $city_list);
$ort = '';
$index = array_search(strtolower($subdomain), $search_array);
if(in_array(strtolower($subdomain), $search_array)){
    $city = $city_list[$index];
    $ort = ",$city";
}else{
    die("404"); //i lohate php <3
}

?>
    <div class="container">
        <?php
            // print messages, formatted using Bootstrap alerts
            $form->messages();
            
            $array = [
                'Vorname' => 'vorname,Vorname',
                'Nachname' => 'nachname,Nachname',
                'Ort' => "ort,Ort$ort",
                'mail' => 'mail,E-Mail',
                'handy' => 'handy,Handy',
                'radio' => 'gramsPerMonth,Gesch&auml;tzte Abnahmemenge pro Monat:,[<5g| 5-15g|25-50g],gramsPerMonth',
                'geburtsdatum' => 'geburtsdatum,Geburtsdatum'
            ];
            
            $form->fastform($array);
            // create the form
        ?>
    </div>
