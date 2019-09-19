<?php

/*	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org
	
	File: qa-lang/de/qa-lang-emails.php
	Version: 1.8
	Date: 2019-09-19
	Description: Language phrases for email notifications in German
	Translation: Peter Chiochetti, Moritz Bunkus, Philip Schilling, Corinna Baldauf, Fulgor@github


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "Ihre Antwort bei ^site_title hat einen neuen Kommentar von ^c_handle:\n\n^open^c_content^close erhalten.\n\nIhre Antwort war:\n\n^open^c_context^close\n\nSie können mit einem eigenen Kommentar antworten:\n^url\n\nVielen Dank\n\n^site_title",
		'a_commented_subject' => 'Ihre Antwort bei ^site_title hat einen neuen Kommentar erhalten',
		'a_followed_body' => "Ihre Antwort bei ^site_title hat eine neue ähnliche Frage von ^q_handle:\n\n^open^q_title^close erhalten.\n\nIhre Antwort war:\n\n^open^a_content^close\n\nKlicken Sie bitte den folgenden Link, um die neue Frage zu beantworten:\n^url\n\nVielen Dank\n\n^site_title",
		'a_followed_subject' => 'Ihre Antwort bei ^site_title hat eine ähnliche Frage',
		'a_selected_body' => "Herzlichen Glückwunsch! Ihre Antwort bei ^site_title wurde von ^s_handle als Beste ausgewählt:\n\n^open^a_content^close\n\nDie Frage war:\n\n^open^q_title^close\n\nKlicken Sie bitte den folgenden Link, um die Antwort zu sehen:\n^url\n\nVielen Dank\n\n^site_title",
		'a_selected_subject' => 'Ihre Antwort bei ^site_title wurde als beste ausgewählt!',
		'c_commented_body' => "Bei ^site_title hat ^c_handle einen neuen Kommentar nach Ihrem Kommentar hinterlassen:\n\n^open^c_content^close\n\nHier finden Sie die Unterhaltung:\n\n^open^c_context^close\n\nSie können mit einem eigenen Kommentar antworten:\n^url\n\nVielen Dank\n\n^site_title",
		'c_commented_subject' => 'Ihr Kommentar bei ^site_title wurde hinzugefügt zu',
                'confirm_body' => "Bitte klicken Sie den folgenden Link, um Ihre E-Mail-Adresse bei ^site_title zu bestätigen:\n^url\n\nBestätigungscode: ^code\n\nVielen Dank\n\n^site_title",
		'confirm_subject' => '^site_title - E-Mail-Adresse bestätigen',
		'feedback_body' => "Kommentare:\n^message\n\nName:\n^name\n\nE-Mail:\n^email\n\nVorherige Seite:\n^previous\n\nKonto:\n^url\n\nIP-Addresse:\n^ip\n\nBrowser:\n^browser",
		'feedback_subject' => '^ Feedback',
		'new_password_body' => "Unten finden Sie Ihr neues Passwort für ^site_title.\n\nPasswort: ^password\n\nBitte ändern Sie dieses Passwort beim nächsten Anmelden in ein selbst gewähltes.\n\nVielen Dank\n\n^site_title\n^url",
		'new_password_subject' => '^site_title - Ihr neues Passwort',
		'remoderate_body' => "Ein geänderter Beitrag von ^p_handle benötigt Ihre erneute Zustimmung:\n\n^open^p_context^close\n\nKlicken Sie unten um die Änderung zu gewähren oder abzulehnen:\n\n^url\n\n\nKlicken sie unten um alle ausständigen Änderungen zu prüfen:\n\n^a_url\n\n\nVielen Dank\n\n^site_title",
		'remoderate_subject' => '^site_title Moderation',
		'u_registered_body' => "Ein neues Konto wurde registriert als ^u_handle.\n\nKlicken Sie unten um das Profil zu sehen:\n\n^url\n\nVielen Dank\n\n^site_title",
		'u_to_approve_body' => "Ein neues Konto wurde registriert als ^u_handle.\n\nKlicken Sie unten zur Bestätigung:\n\n^url\n\nKlicken Sie unten um alle ausständigen Anträge zu sehen:\n\n^a_url\n\nVielen Dank\n\n^site_title",
		'u_registered_subject' => '^site_title hat ein neues Konto',
		'u_approved_body' => "Sie können Ihr neues Profil hier sehen:\n\n^url\n\nVielen Dank\n\n^site_title",
		'u_approved_subject' => 'Ihr ^site_title Konto wurde anerkannt',
		'wall_post_subject' => 'Auf Ihre Pinnwand schreiben ^site_title',
		'wall_post_body' => "^f_handle hat auf Ihre Pinnwand auf ^site_title geschrieben:\n\n^open^post^close\n\nSie können darauf hier antworten:\n\n^url\n\nVielen Dank\n\n^site_title",
		'q_answered_body' => "^a_handle hat Ihre Frage bei ^site_title beantwortet:\n\n^open^a_content^close\n\nIhre Frage war:\n\n^open^q_title^close\n\nWenn die Antwort gut ist, können Sie sie zur Besten wählen:\n^url\n\nVielen Dank\n\n^site_title",
		'q_answered_subject' => 'Ihre Frage bei ^site_title wurde beantwortet',
		'q_commented_body' => "^c_handle hat Ihre Frage bei ^site_title kommentiert:\n\n^open^c_content^close\n\nIhre Frage war:\n\n^open^c_context^close\n\nSie können mit einem eigenen Kommentar antworten:\n^url\n\nVielen Dank\n\n^site_title",
		'q_commented_subject' => 'Ihre Frage bei ^site_title hat einen neuen Kommentar',
		'q_posted_body' => "^q_handle hat eine neue Frage gestellt\n\n^open^q_title\n\n^q_content^close\n\nKlicken Sie den folgenden Link, um die Frage zu sehen:\n^url\n\nVielen Dank\n\n^site_title",
		'q_posted_subject' => 'Bei ^site_title gibt es eine neue Frage',
		'reset_body' => "Bitte klicken Sie den folgenden Link, um Ihr Passwort für ^site_title zurückzusetzen:\n^url\n\nAlternativ können Sie den untenstehenden Code in das Feld auf der Website eingeben.\n\nCode: ^code\n\nWenn Sie Ihr Passwort nicht zurücksetzen wollen, ignorieren Sie diese E-Mail einfach.\n\nVielen Dank\n\n^site_title",
		'reset_subject' => '^site_title - Passwort zurücksetzen',
		'welcome_body' => "Vielen Dank, dass Sie sich bei ^site_title angemeldet haben.\n\n^custom^confirm\nIhre Login-Daten lauten:\n\nKonto: ^handle\nE-Mail: ^email\nPasswort: ^password\n\nBitte bewahren Sie diese Informationen sicher auf.\n\nVielen Dank\n\n^site_title\n^url",
		'welcome_confirm' => "Bitte klicken Sie den folgenden Link, um Ihre E-Mail-Adresse zu bestätigen:\n^url\n",
		'welcome_subject' => 'Willkommen bei ^site_title!',
		'flagged_body' => "Ein Beitrag von ^p_handle hat ^flags erhalten:\n\n^open^p_context^close\n\nKlicken Sie den folgenden Link, um den Beitrag zu sehen:\n^url\n\nKlicken Sie unten um alle ausständigen markierten Beiträge zu prüfen\n^a_url\n\nVielen Dank\n\n^site_title",
		'flagged_subject' => '^site_title hat einen Beitrag markiert',
		'private_message_body' => "Sie haben eine private Nachricht von ^f_handle auf ^site_title erhalten:\n\n^open^message^close.\n\n^moreVielen Dank\n\n^site_title\n\n\nIn den Einstellungen Ihres Kontos können Sie private Nachrichten sperren:\n^a_url",
		'private_message_info' => "Mehr Informationen über ^f_handle:\n^url\n\n",
		'private_message_reply' => "Klicken Sie den Link, um ^f_handle mit einer privaten Nachricht zu antworten:\n^url\n\n",
		'private_message_subject' => 'Nachricht von ^f_handle auf ^site_title',
		'moderate_body' => "Ein Beitrag von ^p_handle erfordert die Freigabe:\n\n^open^p_context^close\n\nKlicken Sie diesen Link, um den Beitrag freizugeben oder abzulehnen:\n\n^url\n\nKlicken Sie unten um alle ausständigen Beiträge zu prüfen\n^a_url\n\nVielen Dank\n\n^site_title",
		'moderate_subject' => '^site_title Moderation',
		'to_handle_prefix' => "^,\n\n",
	);


/*
	Omit PHP closing tag to help avoid accidental output
*/
