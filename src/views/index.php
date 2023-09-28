<?php
include("include/header.php");
?>
        <main class="main">
            <!--=============== HOME ===============-->
            <section class="home section container" id="home">
                <div class="home__container grid">
					<img src="/assets/img/cnnhs_logo_standard.svg"/ class="logo">
                    <div class="home__data">
                        <p class="home__description">Bei Cannahaus.org dreht sich alles um hochwertiges, legales Cannabis und alles drum herum. Wir sind ein geplanter Cannabis Social Club, der bald eröffnet und eine sichere und verantwortungsvolle Umgebung für den Austausch und Genuss von Cannabis bietet. Gehöre zu den ersten, die dabei sind!<br />
						<br />
						<a href="https://cannahaus.org/anmeldung/hamburg" class="button">Jetzt anmelden!</a></p>
                    </div>
                </div>
            </section>
            <!--=============== ABOUT ===============-->
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <div class="about__data">
                        <h2 class="section__title-center">&Uuml;ber uns</h2>
                        <p class="about__description">
                            Cannahaus.org ist ein geplanter Cannabis Social Club aus Hamburg und Berlin. Unsere Gründer haben einen Hintergrund in Software und IT sowie langjährige Erfahrung in Vereinen und NGOs. Wir teilen eine jahrelange Begeisterung für Cannabis und setzen uns für eine offene und verantwortungsvolle Cannabis-Kultur ein.
<br><br>
                            Unser Ziel ist es, eine sichere und vertrauenswürdige Umgebung zu schaffen, in der unsere Mitglieder Cannabis in all seinen Facetten genießen können. Wir arbeiten eng mit unseren Mitgliedern zusammen, um qualitativ hochwertige Cannabis-Produkte zu produzieren.
<br><br>                    
                            Wir sind eine aktive Gemeinschaft, die sich für die Legalisierung von Cannabis einsetzt und eine offene, tolerante und aufgeklärte Gesellschaft fördert. Wir heißen alle Interessierten herzlich willkommen, Teil unserer Gemeinschaft zu werden!
                        </p>
                    </div>
                    <img src="/assets/img/img_garten.svg"/>
                </div>
            </section>

            <!--=============== SECURITY ===============-->
            <section class="security section container">
                <div class="security__container grid">
					<img src="/assets/img/chart.svg"/>
                    <div class="security__data">
                        <h2 class="section__title-center">Rechtliches</h2>
                        <p class="security__description">Als Cannabis Social Club verpflichten wir uns, alle geltenden Regeln und Gesetze einzuhalten und setzen uns dafür ein, eine offene und verantwortungsvolle Cannabis-Kultur zu fördern. Wir werden uns an alle gesetzlichen Bestimmungen halten, die für den Betrieb eines Cannabis Social Clubs gelten, sobald wir die erforderlichen Genehmigungen erhalten haben.
                        </p>
                    </div>
                </div>
            </section>

            <!--=============== CONTACT ===============-->
            <section class="contact section container" id="contact">
                <div class="contact__container grid">
                    <div class="home__data">
                        <h3>Kontakt</h3>
						<p>
							Du hast eine Frage? Hier kannst du uns kontaktieren.<br />
							<br />
						</p>
						<?php
							include('include/contact_form.php');
						?>
                    </div>
					<img src="/assets/img/cnnhs_logo_standard.svg"/ class="logo">
                </div>
            </section>
        </main>

<?php
include("include/footer.php");
?>