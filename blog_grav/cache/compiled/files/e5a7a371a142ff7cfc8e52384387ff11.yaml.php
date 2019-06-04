<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/plugins/login/languages/ro.yaml',
    'modified' => 1559591875,
    'data' => [
        'PLUGIN_LOGIN' => [
            'USERNAME' => 'Nume utilizator',
            'PASSWORD' => 'Parolă',
            'ACCESS_DENIED' => 'Acces refuzat...',
            'LOGIN_FAILED' => 'Logare eșuată...',
            'LOGIN_SUCCESSFUL' => 'Ați fost logat cu succes.',
            'BTN_LOGIN' => 'Logare',
            'BTN_LOGOUT' => 'Ieșire din cont ',
            'BTN_FORGOT' => 'Am uitat',
            'BTN_REGISTER' => 'Înregistrare',
            'BTN_RESET' => 'Resetează parola',
            'BTN_SEND_INSTRUCTIONS' => 'Trimite instrucțiuni pentru resetare',
            'RESET_LINK_EXPIRED' => 'Link-ul pentru resetarea parolei a expirat, vă rugăm încercați din nou ',
            'RESET_PASSWORD_RESET' => 'Parola a fost modificată',
            'RESET_INVALID_LINK' => 'Link-ul pentru resetare este invalid, Invalid reset link used, vă rugăm încercați din nou ',
            'FORGOT_INSTRUCTIONS_SENT_VIA_EMAIL' => 'Instrucțiunile pentru resetarea parolei au fst trimise pe email',
            'FORGOT_FAILED_TO_EMAIL' => 'Instrucțiunile nu au putut fi trimise pe email, vă rugăm încercați mai târziu ',
            'FORGOT_CANNOT_RESET_EMAIL_NO_EMAIL' => 'Parola nu poate fi resetată pentru %s, nu este setată nici o adresă de email',
            'FORGOT_USERNAME_DOES_NOT_EXIST' => 'Utilizatorul cu numele <b>%s</b> nu există',
            'FORGOT_EMAIL_NOT_CONFIGURED' => 'Parola nu poate fi resetată. Acest site nu este configurat pentru a trimite email-uri.',
            'FORGOT_EMAIL_SUBJECT' => '%s Cerere de resetare a parolei',
            'FORGOT_EMAIL_BODY' => '<h1>Resetare parolă</h1><p> Dragă %1$s,</p><p>O cerere de resetare a parolei a fost făcută în data de <b>%4$s</b>.</p><p><br /><a href="%2$s" class="btn-primary">Apasă aici pentru a reseta parola</a><br /><br /></p><p>Alternativ, copiază URL de mai jos în bara de adrese a browser-ului favorit:</p> <p class="word-break"><a href="%2$s">%2$s</a></p> <p><br />Cu respect,<br /><br />%3$s</p>',
            'SESSION' => '&ldquo;Ține-mă minte&rdquo;-Sesiune',
            'REMEMBER_ME' => 'Ține-mă minte',
            'REMEMBER_ME_HELP' => 'Setează o cookie în browserul Dvs. ce permite menținerea datelor de logare între sesiuni.',
            'REMEMBER_ME_STOLEN_COOKIE' => 'Altcineva a folosit darele Dvs de logare pentru a accesa această pagină! Toate sesiunile au fost deconectate. Vă rugăm să vă logați cu datele Dvs. și să verificați toate detaliile. ',
            'BUILTIN_CSS' => 'Folosește CSS-ul din modul',
            'BUILTIN_CSS_HELP' => 'Include CSS-ul furnizat de către modulul Admin',
            'ROUTE' => 'Calea pentru logare',
            'ROUTE_HELP' => 'O rută personalizată către pagina de logare pe care o furnizează tema activă ',
            'ROUTE_REGISTER' => 'Calea pentru înregistrare  ',
            'ROUTE_REGISTER_HELP' => 'Ruta către pagina de înregistrare. Setați această rută dacă doriți folosirea paginei implicite pentru înregistrare. Lăsați gol dacă folosiți o pagină personalizată pentru înregistrare.',
            'USERNAME_NOT_VALID' => 'Numele de utilizator trebuie să fie între 3-16 caractere, incluzând litere mici, numere, linii de subliniere și cratime. Literele de tipar, spațiile și caracterele speciale nu sunt permise. ',
            'USERNAME_NOT_AVAILABLE' => 'Utilizatorul  %s există deja, vă rugăm alegeți un alt nume de utilizator ',
            'PASSWORD_NOT_VALID' => ' Parola trebuie să conțină cel puțin 1 număr și o literă de tipar și o literă mică; și să aibă minim 8 caractere',
            'PASSWORDS_DO_NOT_MATCH' => ' Parolele nu sunt identice. Vă rugăm verificați că ași scris aceeiași parolă de două ori.',
            'USER_NEEDS_EMAIL_FIELD' => 'Utilizatorul trebuie să aibă adresa de email completată',
            'EMAIL_SENDING_FAILURE' => 'A apărut o eroare la trimirea email-ului',
            'ACTIVATION_EMAIL_SUBJECT' => 'Activați-vă contrul pentru %s',
            'ACTIVATION_EMAIL_BODY' => 'Salut %s, apasă  <a href="%s">aici</a> pentru a-ți activa contul de pe %s',
            'WELCOME_EMAIL_SUBJECT' => 'Bine ați venit pe %s',
            'WELCOME_EMAIL_BODY' => 'Salut %s, bine ai venit la %s!',
            'NOTIFICATION_EMAIL_SUBJECT' => 'Utilizator nou pe %s',
            'NOTIFICATION_EMAIL_BODY' => 'Salut, un nou utilizator s-a înregistrat pe  %s. Nume de utilizator: %s, adresă de email: %s',
            'ACTIVATION_LINK_EXPIRED' => 'Link-ul pentru activare este expirat',
            'USER_ACTIVATED_SUCCESSFULLY' => 'Utilizator activat cu succes',
            'INVALID_REQUEST' => 'Cerere invalidă ',
            'USER_REGISTRATION' => 'Înregistrare utilizator ',
            'USER_REGISTRATION_ENABLED_HELP' => 'Activați înregistrarea utilizatorilor',
            'VALIDATE_PASSWORD1_AND_PASSWORD2' => 'Validați parola introdusă de două ori',
            'VALIDATE_PASSWORD1_AND_PASSWORD2_HELP' => 'Validați și comparați cele două câmpuri pentru parolă cu numele `password1` și `password2`. Activați această opțiune dacă există două câmpuri pentru parolă în formularul de înregistrare.',
            'SET_USER_DISABLED' => 'Setați utilizatorul dezactivat',
            'SET_USER_DISABLED_HELP' => 'Cel mai bine să fie folosit împreună cu email-ul pentru activare. Adaugă utilizatorul în Grav dar îl setează ca dezactivat',
            'LOGIN_AFTER_REGISTRATION' => 'Loghează utilizatorul după înregistrare',
            'LOGIN_AFTER_REGISTRATION_HELP' => 'Imediat după înregistrare loghează utilizatorul în cont. Dacă este necesară activarea prin email, utilizatorul va fi logat imediat după activarea contului.',
            'SEND_ACTIVATION_EMAIL' => 'Trimite email-ul pentru activare',
            'SEND_ACTIVATION_EMAIL_HELP' => 'Trimite un email către utilizatorul nou înregistrat pentru activarea contului. Activați opțiunea `Setați utilizatorul dezactivat` când folosiți această opțiune pentru a seta utilizatorul dezactivat și pentru a trimite un email automat pentru activarea contului. ',
            'SEND_NOTIFICATION_EMAIL' => 'Trimite email cu notificare',
            'SEND_NOTIFICATION_EMAIL_HELP' => 'Notifică adminstratorul site-ului când un utilizator nou s-a înregistrat. Email-ul va di trimis către adresa `Către` din configurarea modului de Email',
            'SEND_WELCOME_EMAIL' => 'Trimite email de bun venit',
            'SEND_WELCOME_EMAIL_HELP' => 'Trimite un email către utilizatorul nou înregistrat.',
            'DEFAULT_VALUES' => ' Valori implicite',
            'DEFAULT_VALUES_HELP' => 'Listă de câmpuri și valorile asociate acestora ce vor fi adăugate profilului utilizatorului (în fișierul yaml) în mod implicit fără a putea fi configurabile de către utilizator. Separați valorile multiple cu virgulă, fără spații între valori.',
            'ADDITIONAL_PARAM_KEY' => 'Parametru',
            'ADDITIONAL_PARAM_VALUE' => 'Valoare',
            'REGISTRATION_FIELDS' => 'Câmpuri pentru înregistrare',
            'REGISTRATION_FIELDS_HELP' => 'Adaugă câmpurile ce vor fi adăugate fișierului yaml al utilizatorului. Câmpurile care nu sunt listate aici nu vor fi adăugate chiar dacă sunt prezente în formularul de înregistrare.',
            'REGISTRATION_FIELD_KEY' => ' Numele câmpului',
            'REDIRECT_AFTER_LOGIN' => 'Redirecționează după logare',
            'REDIRECT_AFTER_LOGIN_HELP' => 'Ruta personalizată pentru redirecționare după logare',
            'REDIRECT_AFTER_REGISTRATION' => 'Redirecționează după înregistrare',
            'REDIRECT_AFTER_REGISTRATION_HELP' => 'Ruta personalizată pentru redirecționare după înregistrare',
            'OPTIONS' => 'Opțiuni',
            'EMAIL_VALIDATION_MESSAGE' => 'Trebuie să fie o adresă de email validă',
            'PASSWORD_VALIDATION_MESSAGE' => 'Parola trebuie să conțină cel puțin un număr și o literă de tipar și să aibă cel puțin 8 caractere',
            'TIMEOUT_HELP' => 'Setează pauza pentru sesiune când este activat \'Ține-mă minte\' de către utilizator. Minimul este de 604800 care înseamnă 1 săptămână.',
            'GROUPS_HELP' => 'Lista grupurilor din care utilizatorii nou înregistrați vor face parte, dacă este necesar',
            'SITE_ACCESS_HELP' => 'Lista cu niveluri de acces la care utilizatorul nou înregistrat are acces. De eg: `login` -> `true` ',
            'WELCOME' => 'Bine ați venit',
            'REDIRECT_AFTER_ACTIVATION' => 'Redirecționează după activarea utilizatorului',
            'REDIRECT_AFTER_ACTIVATION_HELP' => 'Folosită dacă utilizatorul trebuie să-și activeze contul prin email.  Odată activat contul va fi folosită această rută.',
            'REGISTRATION_DISABLED' => ' Dezactivează înregistrarea ',
            'USE_PARENT_ACL_LABEL' => 'Folosește regulile de acces ale părintelui',
            'USE_PARENT_ACL_HELP' => 'Verifică regulie de acces ale părintelui dacă nu sunt specificate alte reguli de acces',
            'PROTECT_PROTECTED_PAGE_MEDIA_LABEL' => ' Protejează media ce aparține paginii de logare ',
            'PROTECT_PROTECTED_PAGE_MEDIA_HELP' => 'Dacă este activată, media ce aparține unei pagini de logare este protejată și nu poate fi accesată decât după logare.'
        ]
    ]
];
