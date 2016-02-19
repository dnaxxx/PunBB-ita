<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'		=>	'ltr',	// ltr (Sinistra-a-Destra) o rtl (Destra-a-Sinistra)
'lang_identifier'		=>	'it',

// Number formatting
'lang_decimal_point'        =>  '.', 
'lang_thousands_sep'        =>  ',', 

// Notices
'Bad request'			=>	'Richiesta non valida. Il link che hai seguito non è valido oppure è scaduto.',
'No view'				=>	'Non hai il permesso di visualizzare questo forum.',
'No permission'			=>	'Non hai il permesso di accere a questa pagina.',
'CSRF token mismatch'	=>	'Devi ri-cliccare sul pulsante conferma per inviare il messaggio (in gergo tecnico, il token di sicurezza è scaduto)',
'No cookie'				=>	'L\'accesso è stato effettuato con successo, tuttavia un cookie non è stato impostato. Si prega di verificare le impostazioni e, nel caso, attivare i cookie per questo sito.',


// Miscellaneous
'Forum index'			=>	'Indice delle Categorie',
'Submit'				=>	'Invia',	// "name" of submit buttons
'Cancel'				=>	'Cancella', // "name" of cancel buttons
'Preview'				=>	'Anteprima',	// submit button to preview message
'Delete'				=>	'Cancella',
'Split'					=>	'Dividere',
'Ban message'			=>	'Sei interdetto da questo forum.',
'Ban message 2'			=>	'L\'interdizione scade alla fine di ',
'Ban message 3'			=>	'L\'amministratore o il moderatore ti ha interdetto col seguente messaggio: ',
'Ban message 4'			=>	'Per favore inoltra ogni informazione all\'amministratore a ',
'Never'					=>	'Mai',
'Today'					=>	'Oggi',
'Yesterday'				=>	'Ieri',
'Forum message'			=>	'Messaggio del Forum',
'Maintenance warning'	=>	'<strong>Attenzione! %s Attivato.</strong> NON SCOLLEGATEVI altrimenti non sarete in grado di accedere nuovamente.',
'Maintenance mode'		=>	'Modo Manutenzione',
'Redirecting'			=>	'Reindirizzamento',
'Forwarding info'		=>	'Verrai trasferito automaticamente ad una nuova pagina in %s %s',
'second'				=>	'secondo',	// singular
'seconds'				=>	'secondi',	// plural
'Click redirect'		=>	'Clicca qui se non vuoi aspettare o se il tuo browser non ti trasferisce automaticamente',
'Invalid e-mail'		=>	'L\'indirizzo e-mail che hai inserito non è valido.',
'New posts'				=>	'Nuovi messaggi',	// the link that leads to the first new post
'New posts title'		=>	'Trova argomenti contenenti messaggi pubblicati dopo la tua ultima visita.',	// the popup text for new posts links
'Active topics'			=>	'Discussioni attive',
'Active topics title'	=>	'Trova argomenti che contengono messaggi recenti.',
'Unanswered topics'		=>	'Discussioni inattive',
'Unanswered topics title'	=>	'Trova argomenti che non contengono messaggi.',
'Username'				=>	'Username',
'Registered'			=>	'Registrato',
'Write message'			=>	'Scrivi messaggio:',
'Forum'					=>	'Forum',
'Posts'					=>	'Messaggi',
'Pages'					=>	'Pagine',
'Page'					=>	'Pagina',
'BBCode'				=>	'BBCode',	// You probably shouldn't change this
'Smilies'				=>	'Faccine',
'Images'				=>	'Immagini',
'You may use'			=>	'E\' possibile utilizzare: %s',
'and'					=>	'e',
'Image link'			=>	'immagine',	// This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'					=>	'ha scritto',	// For [quote]'s (e.g., User wrote:)
'Code'					=>	'Codice',		// For [code]'s
'Forum mailer'			=>	'%s Mailer',	// As in "MyForums Mailer" in the signature of outgoing e-mails
'Write message legend'	=>	'Scrivi il tuo messaggio ed invia',
'Required information'	=>	'Richiesta informazioni',
'Reqmark'					=>	'*',
'Required'				=>	'(Richiesto)',
'Required warn'			=>	'<strong>Importante!</strong> Tutti i campi contrassegnati devono essere completati prima di inoltrare questo modulo.',
'Crumb separator'			=>	' »&#160;', // The character or text that separates links in breadcrumbs
'Title separator'			=>	' - ',
'Page separator'			=>	'&#160;', //The character or text that separates page numbers
'Spacer'					=>	'…', // Ellipsis for paginate
'Paging separator'			=>	' ', //The character or text that separates page numbers for page navigation generally
'Previous'				=>	'Indietro',
'Next'					=>	'Avanti',
'Cancel redirect'		=>	'Operazione cancellata. Reindirizzamento &#8230;',
'No confirm redirect'	=>	'Non confermato. Operazione cancellata. Reindirizzamento &#8230;',
'Please confirm'		=>	'Confermare:',
'Help page'				=>	'Aiuta: %s',
'Re'					=>	'Re:',
'Page info'					=>	'(Pagina %1$ di %2$)',
'Item info single'			=>	'%s (%s)',
'Item info plural'			=>	'%s (%s-%s su %s)', // e.g. Topics [ 10 to 20 of 30 ]
'Info separator'			=>	' ', // e.g. 1 Page | 10 Topics
'Powered by'                =>  'Powered by <strong>%s</strong>, supported by <strong>%s</strong>.', 
'Maintenance'				=>	'Manutenzione',
'Installed extension'		=>	'L\'estensione ufficiale %s è installata. Copyright &copy; 2003&ndash;2012 <a href="http://punbb.informer.com/">PunBB</a>.',
'Installed extensions'		=>	'<span id="extensions-used" title="%s">%s estensioni ufficiali</span> correntemente installate. Copyright &copy; 2003&ndash;2012 <a href="http://punbb.informer.com/">PunBB</a>.',


