<?php
include("include/header.php");
?>

        <main class="main test">
            <!--=============== HOME ===============-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__data">
                        <img src="assets/img/Cannahaus_cropped.png"/ class="logo">
                        <p class="home__description">Bei Cannahaus.org dreht sich alles um hochwertiges, legales Cannabis und alles drum herum. Wir sind ein geplanter Cannabis Social Club, der bald eröffnet und eine sichere und verantwortungsvolle Umgebung für den Austausch und Genuss von Cannabis bietet. Gehör' zu den Ersten, die dabei sind!</p>
                        <p>Mit deiner Anmeldung registrierst du dich für die Einladung zur Gründungsversammlung des Cannahaus Cannabis Social Clubs. Es fallen keine Kosten an und es besteht damit noch keine Vereinsmitgliedschaft. Hier&uuml;ber wird sp&auml;ter entschieden.</p>
                    </div>   
                    <div>
                        <h1>Jetzt Mitglied werden*</h1>
                        <?php
                        include("include/registration_form.php");
                        ?>
                        <p>*Der Verein befindet sich derzeitig in der Gründung, mit diesem Formular möchte ich zur Gründungsversammlung eingeladen werden.</p>
                    </div>
                </div>
            </section>

            <!--=============== SECURITY ===============-->
            <section class="security section container">
                <div class="security__container grid">
                    <div class="security__data">
                        <h2 class="section__title-center">Rechtliches</h2>
						<img src="assets/img/ICON_5.png"/>
                    </div>
					<div>
						<p class="security__description">Als Cannabis Social Club verpflichten wir uns, alle geltenden Regeln und Gesetze einzuhalten und setzen uns dafür ein, eine offene und verantwortungsvolle Cannabis-Kultur zu fördern. Wir werden uns an alle gesetzlichen Bestimmungen halten, die für den Betrieb eines Cannabis Social Clubs gelten, sobald wir die erforderlichen Genehmigungen erhalten haben.</p>
					</div>
                </div>
            </section>

<?php
include("include/footer.php");
?>