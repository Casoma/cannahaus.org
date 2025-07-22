<?php
include("include/header.php");
?>
        <main class="main">
            <!--=============== HOME ===============-->
            <section class="home section container" id="home">
                <div class="home__container grid">
					<img src="/assets/img/cnnhs_logo_standard.svg"/ class="logo">
                    <div class="home__data">
						<h1>Cannahaus Hamburg e.V.</h1>
                        <p>Bei uns dreht sich alles um hochwertiges, legales Cannabis und alles drum herum. Wir sind ein Cannabis Social Club aus Wilhelmsburg, der eine sichere und verantwortungsvolle Umgebung für den Austausch und Genuss von Cannabis bietet. Gehöre zu den ersten, die dabei sind!<br />
						<br />
						<a href="https://app.casoma.de/apply/dea1aabd-9e16-4770-9cf9-25489182d3d2/" class="button">Jetzt anmelden!</a></p>
                    </div>
                </div>
            </section>
            <!--=============== Roadmap ===============-->
            <section class="about section container" id="roadmap">
                <div class="about__container grid">
                    <div class="about__data">
						
                        <h2 class="section__title-center">Unsere Roadmap im &Uuml;berblick:</h2>
						<p><strong>1. Lizenz zum Anbau:</strong> Wir befinden uns derzeit im Antragsprozess für die Lizenz zum Anbau von Cannabis. Parallel bauen wir unseren bereits vorhandenen Standort in Wilhelmsburg aus, damit es direkt losgehen kann, wenn alle rechtlichen Aspekte gekl&auml;rt sind.</p>
						<p><strong>2. Start mit 100 Mitgliedern:</strong> Wir beginnen mit einer exklusiven Gruppe von 100 Mitgliedern. Sollte die Nachfrage gr&ouml;&szlig;er sein, setzen wir eine Warteliste ein. Nach und nach &ouml;ffnen wir den Verein dann f&uuml;r insgesamt 500 Mitglieder.</p>
						<p><strong>3. Finanzierung und Mitgliedsbeitrag:</strong> Bis die erste Ernte fertig wird, erheben wir einen monatlichen Mitgliedsbeitrag von 10€ und beim Eintritt eine Aufnahmegeb&uuml;hr von 100€. Dies ist m&ouml;glich, weil wir uns derzeit prim&auml;r durch ein Darlehen finanzieren. Der Gesamtbetrag wird von dir per Lastschrift auf unser Vereinskonto eingezogen.</p>
						<p><strong>4. Anbau und Vielfalt:</strong> Sobald die Lizenz da ist, konzentrieren wir uns darauf, so schnell wie m&ouml;glich in die Produktion einzusteigen. Wir setzen auf Autoflowering-Pflanzen und den Kauf von angezogenen Stecklingen, um den Zeitraum bis zur ersten Ernte zu verk&uuml;rzen. Parallel entwickeln wir eine autonome Produktion mit einer nach und nach größer werdenden Auswahl an verschiedenen Sorten.</p>
						<p>Noch sind Plätze frei: Also herein in den Verein - und seid dabei, wenn Cannahaus Hamburg e.V. seine Ausgabe &ouml;ffnet! So k&ouml;nnen wir gemeinsam in eine bl&uuml;hende Zukunft starten.</p>
                    </div>
                    <img src="/assets/img/img_garten.svg"/>
                </div>
            </section>

            <!--=============== About ===============-->
            <section class="security section container" id="about">
                <div class="security__container grid">
					<img src="/assets/img/chart.svg"/>
                    <div class="security__data">
                        <h2 class="section__title-center">&Uuml;ber uns</h2>
                        <p class="security__description">Cannahaus Hamburg ist ein eingetragener Verein und fungiert als Cannabis Social Club. Wir teilen eine jahrelange Begeisterung für Cannabis und setzen uns für eine offene und verantwortungsvolle Cannabis-Kultur ein. Unser Ziel ist es, eine sichere und vertrauenswürdige Umgebung zu schaffen, die es unseren Mitglieder ermöglicht, Cannabis sicher und komfortabel beziehen zu können. Wir arbeiten eng mit unseren Mitgliedern zusammen, um genau die qualitativ hochwertigen Cannabis-Produkte zu produzieren, die sich in unserem Verein gew&uuml;nscht werden.
						<br><br>                    
						Wir sind eine aktive Gemeinschaft, die sich für die Legalisierung von Cannabis einsetzt und eine offene, tolerante und aufgeklärte Gesellschaft fördert. Wir heißen alle Interessierten herzlich willkommen, Teil unserer Gemeinschaft zu werden!
                        </p>
                        <h2 class="section__title-center">Rechtliches</h2>
                        <p class="security__description">Als Cannabis Social Club verpflichten wir uns, alle geltenden Regeln und Gesetze einzuhalten und setzen uns dafür ein, eine offene und verantwortungsvolle Cannabis-Kultur zu fördern. Wir werden uns an alle gesetzlichen Bestimmungen halten, die für den Betrieb eines Cannabis Social Clubs gelten, sobald wir die erforderlichen Genehmigungen erhalten haben.
                        </p>
                    </div>
                </div>
            </section>

            <!--=============== CONTACT ===============-->
            <section class="contact section container" id="contact" style="display:none;">
                <div class="contact__container grid">
                    <div class="contact_form">
                        <h3>Kontakt</h3>
						<p>
							Du hast eine Frage? Hier kannst du uns kontaktieren.<br />
							<br />
						</p>
						<?php
							include('include/contact_form.php');
						?>
                    </div>
					<div class="logo">
						<img src="/assets/img/cnnhs_logo_standard.svg"/ class="logo">
					</div>
                </div>
            </section>
        </main>

<?php
include("include/footer.php");
?>