// CSRF confirmation form
'Confirm'				=>	'Conferma',	// Button
'Confirm action'		=>	'E\' necessario confermare',
'Confirm action head'	=>	'Vi preghiamo di confermare o annullare',

// Title
'Title'					=>	'Titolo',
'Member'				=>	'Membro',	// Default title
'Moderator'				=>	'Moderatore',
'Administrator'			=>	'Amministratore',
'Banned'				=>	'Espulso',
'Guest'					=>	'Ospite',

// Stuff for include/parser.php
'BBCode error 1'		=>	'[/%1$] nessuna corrispondenza trovata [%1$]',
'BBCode error 2'		=>	'tag [%s] vuoto',
'BBCode error 3'		=>	'[%1$] aperto all\'interno di [%2$], questo non è consentito',
'BBCode error 4'		=>	'[%s] aperto in se stesso, questo non è consentito',
'BBCode error 5'		=>	'[%1$] nessuna corrispondenza trovata [/%1$]',
'BBCode error 6'		=>	'il tag [%s] ha avuto un attributo sezione vuoto',
'BBCode nested list'	=>	'i tag [list] non possono essere nidificati',
'BBCode code problem'	=>	'Si è verificato un problema con il tuo tag [code]',

// Stuff for the navigator (top of every page)
'Index'					=>	'Indice',
'User list'				=>	'Lista utenti',
'Rules'					=>  'Regole',
'Search'				=>  'Cerca',
'Register'				=>  'Registrati',
'register'				=>	'registrati',
'Login'					=>  'Accedi',
'login'					=>	'accedi',
'Not logged in'			=>  'Non hai eseguito l\'accesso.',
'Profile'				=>	'Profilo',
'Logout'				=>	'Logout',
'Logged in as'			=>	'Ciao %s.',
'Admin'					=>	'Amministrazione',
'Last visit'			=>	'Ultima visita: %s',
'Mark all as read'		=>	'Segna tutte le discussioni come già lette',
'Login nag'				=>	'Sei pregato di effettuare l\'accesso oppure di registrarti',
'New reports'			=>	'Nuovi Rapporti',

// Alerts
'New alerts'			=>	'Nuovi Avvisi',
'Maintenance alert'		=>	'<strong>ATTENZIONE!</strong> Questa board è in modalit&aacute; manutenzione. <em>NON</em> uscire, se lo fate non sarete più in grado di fare il login.',
'Updates'				=>	'Aggiornamento PunBB:',
'Updates failed'		=>	'L\'ultimo tentativo di verifica degli aggiornamenti su PunBB.org non è riuscito. Questo probabilmente significa che il servizio è temporaneamente sovraccarico. Tuttavia, se questo avviso non scompare nel giro di un giorno o due, si dovrebbe disattivare il controllo automatico degli aggiornamenti e controllare gli aggiornamenti manualmente in futuro.',
'Updates version n hf'	=>	'Una versione più recente della PunBB, v.%s, è disponibile per il download all\'indirizzo <a href="http://punbb.informer.com/">punbb.informer.com</a>. Inoltre, uno o più hotfix delle estensioni sono disponibili per l\'installazione sulla scheda \'Extensions\' dell\'interfaccia di amministrazione.',
'Updates version'		=>	'Una versione più recente della PunBB, v.%s, è disponibile per il download all\'indirizzo <a href="http://punbb.informer.com/">punbb.informer.com</a>.',
'Updates hf'			=>	'Uno o più hotfix delle estensioni sono disponibili per l\'installazione sulla scheda \'Extensions\' dell\'interfaccia di amministrazione.',
'Database mismatch'		=>	'Versione database disallineata',
'Database mismatch alert'	=>	'Il tuo database PunBB è pensato per essere usato in congiunzione con una versione più recente del codice PunBB. Questo disallineamento può portare ad un funzionamento del forum non corretto. Si suggerisce di aggiornare il forum per la versione più recente della PunBB.',

// Stuff for Jump Menu
'Go'					=>	'Vai',		// submit button in forum jump
'Jump to'				=>	'Vai al forum:',

// For extern.php RSS feed
'RSS description'		=>	'Gli argomenti più recenti di %s.',
'RSS description topic'	=>	'I messaggi più recenti di %s.',
'RSS reply'				=>	'Risposta: ',	// The topic subject will be appended to this string (to signify a reply)

// Accessibility
'Skip to content'		=>	'Vai al contenuto del forum',

// Debug information
'Querytime'                 =>  'Generated in %1$s seconds, %2$s queries executed', 
'Debug table'               =>  'Debug information', 
'Debug summary'             =>  'Database query performance information', 
'Query times'               =>  'Time (s)', 
'Query'                     =>  'Query', 
'Total query time'          =>  'Total query time', 

// Error message
'Forum error header'		=> 'Spiacente! La pagina non può essere caricata.',
'Forum error description'	=> 'Questo è probabilmente un errore temporaneo. Riprova aggiornando la pagina. Se il problema persiste, riprova tra 5-10 minuti',
'Forum error location'		=> 'Problema riscontrato nella linea %1$s in %2$s',
'Forum error db reported'	=> 'Il database ha riportato:',
'Forum error db query'		=> 'Query non riuscita:',

// Menu
'Menu admin'		=> 'Menù di amministrazione',
'Menu profile'		=> 'Menù dei profili',

);
