<?php
return [
    'plugin' => [
        'name' => 'Lokácie',
        'description' => 'Funkcie založené na umiestnení, napríklad krajina a štát..',
    ],
    'permissions' => [
        'settings' => 'Správa lokácií',
    ],
    'location' => [
        'label' => 'Lokácie',
        'new' => 'Nová lokácia',
        'create_title' => 'Vytvoriť lokáciu',
        'update_title' => 'Upraviť lokáciu',
        'preview_title' => 'Náhľad lokácie',
    ],
    'locations' => [
        'menu_label' => 'Krajiny a Štáty',
        'menu_description' => 'Správa dostupných krajín a štátov.',
        'disabled_label' => 'Neaktvne',
        'enabled_label' => 'Aktívne',
        'enabled_help' => 'Neaktívne lokácie nie sú viditeľné na fron-ende.',
        'enable_or_disable_title' => "Aktivácia alebo deaktivácia lokality",
        'enable_or_disable' => 'Aktivovať alebo Deaktivovať',
        'selected_amount' => 'Počet vybraných lokácií: :amount',
        'enable_success' => 'Vybrané lokácie boli úspešne aktivované.',
        'disable_success' => 'Vybrané lokality boli úspešne deaktivované.',
        'disable_confirm' => 'Ste si istý?',
        'unpin_label' => 'Nepreferované',
        'pinned_label' => 'Preferované',
        'pinned_help' => 'Preferované lokácie sú zoradené na začiatku zoznamu.',
        'pin_or_unpin_title' => "Preferovať alebo Nepreferovať lokácie",
        'pin_or_unpin' => 'Preferovať alebo nepreferovať',
        'pin_success' => 'Vybrané lokality boli úspešne nastavené ako preferované.',
        'unpin_success' => 'Vybrané lokality boli úspešne nastavené ako nepreferované.',
        'unpin_confirm' => 'Ste si istý?',
        'list_title' => 'Správa lokácií',
        'delete_confirm' => 'Určite chcete zmazať túto lokáciu?',
        'return_to_list' => 'Návrat na zoznam lokácií',
        'default_country' => 'Predvolená Krajina',
        'default_country_comment' => 'V prípade, že si užívateľ nezvolí lokáciu, použije sa predvolená krajina.',
        'default_state' => 'Predvolený Štát',
        'default_state_comment' => 'V prípade, že si užívateľ nezvolí lokáciu, použije sa predvolený štát.',
    ],
    'settings' => [
        'menu_label' => 'Nastavenia lokácií',
        'menu_description' => 'Správa nastavení lokácií.',
        'google_maps_key' => 'API Kľúč Google Maps',
        'google_maps_key_comment' => 'Pokiaľ chcete používať Google Mapy, zadajte sem váš API kľúč.',
        'credentials_tab' => 'Údaje',
    ],
    'state' => [
        'label' => 'Štát',
        'name' => 'Meno',
        'select' => '-- zvoľte štát --',
        'name_comment' => 'Zadajte názov štátu.',
        'code' => 'Kód',
        'code_comment' => 'Zadajte unikátny kód štátu.',
    ],
    'country' => [
        'label' => 'Krajina',
        'name' => 'Názov',
        'select' => '-- zvoľte krajinu --',
        'code' => 'Kód',
        'code_comment' => 'adajte unikátny kód krajiny, napr. SK.',
        'enabled' => 'Aktívne',
        'pinned' => 'Preferované',
    ],
];