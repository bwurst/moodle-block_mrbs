<?php // $Id: block_mrbs.php,v 1.11 2009/11/07 14:50:34 arborrow Exp $
// Bearbeitung 20081008 Hilgenstock/Misch
// Bearbeitung 20081202 Ralf Krause
// Bearbeitung 20091107 Jens-Peter Misch
$string['about_mrbs'] = 'Über MRBS';
$string['accessdenied'] = 'Zugang verweigert';
$string['accessmrbs'] = 'Räume verwalten';
$string['addarea'] = 'Bereich hinzufügen';
$string['addentry'] = 'Eintrag hinzufügen';
$string['addroom'] = 'Raum hinzufügen';
$string['adminview'] = 'Unter welcher URL ist das MRBS installiert?';
$string['advanced_search'] = 'Erweiterte Suche';
$string['all_day'] = 'Ganztägig';
$string['area_admin_email'] = 'E-Mail des Bereichsadministrators';
$string['area'] = 'Bereich';
$string['areas'] = 'Bereiche';
$string['backadmin'] = 'Zurück zu Admin';
$string['bgcolor'] = 'bgcolor';
$string['blockname'] = 'Raumbuchungssystem';
$string['bookingmoved']        = 'Eine Buchung ist geändert worden';
$string['bookingmovedmessage']        = 'Ihre $a->name Buchung ist geändert worden von Resource $a->oldroom nach resource $a->newroom in $a->area auf die Stunde $a->date, $a->starttime. Die Resource wird benötigt für $a->newbookingname. ACHTUNG: Diese Umbuchung wurde durch die Computerautomatik durchgeführt, bitte kontrollieren Sie ob diese Ersatzresource brauchbar ist!';

