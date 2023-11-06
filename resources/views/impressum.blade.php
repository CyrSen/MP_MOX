@extends('layouts.master')

@section('title', 'myOfficeX')

@section('content')

    <!-- Impressum-Inhalt -->
    <section class="py-5" id="impressum">
        <div class="rgba-black-strong"></div>
        <div class="container {{-- bg-light --}} mt-5 px-4 py-2" style="background-color:rgba(236, 236, 236, 0.96)">
            <div class="wow fadeIn">
                <h1 class="h1 pt-4 my-4">Impressum</h1>

                <h4 class="mt-5 mb-3"><strong>Datenschutzerklärung</strong></h4>

                <p class="blue-grey-text custom-font-weight">
                    Vielen Dank für Ihr Interesse an unserem Unternehmen. Diese Datenschutzerklärung informiert Sie
                    darüber, wie wir personenbezogene Daten verarbeiten, wenn Sie unsere Webseite besuchen oder mit uns
                    in Kontakt treten, auch wenn das Unternehmen derzeit noch nicht gegründet ist. Wir nehmen den Schutz
                    Ihrer Daten sehr ernst und behandeln sie vertraulich und gemäss den geltenden Datenschutzgesetzen.

                <h6><strong>Arten der verarbeiteten Daten</strong></h6>
                <p class="blue-grey-text custom-font-weight">
                    Wir erfassen und verarbeiten personenbezogene Daten, die Sie uns freiwillig zur Verfügung stellen,
                    wenn Sie mit uns über das Kontaktformular, per E-Mail oder auf andere Weise kommunizieren. Diese
                    Daten können Ihren Namen, Ihre E-Mail-Adresse, Telefonnummer und andere Informationen enthalten, die
                    für die Kommunikation und Bearbeitung Ihrer Anfragen erforderlich sind.
                </p>

                <h6><strong>Zweck der Datenverarbeitung</strong></h6>
                <p class="blue-grey-text custom-font-weight">
                    Wir verwenden Ihre personenbezogenen Daten nur für die Zwecke, für die sie erhoben wurden. Dies
                    umfasst die Beantwortung Ihrer Anfragen, die Kommunikation mit Ihnen, das Bereitstellen von
                    Informationen über unser Unternehmen und unsere Dienstleistungen sowie die Einhaltung rechtlicher
                    Verpflichtungen.
                </p>

                <h6><strong>Rechtsgrundlage der Datenverarbeitung</strong></h6>
                <p class="blue-grey-text custom-font-weight">
                    Die Verarbeitung Ihrer personenbezogenen Daten erfolgt auf der Grundlage Ihrer Einwilligung (Artikel
                    6 Absatz 1 lit. a DSGVO) oder zur Erfüllung eines Vertrags oder vorvertraglicher Massnahmen (Artikel
                    6 Absatz 1 lit. b DSGVO).
                </p>

                <h6><strong>Datenübermittlung an Dritte</strong></h6>
                <p class="blue-grey-text custom-font-weight">
                    Wir geben Ihre Daten nicht ohne Ihre ausdrückliche Zustimmung an Dritte weiter, es sei denn, wir
                    sind gesetzlich dazu verpflichtet oder es ist zur Erfüllung vertraglicher Verpflichtungen
                    erforderlich. In einigen Fällen können wir Dienstleister oder Auftragsverarbeiter beauftragen, die
                    Ihre Daten in unserem Auftrag verarbeiten. Diese Dritten sind vertraglich verpflichtet, Ihre Daten
                    vertraulich zu behandeln und sie nur für die vereinbarten Zwecke zu verwenden.
                </p>

                <h6><strong>Speicherdauer der Daten</strong></h6>
                <p class="blue-grey-text custom-font-weight">
                    Wir speichern Ihre personenbezogenen Daten nur so lange, wie es für die Zwecke, für die sie erhoben
                    wurden, erforderlich ist, es sei denn, es bestehen gesetzliche Aufbewahrungspflichten. Wenn Ihre
                    Daten nicht mehr benötigt werden, werden sie sicher gelöscht oder anonymisiert.
                </p>

                <h6><strong>Anonyme Nutzung der Feedback-App</strong></h6>
                <p class="blue-grey-text custom-font-weight">
                    Bitte beachten Sie, dass unsere Feedback-App auch anonym genutzt werden kann. Sie haben die
                    Möglichkeit, Feedback ohne Angabe von personenbezogenen Daten zu senden. In solchen Fällen werden
                    keinerlei personenbezogene Daten erfasst und Ihre Anonymität bleibt gewahrt.
                </p>

                <h6><strong>Ihre Rechte</strong></h6>
                <p class="blue-grey-text custom-font-weight">
                    Sie haben das Recht auf Auskunft über die von uns verarbeiteten personenbezogenen Daten, das Recht
                    auf Berichtigung unrichtiger Daten, das Recht auf Löschung Ihrer Daten, das Recht auf Einschränkung
                    der Verarbeitung, das Recht auf Datenübertragbarkeit und das Recht auf Widerspruch gegen die
                    Verarbeitung Ihrer Daten. Bitte kontaktieren Sie uns über die oben genannten Kontaktdaten, um Ihre
                    Rechte auszuüben oder wenn Sie Fragen oder Bedenken haben.
                </p>

                <h6><strong>Aktualisierungen der Datenschutzerklärung</strong></h6>
                <p class="blue-grey-text custom-font-weight">
                    Diese Datenschutzerklärung kann von Zeit zu Zeit aktualisiert werden, um Änderungen in unseren
                    Datenschutzpraktiken oder rechtlichen Anforderungen widerzuspiegeln. Wir empfehlen Ihnen, diese
                    Datenschutzerklärung regelmässig zu überprüfen, um über etwaige Änderungen informiert zu bleiben.
                    Die aktualisierte Datenschutzerklärung wird auf unserer Webseite veröffentlicht.
                </p>

                <h6><strong>Kontakt</strong></h6>
                <p class="blue-grey-text custom-font-weight">
                    Wenn Sie Fragen zur Verarbeitung Ihrer personenbezogenen Daten oder zur Datenschutzerklärung haben,
                    können Sie sich jederzeit an uns wenden:<br>
                    myOfficeX<br>
                    Dufoustrasse 49<br>
                    8008 Zürich<br>
                    contact@myofficex.ch<br>
                </p>

                <p class="blue-grey-text custom-font-weight">
                    Vielen Dank für Ihr Vertrauen und Ihr Interesse an unserem Unternehmen.
                </p>

                <h4 class="mt-5 mb-3"><strong>Entwickler</strong></h4>
                {{-- <p class="blue-grey-text custom-font-weight" style="display:none;">
                    <h5 class=""><b><i>Cyrill Senger:</i></b></h5>
                    Projektmanagment, Konzeption, UX-Research und Frontend-Design
                    <br><br>
                    <h5 class=""><b><i>Gaudenz Raiber:</i></b></h5>
                    Fullstack Produktion und Verarbeitung, Database-Konzeption, -Produktion und -Managment, Authentication und Usermanagment, Deployment.<br>
                    
                </p> --}}

                <p>
                    <h5 class=""><a href="https://www.google.com/search?q=Krakatoom-Design-Studio" target="_blank" style="border-bottom: none;"><b>Krakatoom-Design-Studio</b></a></h5>
                    Projektmanagment, Konzeption, Head of Information
                    <br><br>
                </p>

                <p class="blue-grey-text custom-font-weight">
                    Letzte Aktualisierung: 10. September 2023
                </p>
            </div>
        </div>
    </section>

@endsection
