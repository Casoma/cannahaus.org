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
                        <p>Bei Cannahaus.org dreht sich alles um hochwertiges, legales Cannabis und alles drum herum. Wir sind ein geplanter Cannabis Social Club, der bald eröffnet und eine sichere und verantwortungsvolle Umgebung für den Austausch und Genuss von Cannabis bietet. Gehöre zu den ersten, die dabei sind!<br />
						<br />
						<a href="https://cannahaus.org/anmeldung/hamburg" class="button">Jetzt anmelden!</a></p>
                    </div>
                </div>
            </section>
            <!--=============== Roadmap ===============-->
            <section class="about section container" id="roadmap">
                <div class="about__container grid">
                    <div class="about__data">
						
                        <h2 class="section__title-center">Unsere Roadmap im &Uuml;berblick:</h2>
						<p><strong>1. Auf die Legalisierung warten:</strong> Sobald die Bundesregierung den Startschuss f&uuml;r die Legalisierung gibt, sind wir bereit. Wir verfolgen gespannt die Entwicklungen und stehen in den Startl&ouml;chern.</p>
						<p><strong>2. Mitgliedschaft sichern:</strong> Interessiert daran, Teil unserer Cannabis-Community zu werden? Dann sichert euch schon jetzt einen Platz auf unserer Warteliste. Klickt einfach auf "Jetzt anmelden" und lasst uns wissen, dass ihr dabei sein m&ouml;chtet.</p>
						<p><strong>3. Start mit 100 Mitgliedern:</strong> Wir beginnen mit einer exklusiven Gruppe von 100 Mitgliedern. Sollte die Nachfrage gr&ouml;&szlig;er sein, setzen wir eine Warteliste ein. Geduld zahlt sich aus &ndash; sobald wir die Grenze aufheben, &ouml;ffnen wir den Verein f&uuml;r insgesamt 500 Mitglieder.</p>
						<p><strong>4. Anbau und Vielfalt:</strong> Nach dem Start konzentrieren wir uns darauf, so schnell wie m&ouml;glich in die Produktion einzusteigen. Wir setzen auf Autoflowering-Pflanzen und den Kauf von angezogenen Stecklingen, um den Zeitraum bis zur ersten Ernte zu verk&uuml;rzen. Parallel entwickeln wir eine autonome Produktion mit einer breiten Auswahl an verschiedenen Sorten.</p>
						<p><strong>5. Sortenvielfalt:</strong> Unsere Anfangsauswahl besteht aus 4-6 Sorten, darunter sowohl Sativa als auch Indica. Wir bieten Sorten mit unterschiedlichem THC-Gehalt an, damit jeder etwas nach seinem Geschmack findet.</p>
						<p><strong>6. Finanzierung und Mitgliedsbeitrag:</strong> In den ersten Phasen erheben wir nur einen kleinen, zweistelligen Mitgliedsbeitrag. Dies ist m&ouml;glich, weil wir die Anfangsphase durch ein Darlehen finanzieren. So k&ouml;nnen wir gemeinsam in eine bl&uuml;hende Zukunft starten.</p>
						<p>Bleibt auf dem Laufenden und seid dabei, wenn Cannahaus Hamburg e.V. seine T&uuml;ren &ouml;ffnet!</p>
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
                        <p class="security__description">Cannahaus.org ist ein geplanter Cannabis Social Club. Wir teilen eine jahrelange Begeisterung für Cannabis und setzen uns für eine offene und verantwortungsvolle Cannabis-Kultur ein. Unser Ziel ist es, eine sichere und vertrauenswürdige Umgebung zu schaffen, die es unseren Mitglieder ermöglicht, Cannabis sicher und komfortabel beziehen zu können. Wir arbeiten eng mit unseren Mitgliedern zusammen, um qualitativ hochwertige Cannabis-Produkte zu produzieren.
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
            <section class="contact section container" id="contact">
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