$string['bookingmovedshort']        = '$a->name umgelegt auf $a->newroom';
$string['bookingmoveerror']        = 'RESOURCENBUCHUNGSFEHLER';
$string['bookingmoveerrormessage']        = 'Es ist eine Fehler aufgetreten bei der Umbuchung von $a->name (id: $a->id)';
$string['bookingmoveerrorshort']        = 'Es ist eine Fehler aufgetreten bei der Umbuchung von $a->name. Der Administrator wurde informiert.';
$string['bookingsfor'] = 'Einträge für';
$string['bookingsforpost'] = '';
$string['both'] = 'Beides';
$string['brief_description'] = 'Kurzbeschreibung:';
$string['browserlang'] = 'Die Spracheinstellung Ihres Browsers ist';
$string['capacity'] = 'Kapazität';
$string['charset'] = 'utf-8';
$string['clash']            = 'Konflikt: $a->oldbooking $a->newbooking $a->time mit Resource: $a->room';
$string['clashemailbody']            = 'Wärend des aktuellen Imports, gab es einen Konflikt bei der Buchuung der Resource: Bei $a->time, $a->oldbooking und $a->newbooking beide nutzen die Resource $a->room Bitte Lösen Sie das Problem. EINZIGE WARNUNG DIESES KONFLIKTS. WENN SIE DIESE E-MAIL IGNORIEREN KANN ES ZU PROBLEMEN KOMMEN. Diese Mail wurde Automatisch vom Resourcensystem versendet, wenn Sie denken das das ein Fehler ist, kontaktieren Sie den Administrator über die Mail: $a->admin';
$string['clashemailnotsent']            = 'Kann die E-Mail nicht versenden an ';
$string['clashemailsent']            = 'E-Mail versendet an';
$string['clashemailsub']            = 'Raumkonlikt Alarm';
$string['class'] = 'Klasse';
$string['click_to_reserve'] = 'Klicken Sie in ein Feld, um eine Reservierung zu machen.';
$string['computerroom'] = 'Nur Computerräume';
$string['computerrooms'] = 'Computerräume';
$string['config_admin_email'] = 'MRBS Administrator E-Mail';
$string['config_admin_email2'] = 'E-Mail-Adresse des MRBS-Administrators';
$string['config_admin'] = 'MRBS Admin';
$string['config_admin2'] = 'Name des MRBS-Administrators';
$string['config_area_list_format'] = 'Anzeige der Bereiche';
$string['config_area_list_format2'] = 'Sollen Bereiche als Liste (Auflisten) oder Auswahlbox (Auswählen) angezeigt werden?';
$string['config_cookie_path_override'] = 'Cookie Pfad überschreiben';
$string['config_cookie_path_override2'] = 'Wenn dieser Wert gesetzt ist, dann wird der benutzt von der \'php\' session Schema zum überschreiben des standardmäßigen Verhalten der automatischen entscheidung welche Cookiepfad genommen wird.';
$string['config_date_ddmmyy'] = '10 Juli';
$string['config_date_mmddyy'] = 'Juli 10';
$string['config_dateformat'] = 'Datumsformatierung';
$string['config_dateformat2'] = 'Datumsformat, wie es MRBS darstellt.';
$string['config_default_report_days'] = 'Berichtszeitraum (Tage)';
$string['config_default_report_days2'] = 'Voreingestellter Berichtszeitraum, angegeben in Tagen';
$string['config_default_room'] = 'Ausgewählter Raum';
$string['config_default_room2'] = 'Dieser Raum oder diese Ressource wird beim ersten Start des MRBS angezeigt (benutzt durch die index.php). Raum-/Ressourcennummer kann man über den Link auf den Raum herausbekommen';
$string['config_default_view'] = 'Anzeige Modus';
$string['config_default_view2'] = 'Definition des Anzeigemodus beim Start des MRBS (Monat, Woche oder Tag)';
$string['config_enable_periods'] = 'Eigene Zeitangabe';
$string['config_enable_periods2'] = 'Diese Einstellung ermöglicht die Angabe von eigenen Zeitblöcken für die MRBS-Buchung. Wenn hier \'Nein\' gewählt wird, dann wird ein gleichmäßiges Zeitraster für den Tag erzeugt.';
$string['config_entry_type'] = 'Typ $a';
$string['config_entry_type2'] = 'Dieser Typ bezieht sich auf den \'Eintrag hinzufügen\' Dialog. Jeder Typ bezieht sich auf eine andere Farbe. Die Typen werden nach folgender Ordnung angezeigt: \'Typ A\', \'Typ B\', \'Typ C\', etc';
$string['config_eveningends_min'] = 'Endzeit Minute';
$string['config_eveningends_min2']  = 'Endzeit (Minute) des Tages. \"Eigene Zeitangabe\" muss deaktiviert sein.';
$string['config_eveningends'] = 'Endzeit Stunde';
$string['config_eveningends2']  = 'Endzeit (Stunde) des Tages. \"Eigene Zeitangabe\" muss deaktiviert sein.';
$string['config_highlight_method'] = 'Hervorhebung';
$string['config_highlight_method2'] = 'Wählen Sie eine Möglichkeit zur Hervorhebung aus:  bgcolor, class oder hybrid.';
$string['config_javascript_cursor'] = 'Javascript cursor';
$string['config_javascript_cursor2'] = 'Wählen Sie \'Nein\', wenn Clients noch alte Browser benutzen, die inkompatibel zu Javascript sind.';
$string['config_mail_admin_all'] = 'E-Mail an Admin (jede Änderung)';
$string['config_mail_admin_all2'] = 'Versenden einer E-Mail bei jeglicher Änderung der Buchungen im MRBS';
$string['config_mail_admin_on_bookings'] = 'E-Mail an Admin';
$string['config_mail_admin_on_bookings2'] = 'Administrator wird per E-Mail informiert wenn neue Buchungen gemacht werden.';
$string['config_mail_admin_on_delete'] = 'E-Mail an Admin (löschen)';
$string['config_mail_admin_on_delete2'] = 'E-Mail an den MRBS-Admin bei Raum-/Ressourcen Löschungen';
$string['config_mail_area_admin_on_bookings'] = 'E-Mail an Bereichsadmin';
$string['config_mail_area_admin_on_bookings2'] = 'Bereichsadministrator wird per E-Mail informiert wenn neue Buchungen in seinem Bereich gemacht werden.';
$string['config_mail_booker'] = 'E-Mail Information';
$string['config_mail_booker2'] = 'Versenden einer E-Mail an die Person die einen Raum-/Resource bucht.';
$string['config_mail_cc'] = 'Kopie an (CC)';
$string['config_mail_cc2'] = 'E-Mail-Empfänger in CC-Feld eintragen. Grundeinstellung ist leer. Es können mehrere Empfänger eingetragen werden. Für jeden muss ein Moodle-Account vorhanden sein.' ;
$string['config_mail_details'] = 'Maildetails';
$string['config_mail_details2'] = 'Maildetails';
$string['config_mail_from'] = 'Absender E-Mail';
$string['config_mail_from2'] = 'Setzt die Absenderadresse von MRBS ausgehenden Mails. Default ist die MRBS Administrator E-Mail-Adresse. Die Absenderadresse muss einem Moodle Benutzer zugeordet werden können!';
$string['config_mail_recipients'] = 'E-Mail-Empfänger';
$string['config_mail_recipients2'] = 'Geben Sie die E-Mail der Empfänger ein.  Es können mehrere Empfänger eingetragen werden. Die Trennung erfolgt durch ein Komma zwischen den Adressen \'john@doe.com,scott@tiger.com\'. Für jeden muss ein Moodle-Account vorhanden sein.';
$string['config_mail_room_admin_on_bookings'] = 'E-Mail an Raum-/Ressourceadmin';
$string['config_mail_room_admin_on_bookings2'] = 'Raum-/Ressourceadministrator wird per E-Mail informiert, wenn neue Buchungen in seinem Raum bzw. für seine Ressource gemacht werden.';
$string['config_max_rep_entrys'] = 'Max. Wiederholungen';
$string['config_max_rep_entrys2'] = 'Maximale Anzahl von Terminwiederholungen';
$string['config_monthly_view_entries_details'] = 'Details in Monatsansicht zeigen';
$string['config_monthly_view_entries_details2'] = 'In der Monatsansicht können Anfangs-/Endzeitpunkt, Kurzbeschreibung oder beide gezeigt werden. Einstellung \'Beschreibung\' für die Kurzbeschreibung, \'slot\' für den Zeitraum und \'beide\' für beide. Grundeinstellung ist \'beide\'. Jedoch werden zunächst max. 6 Einträge pro Tag angezeigt (12 sind einstellbar).';
$string['config_morningstarts_min'] = 'Start Minute';
$string['config_morningstarts_min2']  = 'Startzeit (Minute) des Tages. \"Eigene Zeitangabe\" muss deaktiviert sein.';
$string['config_morningstarts'] = 'Start Stunde';
$string['config_morningstarts2']  = 'Startzeit (Stunde) des Tages. \"Eigene Zeitangabe\" muss deaktiviert sein.';
$string['config_new_window'] = 'Fenster';
$string['config_new_window2'] = 'Wenn \'Neues Fenster\' ausgewählt ist, dann wird das MRBS in einem neuem Fenster geöffnet. Wenn \'Gleiches Fenster\' gewählt ist, dann wird das MRBS im gleichen Fenster geöffnet - innerhalb von Moodle mit Navigationsleiste!';
$string['config_periods'] = 'Liste der Zeitblöcke';
$string['config_periods2']  = 'Passen Sie die Zeitblöcke an Ihre eigenen Bedürfnisse an. Definieren Sie die Einträge in der richtigen Reihenfolge und setzen Sie immer nur einen Eintrag pro Zeile, z.B.: 1.Std. oder 07.30-09.00 Uhr';
$string['config_refresh_rate'] = 'Seitenaktualisierung';
$string['config_refresh_rate2'] = 'Seitenaktualisierung (Angabe in Sekunden). Zum Deaktivieren setzen Sie die Einstellung auf 0.';
$string['config_resolution'] = 'Zeitraster';
$string['config_resolution2']  = 'Zeitraster zur Buchung. \"Eigene Zeitangabe\" muss deaktiviert sein.';
$string['config_search_count'] = 'Suchergebnisse pro Seite';
$string['config_search_count2'] = 'Suchergebnisse pro Seite';
$string['config_show_plus_link'] = '(+)-Verknüpfung anzeigen';
$string['config_show_plus_link2'] = 'Ja auswählen, um die (+)-Verknüpfung immer anzuzeigen';
$string['config_timeformat'] = 'Zeitformatierung';
$string['config_timeformat2']  = 'Zeitformat, wie es MRBS darstellt.';
$string['config_times_right_side'] = 'Zeitangabe rechts';
$string['config_times_right_side2'] = 'Um die Zeitangaben auch auf der rechten Seite anzuzeigen, muss hier \'Ja\' ausgewählt werden';
$string['config_view_week_number'] = 'Anzeigen der Wochennummer';
$string['config_view_week_number2'] = 'Anzeige der Wochennummer anstatt des Datums des ersten Tages dieser Woche (z.B. 13 Okt)';
$string['config_weeklength']         = 'Tage der woche';
$string['config_weeklength2']         = 'Wie viele Tage der Woche sollen angezeigt werden?';
$string['config_weekstarts'] = '1. Wochentag';
$string['config_weekstarts2'] = 'Wählen Sie hier den ersten Wochentag aus.';
$string['confirmdel'] = 'Sind Sie sicher, dass Sie diesen Eintrag löschen wollen?';
$string['conflict'] = 'Der neue Eintrag hat einen Konflikt mit folgenden Einträgen:';
$string['createdby'] = 'Erstellt von:';
$string['cronfile'] = 'Speicherort der Sessionimport Datei';
$string['cronfiledesc'] = 'If you wish to use the automatic session import feature, enter the location of the file here. The file must be able to be moved by the webserver user. By entering a location, you will enable special booking types for imported bookings';
$string['ctrl_click_type'] = 'Mehrfachauswahl mit Strg-Click';
$string['ctrl_click'] = 'Mehrfachauswahl mit Strg-Click';
$string['database'] = 'Datenbank: ';
$string['dayafter'] = 'nächster Tag ';
$string['daybefore'] = ' vorheriger Tag';
$string['days'] = 'Tage';
$string['delarea'] = 'Sie müssen alle Räume dieses Bereiches löschen, damit Sie den Bereich löschen können<p>';
$string['delete_user'] = 'Lösche diesen Benutzer';
$string['deleteentry'] = 'Eintrag löschen';
$string['deletefollowing'] = 'Dadurch werden die folgenden Einträge gelöscht';
$string['deleteseries'] = 'Alle Einträge löschen';
$string['dontshowoccupied']   = 'Keine belegten Resourcen anzeigen.';
$string['doublebookebody']    = ' $a->user has double booked your room, $a->room, at $a->time on $a->date. This clashes with your booking for $a->oldbooking. The user has booked the room for $a->newbooking. If this is not a problem, no action is required. However, if you weren\'t expecting this, please contact the user to resolve the conflict. This message has been sent automatically by the online room booking system, if you think you have recieved this in error please contact $a->admin';
$string['doublebookesubject'] = 'Doppelbuchung Information';
$string['doublebookefailsubject'] = 'Doppelbuchung informations Fehler';
$string['doublebookefailbody'] = 'Die folgende Nachricht konnte nicht versendet werden an $a:';
$string['duration'] = 'Dauer:';
$string['edit_user'] = 'Bearbeite Benutzer';
$string['editarea'] = 'Bereich bearbeiten';
$string['editentry'] = 'Eintrag ändern';
$string['editroom'] = 'Raum bearbeiten';
$string['editroomarea'] = 'Raum- oder Bereichsbeschreibung bearbeiten';
$string['editseries'] = 'Alle Einträge ändern';
$string['end_date'] = 'Enddatum:';
$string['entries_found'] = 'Einträge gefunden';
$string['entry_found'] = 'Eintrag gefunden';
$string['entry'] = 'Eintrag';
$string['entryid'] = 'Eintrags-ID ';
$string['error_area'] = 'Fehler: Bereich ';
$string['error_room'] = 'Fehler: Raum ';
$string['error_send_email'] = 'Fehler beim Versenden der E-Mail an: $a';
$string['external'] = 'Extern';
$string['failed_connect_db'] = 'Schwerer Fehler: Kann nicht an Datenbank anbinden';
$string['failed_to_acquire'] = 'Konnte nicht exclusiv auf die Datenbank zugreifen';
$string['finishedimport']  = 'Prozess abgeschlossen, hat: $a Sekunden in Anspruch genommen';
$string['for_any_questions'] = 'für Fragen, die hier nicht beantwortet sind.';
$string['fulldescription'] = 'Beschreibung:';
$string['goto'] = 'Start';
$string['gotothismonth'] = 'aktueller Monat';
$string['gotothisweek'] = 'aktuelle Woche';
$string['gototoday'] = 'heute';
$string['highlight_line'] = 'Markieren Sie diese Zeile';
$string['hours'] = 'Stunden';
$string['hybrid']            = 'hybrid';
$string['idontcare']        = 'Doppelte Buchung ist OK';
$string['importedbooking']    = 'Importierte Buchung';
$string['importedbookingmoved']    = 'Importierte Buchung (Editiert)';
$string['importlog']    = 'MRBS Import log';
$string['in'] = 'in';
$string['include'] = 'Generiere:';
$string['internal'] = 'Intern';
$string['invalid_entry_id'] = 'Fehlerhafter Eintrag id.';
$string['invalid_search'] = 'Leerer oder ungültiger Suchbegriff.';
$string['invalid_series_id'] = 'Falsche Serien-ID';
$string['mail_body_changed_entry'] = 'Veränderter Eintrag';
$string['mail_body_del_entry'] = 'Gelöschter Eintrag';
$string['mail_body_new_entry'] = 'Neuer Eintrag';
$string['mail_changed_entry'] = 'Ein Eintrag wurde verändert, hier sind die Details.';
$string['mail_deleted_entry'] = 'Ein Eintrag wurde gelöscht, hier sind die Details';
$string['mail_new_entry'] = 'Ein neuer Eintrag wurde angelegt, hier sind die Details';
$string['match_area'] = 'Suche Bereich:';
$string['match_descr'] = 'Suche Beschreibung:';
$string['match_entry'] = 'Suche Kurzbeschreibung:';
$string['match_room'] = 'Suche Raum:';
$string['match_type'] = 'Nach Art:';
$string['mincapacity'] = 'Minimale Kapazität';
$string['minutes']            = 'Minuten'; //duplicated in moodle.php but needed for view_entry.php foreach loop
$string['monthafter'] = 'nächster Monat ';
$string['monthbefore'] = ' vorheriger Monat';
$string['movedto']        = ' verlegt nach';
$string['mrbs:administermrbs'] = 'Zugriff MRBS (lesen / schreiben / admin)';
$string['mrbs:editmrbs'] = 'Zugriff MRBS (lesen / schreiben)';
$string['mrbs:doublebook'] = 'Doppelte Buchung der Resource';
$string['mrbs:forcebook'] = 'Überschreiben von gebuchten Resourcen (automatische Verschiebung der vorher gebuchten Resource)';
$string['mrbs:viewalltt'] = 'Sehen von allen Benutzerbuchungen';
$string['mrbs:viewmrbs'] = 'Zugriff MRBS (nur lesen)';
$string['mrbs'] = 'Raumbuchungssystem MRBS';
$string['mustlogin'] = 'Sie müssen sich anmelden, um den Kalender zu sehen';
$string['namebooker'] = 'Reservierung für:';
$string['newwindow'] = 'Neues Fenster'; //see MDL-15952
$string['no_rooms_for_area'] = 'Der Bereich enthält keinen Raum';
$string['no_user_with_email'] = 'Kein Moodle-Nutzer hat die E-Mail-Adresse: $a. Alle MRBS zugeordneten E-Mails müssen mit einem Moodle-Nutzer übereinstimmen, der die gleiche E-Mail hat.';
$string['no_users_create_first_admin'] = 'Erstellen Sie einen Nutzer als Administrator. Nach dem Login kann dieser weitere Nutzer anlegen.';
$string['no_users_initial'] = 'In der Datenbank sind keine Nutzer vorhanden. Legen Sie den ersten Nutzer an.';
$string['noarea'] = 'Kein Bereich ausgewählt';
$string['noareas'] = 'Keine Bereiche';
$string['norights'] = 'Sie haben keine Berechtigung, diesen Eintrag zu ändern';
$string['norooms'] = 'Keine Räume vorhanden.';
$string['noroomsfound']            = 'Schade, keine Resourcen gefunden';
$string['not_found'] = ' nicht gefunden';
$string['not_php3'] = '<H1>WARNUNG: Funktioniert wahrscheinlich nicht mit PHP3</H1>';
$string['of'] = ' von ';
$string['pagewindow'] = 'Gleiches Fenster';
$string['password_twice'] = 'Falls Sie Ihr Passwort ändern wollen, geben Sie das neue Passwort zweimal ein.';
$string['period'] = 'Block';
$string['periods'] = 'Blöcke';
$string['please_contact'] = 'Bitte kontaktieren Sie ';
$string['postbrowserlang'] = '.';
$string['ppreview'] = 'Druckansicht';
$string['records'] = 'Ergebnisse ';
$string['rep_dsp_dur'] = 'Dauer';
$string['rep_dsp_end'] = 'Endzeit';
$string['rep_dsp'] = 'zeige im Report:';
$string['rep_end_date'] = 'Wiederholung bis:';
$string['rep_for_nweekly'] = '(jede n-te Woche)';
$string['rep_for_weekly'] = '(wöchentlich)';
$string['rep_freq'] = 'Häufigkeit:';
$string['rep_num_weeks'] = 'Abstand:';
$string['rep_rep_day'] = 'Wiederholung am:';
$string['rep_type_0'] = 'Keine';
$string['rep_type_1'] = 'täglich';
$string['rep_type_2'] = 'wöchentlich';
$string['rep_type_3'] = 'monatlich';
$string['rep_type_4'] = 'jährlich';
$string['rep_type_5'] = 'monatlich, entsprechender Tag';
$string['rep_type_6'] = 'jede n-te Woche';
$string['rep_type'] = 'Wiederholung?';
$string['repeat_id'] = 'Wiederholungs ID ';
$string['report_and_summary'] = 'Bericht und Zusammenfassung';
$string['report_end'] = 'Bericht Ende:';
$string['report_on'] = 'Bericht über Termine:';
$string['report_only'] = 'nur Bericht';
$string['report_start'] = 'Bericht Beginn:';
$string['requestvacate']      = 'Anfrage ob diese Resource umgebuchzt werden kann';
$string['requestvacatemessage']= '{$a->user} requests that you move {$a->description} from room {$a->room}, {$a->datetime}. Please contact them to discuss this.[Give a reason]';
$string['requestvacatemessage_html']= '{$a->user} requests that you move <a href="{$a->href}">{$a->description}</a> from room {$a->room}, {$a->datetime}. Please contact them to discuss this.<br /><br />[Give a reason]';
$string['resolution_units'] = ' Minuten';
$string['returncal'] = 'Zurück zur Kalenderansicht';
$string['returnprev'] = 'Zurück zur vorherigen Seite';
$string['rights'] = 'Rechte';
$string['room_admin_email'] = 'E-Mail des Raumadministrators';
$string['room'] = 'Raum';
$string['rooms'] = 'Räume';
$string['roomsearch'] = 'Raum Suche';
$string['roomsfree']              = 'Resource frei...';
$string['sched_conflict'] = 'Konflikt in der Planung';
$string['search_for'] = 'Suche nach';
$string['search_results'] = 'Suchergebnis für:';
$string['seconds'] = 'Sekunden';
$string['serverpath'] = 'MRBS Installationspfad';
$string['show_my_entries'] = 'Klick um alle meine anstehenden Einträge anzuzeigen';
$string['slot'] = 'Zeitfenster';
$string['sort_rep_time'] = 'Startzeit/Datum ';
$string['sort_rep'] = 'Sortiere Report nach:';
$string['specialroom'] = 'Ausklammern spezieller Resourcen';
$string['start_date'] = 'Anfangsdatum:';
$string['startedimport']         = 'Datei gefunden, beginne mit Import-Prozess...';
$string['submitquery'] = 'Bericht erstellen';
$string['sum_by_creator'] = 'Ersteller';
$string['sum_by_descrip'] = 'Kurzbeschreibung';
$string['summarize_by'] = 'Zusammenfassung nach:';
$string['summary_header_per'] = 'Ergebniss des (eingetragenen) Zeitraums';
$string['summary_header'] = 'Stundenzusammenfassung der Einträge';
$string['summary_only'] = 'nur Zusammenfassung';
$string['sure'] = 'Sind Sie sicher?';
$string['system'] = 'System: ';
$string['teachingroom'] = 'Nur Unterrichtsresourcen';
$string['through'] = ' bis ';
$string['too_may_entrys'] = 'Die gewählten Optionen würden zu viele Einträge erzeugen.<BR>Ändern Sie bitte die Optionen!';
$string['ttfor']     = 'Plan für: ';
$string['type'] = 'Art:';
$string['typea']               = NULL;
$string['unknown'] = 'Unbekannt';
$string['update_area_failed'] = 'Update Bereich fehlgeschlagen: ';
$string['update_room_failed'] = 'Raum aktualisieren gescheitert: ';
$string['useful_n-weekly_value'] = 'useful n-weekly value';
$string['valid_room'] = 'Resource.';
$string['valid_time_of_day'] = 'Gültige Uhrzeit';
$string['viewday'] = 'Zeige Tag';
$string['viewmonth'] = 'Zeige Monat';
$string['viewweek'] = 'Zeige Woche';
$string['weekafter'] = 'nächste Woche ';
$string['weekbefore'] = ' vorherige Woche';
$string['weeks'] = 'Wochen';
$string['you_are'] = 'Sie sind';
$string['you_have_not_entered'] = 'Sie haben folgendes Feld nicht ausgefüllt :';
$string['you_have_not_selected'] = 'Sie haben keine Resource ';
?>
