<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/plugins/login/languages/uk.yaml',
    'modified' => 1560785226,
    'data' => [
        'PLUGIN_LOGIN' => [
            'USERNAME' => 'Логін',
            'EMAIL' => 'Email',
            'USERNAME_EMAIL' => 'Логін/Email',
            'PASSWORD' => 'Пароль',
            'ACCESS_DENIED' => 'Доступ заборонено...',
            'LOGIN_FAILED' => 'Помилка входу...',
            'LOGIN_SUCCESSFUL' => 'Ви успішно увійшли в систему.',
            'BTN_LOGIN' => 'Увійти',
            'BTN_LOGOUT' => 'Вийти',
            'BTN_FORGOT' => 'Забув',
            'BTN_REGISTER' => 'Реєстрація',
            'BTN_RESET' => 'Скидання пароля',
            'BTN_SEND_INSTRUCTIONS' => 'Надіслати інструкції по скиданню',
            'RESET_LINK_EXPIRED' => 'Час посилання для скидання минув, спробуйте ще раз',
            'RESET_PASSWORD_RESET' => 'Пароль був скинутий',
            'RESET_INVALID_LINK' => 'Невірне посилання скидання, спробуйте ще раз',
            'FORGOT_INSTRUCTIONS_SENT_VIA_EMAIL' => 'Інструкції щодо скидання пароля були надіслані по електронній пошті',
            'FORGOT_FAILED_TO_EMAIL' => 'Не вдалося надіслати інструкції електронною поштою, повторіть спробу пізніше',
            'FORGOT_CANNOT_RESET_EMAIL_NO_EMAIL' => 'Не вдається скинути пароль для %s, адреса електронної пошти не встановлена',
            'FORGOT_CANNOT_RESET_EMAIL_NO_PASSWORD' => 'Неможливо скинути пароль для %s, цей email пов\'язаний з віддаленим обліковим записом',
            'FORGOT_USERNAME_DOES_NOT_EXIST' => 'Користувач з ім\'ям <b>%s </b> не існує',
            'FORGOT_EMAIL_NOT_CONFIGURED' => 'Неможливо скинути пароль. Цей сайт не налаштований для надіслання листів',
            'FORGOT_EMAIL_SUBJECT' => '%s Запит на скидання пароля',
            'FORGOT_EMAIL_BODY' => '<h1>Відновлення паролю</h1><p>Шановний %1$s,</p><p>Був зроблений запит для скидання пароля від <b>%4$s</b>.</p><p><br /><a href="%2$s" class="btn-primary">Нажмите, чтобы сбросить пароль</a><br /><br /></p><p>Или скопируйте следующий URL-адрес в адресную строку браузера:</p> <p class="word-break"><a href="%2$s">%2$s</a></p> <p><br />С уважением,<br /><br />%3$s</p>',
            'SESSION' => '&ldquo;Запам\'ятати мене&rdquo;-Сесія',
            'REMEMBER_ME' => 'Запам\'ятати мене',
            'REMEMBER_ME_HELP' => 'Встановлює постійний файл cookie у вашому браузері, щоб дозволити постійну аутентифікацію входу між сеансами.',
            'REMEMBER_ME_STOLEN_COOKIE' => 'Хтось ще використовував вашу реєстраційну інформацію для доступу до цієї сторінки! Всі сеанси були відключені. Увійдіть до свого облікового запису та перевірте свої дані.',
            'BUILTIN_CSS' => 'Використовувати вбудований CSS',
            'BUILTIN_CSS_HELP' => 'Використовувати CSS, наданий плагіном адміністратора.',
            'ROUTE' => 'Шлях сторінки входу',
            'ROUTE_HELP' => 'Шлях до користувальницької сторінці входу, яку надає ваша тема',
            'ROUTE_REGISTER' => 'Шлях реєстрації',
            'ROUTE_REGISTER_HELP' => 'Шлях до користувальницької сторінці реєстрації. Заповніть, якщо ви хочете використовувати вбудовану сторінку реєстрації. Залиште його порожнім, якщо у вас є власна реєстраційна форма',
            'USERNAME_NOT_VALID' => 'Ім\'я користувача має бути від 3 до 16 символів, включаючи малі літери, цифри, символи підкреслення та дефіси. Великі літери, пробіли та спеціальні символи не допускаються',
            'USERNAME_NOT_AVAILABLE' => 'Ім\'я користувача %s вже існує, виберіть інше ім\'я користувача',
            'EMAIL_NOT_AVAILABLE' => 'Адреса електронної пошти %s вже існує, виберіть іншу адресу електронної пошти',
            'PASSWORD_NOT_VALID' => 'Пароль повинен містити як мінімум одне число, одну прописну і малу літеру, і бути не менше 8 символів',
            'PASSWORDS_DO_NOT_MATCH' => 'Паролі не співпадають. Двічі перевірте, що ви двічі ввели той же пароль',
            'USER_NEEDS_EMAIL_FIELD' => 'Користувачеві потрібно поле електронної пошти',
            'EMAIL_SENDING_FAILURE' => 'Помилка під час надіслання листа',
            'ACTIVATION_EMAIL_SUBJECT' => 'Активуйте свій обліковий запис %s',
            'ACTIVATION_EMAIL_BODY' => 'Привіт %s, перейдіть <a href="%s">сюди</a> для активації вашого облікового запису %s',
            'ACTIVATION_NOTICE_MSG' => 'Привіт %s, ваш обліковий запис створено, будь ласка перевірте електронну пошту, щоб повністю його активувати',
            'WELCOME_EMAIL_SUBJECT' => 'Ласкаво просимо в %s',
            'WELCOME_EMAIL_BODY' => 'Привіт %s, ласкаво просимо в %s!',
            'WELCOME_NOTICE_MSG' => 'Привіт %s, ваш обліковий запис був успішно створений',
            'NOTIFICATION_EMAIL_SUBJECT' => 'Новий користувач %s',
            'NOTIFICATION_EMAIL_BODY' => 'Привіт, новий користувач, зареєстрований на %s. Ім\'я користувача: %s, email: %s',
            'EMAIL_FOOTER' => 'GetGrav.org',
            'ACTIVATION_LINK_EXPIRED' => 'Час посилання для активації минув',
            'USER_ACTIVATED_SUCCESSFULLY' => 'Користувач успішно активований',
            'USER_ACTIVATED_SUCCESSFULLY_NOT_ENABLED' => 'Аккаунт користувача активований, але обліковий запис проглядається',
            'INVALID_REQUEST' => 'Невірний запит',
            'USER_REGISTRATION' => 'Реєстрація користувача',
            'USER_REGISTRATION_ENABLED_HELP' => 'Включити реєстрацію користувача',
            'VALIDATE_PASSWORD1_AND_PASSWORD2' => 'Подвійна перевірка введеного пароля',
            'VALIDATE_PASSWORD1_AND_PASSWORD2_HELP' => 'Підтвердити і порівняти два різних поля для паролів з іменами `password1` і` password2`. Увімкніть це, якщо у вас є два поля пароля в реєстраційній формі',
            'SET_USER_DISABLED' => 'Встановити користувача як відключений',
            'SET_USER_DISABLED_HELP' => 'Найкраще використовувати електронну пошту «Надіслати електронну пошту активації». Додає користувача в Grav, але встановлює його як відключений',
            'LOGIN_AFTER_REGISTRATION' => 'Вхід в систему після реєстрації',
            'LOGIN_AFTER_REGISTRATION_HELP' => 'Автоматичний вхід в систему після реєстрації. Якщо потрібна активація електронної пошти, користувач буде входити в систему відразу після активації облікового запису',
            'SEND_ACTIVATION_EMAIL' => 'Надіслати лист активації',
            'SEND_ACTIVATION_EMAIL_HELP' => 'Надіслати електронного листа користувачу для активації облікового запису. Увімкніть параметр «Встановити користувача як відключений» при використанні цієї функції, щоб користувач був відключений, і для активації облікового запису буде надіслано повідомлення електронної пошти',
            'SEND_NOTIFICATION_EMAIL' => 'Надіслати повідомлення по електронній пошті',
            'SEND_NOTIFICATION_EMAIL_HELP' => 'Повідомляє адміністратору сайту про реєстрацію нового користувача. Електронна пошта буде відправлена в поле «Кому» в конфігурації плагіна електронної пошти',
            'SEND_WELCOME_EMAIL' => 'Надіслати вітальний лист',
            'SEND_WELCOME_EMAIL_HELP' => 'Надсилає електронного листа знову зареєстрованому користувачу',
            'DEFAULT_VALUES' => 'Значення за замовчуванням',
            'DEFAULT_VALUES_HELP' => 'Список назв полів і пов\'язаних значень, які будуть додані в профіль користувача (файл yaml) за замовчуванням, без налаштування користувачем. Розділіть декілька значень комою, без пробілів між значеннями',
            'ADDITIONAL_PARAM_KEY' => 'Параметр',
            'ADDITIONAL_PARAM_VALUE' => 'Значення',
            'REGISTRATION_FIELDS' => 'Реєстраційні поля',
            'REGISTRATION_FIELDS_HELP' => 'Додайте поля, які будуть додані в файл yaml користувача. Поля, не перераховані тут, не будуть додані, навіть якщо вони присутні в реєстраційній формі',
            'REGISTRATION_FIELD_KEY' => 'Ім\'я поля',
            'REDIRECT_AFTER_LOGIN' => 'Перенаправлення після входу в систему',
            'REDIRECT_AFTER_LOGIN_HELP' => 'Призначений для користувача маршрут для перенаправлення після входу в систему',
            'REDIRECT_AFTER_LOGOUT' => 'Перенаправлення після виходу з системи',
            'REDIRECT_AFTER_LOGOUT_HELP' => 'Призначений для користувача маршрут для перенаправлення після виходу з системи',
            'REDIRECT_AFTER_REGISTRATION' => 'Перенаправлення після реєстрації',
            'REDIRECT_AFTER_REGISTRATION_HELP' => 'Призначений для користувача маршрут для перенаправлення після реєстрації',
            'OPTIONS' => 'Опції',
            'EMAIL_VALIDATION_MESSAGE' => 'Адреса ел. пошти повинна бути дійсною',
            'PASSWORD_VALIDATION_MESSAGE' => 'Пароль повинен містити як мінімум одне число, одну прописну і малу літеру і бути не менше 8 символів',
            'TIMEOUT_HELP' => 'Встановлює тайм-аут сеансу в секундах, коли функція «Запам\'ятати мене» включена і встановлена користувачем. Мінімум 604800, що означає 1 тиждень',
            'GROUPS_HELP' => 'Список груп, в які увійде новий зареєстрований користувач',
            'SITE_ACCESS_HELP' => 'Список рівнів доступу до сайту, зареєстрованих користувачів. Приклад: `login` ->` true`',
            'WELCOME' => 'Ласкаво просимо',
            'REDIRECT_AFTER_ACTIVATION' => 'Перенаправлення після активації користувача',
            'REDIRECT_AFTER_ACTIVATION_HELP' => 'Використовується, якщо користувачеві потрібно активувати обліковий запис по електронній пошті. Після активації цей маршрут буде показаний',
            'REGISTRATION_DISABLED' => 'Реєстрація відключена',
            'USE_PARENT_ACL_LABEL' => 'Використовувати батьківські правила доступу',
            'USE_PARENT_ACL_HELP' => 'Перевірте правила доступу до батьків, якщо правила не визначені',
            'PROTECT_PROTECTED_PAGE_MEDIA_LABEL' => 'Захист захищених сторінок.',
            'PROTECT_PROTECTED_PAGE_MEDIA_HELP' => 'Якщо цей параметр включений, то доступ до захищеної сторінці для входу в систему також захищений паролем, і його не можна побачити, якщо він не зареєстрований',
            'SECURITY_TAB' => 'Безпека',
            'MAX_RESETS_COUNT' => 'Максимальна кількість скидання пароля',
            'MAX_RESETS_COUNT_HELP' => 'Налаштування захисту пароля від флуду (0 - не обмежена)',
            'MAX_RESETS_INTERVAL' => 'Максимальний інтервал скидання пароля',
            'MAX_RESETS_INTERVAL_HELP' => 'Інтервал часу для максимальної кількості скидання пароля',
            'FORGOT_CANNOT_RESET_IT_IS_BLOCKED' => 'Неможливо скинути пароль для %s, функція скидання пароля тимчасово відключена, спробуйте пізніше (максимум %s хвилин)',
            'MAX_LOGINS_COUNT' => 'Максимальна кількість входів',
            'MAX_LOGINS_COUNT_HELP' => 'Налаштування захисту від флуду (0 - не обмежена)',
            'MAX_LOGINS_INTERVAL' => 'Максимальний інтервал входу',
            'MAX_LOGINS_INTERVAL_HELP' => 'Часовий інтервал для значення лічильника входу',
            'TOO_MANY_LOGIN_ATTEMPTS' => 'Занадто багато невдалих спроб входу в налаштований час (%s хвилин)',
            'SECONDS' => 'секунд',
            'MINUTES' => 'хвилин',
            'RESETS' => 'скидань',
            'ATTEMPTS' => 'спроб',
            'ROUTES' => 'Маршрути',
            'ROUTE_FORGOT' => 'Забули пароль',
            'ROUTE_RESET' => 'Скидання пароля',
            'ROUTE_PROFILE' => 'Профілю користувача',
            'ROUTE_ACTIVATE' => 'Активації користувача',
            'LOGGED_OUT' => 'Ви успішно вийшли з системи...',
            'PAGE_RESTRICTED' => 'Доступ обмежений, увійдіть в систему...',
            'DYNAMIC_VISIBILITY' => 'Динамічна видимість сторінки',
            'DYNAMIC_VISIBILITY_HELP' => 'Дозволяє динамічно обробляти видимість сторінки на основі правил доступу, якщо для параметра login.visibility_requires_access встановлено значення true на сторінці',
            'USER_IS_REMOTE_ONLY' => 'Цей користувач аутентифікований за допомогою віддаленого сервісу, тому профіль не може бути збережений',
            '2FA_TITLE' => '2-факторна аутентифікація',
            '2FA_INSTRUCTIONS' => '##### 2-факторна аутентифікація
У вашому обліковому запису включена **2FA**. Будь ласка, використовуйте свою **2FA** програму для введення цього **6-значного коду** для завершення процесу входу в систему.',
            '2FA_REGEN_HINT' => 'Щоб відновити секрет, вам буде потрібно оновити програму для аутентифікації',
            '2FA_FAILED' => 'Неприпустимий код перевірки справжності 2-факторної аутентифікації, спробуйте ще раз....',
            '2FA_ENABLED' => '2FA Увімкнено',
            '2FA_ENABLED_HELP' => 'Вмикає двухфакторную аутентифікацію для всіх користувачів',
            '2FA_CODE_INPUT' => '000000',
            '2FA_SECRET' => '2FA Секрет',
            '2FA_SECRET_HELP' => 'Відскануйте цей QR-код у свою [Програму аутентифікації](https://learn.getgrav.org/admin-panel/2fa#apps). Також рекомендується зберегти секрет в безпечному місці, якщо вам доведеться перевстановити програму. Перевірте [Grav docs](https://learn.getgrav.org/admin-panel/2fa) для додаткової інформації ',
            '2FA_REGENERATE' => 'Згенерувати повторно',
            'BTN_CANCEL' => 'Скасування',
            'MANUALLY_ENABLE' => 'Вручну включити',
            'MANUALLY_ENABLE_HELP' => 'При використанні «активації по електронній пошті» і «повідомлення по електронній пошті» ви можете переконатися, що користувач може самостійно активуватися, але користувач вимагає ручного включення для входу в систему'
        ]
    ]
];
