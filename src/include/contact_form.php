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
    // make sure our Message field has at least 10 characters
    $form->validate('Nachricht(min[10])');

    // let's email the form
    $to = 'cannahaus@systemli.org';
    $from = 'cannahaus@systemli.org';
    $subject = 'Kontaktformular Cannahaus.org';
    //$mail = $form->send_email($to, $subject, 'POST', $from, 'HTML');
    // this processes our form, cleans the input, and sends it as an HTML email
    if($form->send_email($to, $subject, 'POST', $from, 'HTML'))
    {
        // email sent; print a thank you message
        $form->success_message('Vielen Dank für deine Nachricht! Wir melden uns so schnell wie möglich bei dir.');
    }else{
        echo "Die Mail konnte nicht versendet werden :/"
    }
}else{
?>
    <div class="container">
        <?php
            // print messages, formatted using Bootstrap alerts
            $form->messages();

            // create the form
            $form->create_form('Vorname, Nachname, E-Mail, Handy, Nachricht|textarea');
        ?>
    </div>
<?php
}?>