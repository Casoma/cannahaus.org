<?php
// include the Formr class
require_once 'Formr/class.formr.php';

// create our form object and use Bootstrap 4 as our form wrapper
$form = new Formr\Formr('bootstrap');

// make all fields required
$form->required = '*';

// check if the form has been submitted
if($form->submitted())
{
    // get our form values and assign them to a variable
    $data = $form->validate('Vorname, Nachname, Ort, E-Mail, Handy, Geburtsdatum');
    var_dump($data);
    // show a success message if no errors
    if($form->ok()) {
        $form->success_message = "Vielen Dank für dein Interesse, {$data['vorname']}!";
    }
}

$subdomain  = explode('.', $_SERVER['HTTP_HOST'])[0];
$city_list = ['Hamburg','Berlin','Leipzig','Aurich'];
$search_array = array_map('strtolower', $city_list);
$ort = '';
if($index = in_array(strtolower($subdomain), $search_array)){
    $city = $city_list[$index];
    $ort = ",$city";
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
                'birthdate' => 'birthdate,Geburtsdatum'
            ];
            
            $form->fastform($array);
            // create the form
        ?>
    </div>
