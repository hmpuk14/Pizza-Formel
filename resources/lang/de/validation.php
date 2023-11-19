<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Das :attribute muss akzeptiert werden.',
    'accepted_if' => 'Das :attribute muss akzeptiert werden, wenn :other :value ist.',
    'active_url' => 'Das :attribute ist keine gültige URL.',
    'after' => 'Das :attribute muss ein Datum nach dem :date sein.',
    'after_or_equal' => 'Das :attribute muss ein Datum nach oder gleich dem :date sein.',
    'alpha' => 'Das :attribute darf nur Buchstaben enthalten.',
    'alpha_dash' => 'Das :attribute darf nur Buchstaben, Zahlen, Bindestriche und Unterstriche enthalten.',
    'alpha_num' => 'Das :attribute darf nur Buchstaben und Zahlen enthalten.',
    'array' => 'Das :attribute muss ein Array sein.',
    'before' => 'Das :attribute muss ein Datum vor dem :date sein.',
    'before_or_equal' => 'Das :attribute muss ein Datum vor oder gleich dem :date sein.',
    'between' => [
        'numeric' => 'Das :attribute muss zwischen :min und :max liegen.',
        'file' => 'Das :attribute muss zwischen :min und :max Kilobyte liegen.',
        'string' => 'Das :attribute muss zwischen :min und :max Zeichen haben.',
        'array' => 'Das :attribute muss zwischen :min und :max Elemente haben.',
    ],
    'boolean' => 'Das Feld :attribute muss wahr oder falsch sein.',
    'confirmed' => 'Die :attribute-Bestätigung stimmt nicht überein.',
    'current_password' => 'Das Passwort ist inkorrekt.',
    'date' => 'Das :attribute ist kein gültiges Datum.',
    'date_equals' => 'Das :attribute muss ein Datum gleich :date sein.',
    'date_format' => 'Das :attribute entspricht nicht dem Format :format.',
    'declined' => 'Das :attribute muss abgelehnt werden.',
    'declined_if' => 'Das :attribute muss abgelehnt werden, wenn :other :value ist.',
    'different' => 'Das :attribute und :other müssen unterschiedlich sein.',
    'digits' => 'Das :attribute muss :digits Ziffern haben.',
    'digits_between' => 'Das :attribute muss zwischen :min und :max Ziffern haben.',
    'dimensions' => 'Das :attribute hat ungültige Bildabmessungen.',
    'distinct' => 'Das Feld :attribute hat einen doppelten Wert.',
    'email' => 'Das :attribute muss eine gültige E-Mail-Adresse sein.',
    'ends_with' => 'Das :attribute muss mit einem der folgenden Endungen enden: :values.',
    'enum' => 'Das ausgewählte :attribute ist ungültig.',
    'exists' => 'Das ausgewählte :attribute ist ungültig.',
    'file' => 'Das :attribute muss eine Datei sein.',
    'filled' => 'Das Feld :attribute muss einen Wert haben.',
    'gt' => [
        'numeric' => 'Das :attribute muss größer als :value sein.',
        'file' => 'Das :attribute muss größer als :value Kilobyte sein.',
        'string' => 'Das :attribute muss mehr als :value Zeichen haben.',
        'array' => 'Das :attribute muss mehr als :value Elemente haben.',
    ],
    'gte' => [
        'numeric' => 'Das :attribute muss größer oder gleich :value sein.',
        'file' => 'Das :attribute muss größer oder gleich :value Kilobyte sein.',
        'string' => 'Das :attribute muss mehr oder gleich :value Zeichen haben.',
        'array' => 'Das :attribute muss :value Elemente oder mehr haben.',
    ],
    'image' => 'Das :attribute muss ein Bild sein.',
    'in' => 'Das ausgewählte :attribute ist ungültig.',
    'in_array' => 'Das Feld :attribute existiert nicht in :other.',
    'integer' => 'Das :attribute muss eine ganze Zahl sein.',
    'ip' => 'Das :attribute muss eine gültige IP-Adresse sein.',
    'ipv4' => 'Das :attribute muss eine gültige IPv4-Adresse sein.',
    'ipv6' => 'Das :attribute muss eine gültige IPv6-Adresse sein.',
    'json' => 'Das :attribute muss ein gültiger JSON-String sein.',
    'lt' => [
        'numeric' => 'Das :attribute muss kleiner als :value sein.',
        'file' => 'Das :attribute muss kleiner als :value Kilobyte sein.',
        'string' => 'Das :attribute muss weniger als :value Zeichen haben.',
        'array' => 'Das :attribute muss weniger als :value Elemente haben.',
    ],
    'lte' => [
        'numeric' => 'Das :attribute muss kleiner oder gleich :value sein.',
        'file' => 'Das :attribute muss kleiner oder gleich :value Kilobyte sein.',
        'string' => 'Das :attribute muss weniger oder gleich :value Zeichen haben.',
        'array' => 'Das :attribute darf nicht mehr als :value Elemente haben.',
    ],
    'mac_address' => 'Das :attribute muss eine gültige MAC-Adresse sein.',
    'max' => [
        'numeric' => 'Das :attribute darf nicht größer als :max sein.',
        'file' => 'Das :attribute darf nicht größer als :max Kilobyte sein.',
        'string' => 'Das :attribute darf nicht größer als :max Zeichen sein.',
        'array' => 'Das :attribute darf nicht mehr als :max Elemente haben.',
    ],
    'mimes' => 'Die Datei muss den Dateityp(en) :values haben.',
    'mimetypes' => 'Die Datei muss den Dateityp(en) :values haben.',
    'min' => [
        'numeric' => 'Das :attribute muss min. :min sein.',
        'file' => 'Das :attribute muss min. :min Kilobyte groß sein.',
        'string' => 'Das Passwort muss min. :min Zeichen haben.',
        'array' => 'Das :attribute muss min. :min Elemente enthalten.',
    ],
    'multiple_of' => 'Das :attribute muss ein Vielfaches von :value sein.',
    'not_in' => 'Das ausgewählte :attribute ist ungültig.',
    'not_regex' => 'Das Format des :attribute ist ungültig.',
    'numeric' => 'Das :attribute muss eine Zahl sein.',
    'password' => 'Das Passwort ist inkorrekt.',
    'present' => 'Das :attribute-Feld muss vorhanden sein.',
    'prohibited' => 'Das :attribute-Feld ist verboten.',
    'prohibited_if' => 'Das :attribute-Feld ist verboten, wenn :other :value ist.',
    'prohibited_unless' => 'Das :attribute-Feld ist verboten, es sei denn, :other ist in :values enthalten.',
    'prohibits' => 'Das :attribute-Feld verbietet, dass :other vorhanden ist.',
    'regex' => 'Das Format des :attribute ist ungültig.',
    'required' => 'Das :attribute-Feld ist erforderlich.',
    'required_array_keys' => 'Das :attribute-Feld muss Einträge für: :values enthalten.',
    'required_if' => 'Das :attribute-Feld ist erforderlich, wenn :other :value ist.',
    'required_unless' => 'Das :attribute-Feld ist erforderlich, es sei denn, :other ist in :values enthalten.',
    'required_with' => 'Das :attribute-Feld ist erforderlich, wenn :values vorhanden ist.',
    'required_with_all' => 'Das :attribute-Feld ist erforderlich, wenn alle Werte in :values vorhanden sind.',
    'required_without' => 'Das :attribute-Feld ist erforderlich, wenn :values nicht vorhanden ist.',
    'required_without_all' => 'Das :attribute-Feld ist erforderlich, wenn keine der Werte in :values vorhanden ist.',
    'same' => 'Das :attribute und :other müssen übereinstimmen.',
    'size' => [
        'numeric' => 'Das :attribute muss :size sein.',
        'file' => 'Das :attribute muss :size Kilobyte groß sein.',
        'string' => 'Das :attribute muss :size Zeichen haben.',
        'array' => 'Das :attribute muss :size Elemente enthalten.',
    ],
    'starts_with' => 'Das :attribute muss mit einer der folgenden Optionen beginnen: :values.',
    'string' => 'Das :attribute muss eine Zeichenkette sein.',
    'timezone' => 'Das :attribute muss eine gültige Zeitzone sein.',
    'unique' => 'Das :attribute wurde bereits verwendet.',
    'uploaded' => 'Das :attribute konnte nicht hochgeladen werden.',
    'url' => 'Das :attribute muss eine gültige URL sein.',
    'uuid' => 'Das :attribute muss eine gültige UUID sein.',


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
