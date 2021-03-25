<?php
/**
 * Access Policy English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['template_group'] = 'Gruppo Template';
$_lang['active_of'] = '[[+active]] di [[+total]]';
$_lang['active_permissions'] = 'Permessi Attivi';
$_lang['no_policy_option'] = ' (Nessuna Policy) ';
$_lang['permission'] = 'Permesso';
$_lang['permission_add'] = 'Aggiungi Permesso';
$_lang['permission_add_template'] = 'Aggiungi Permesso al Template';
$_lang['permission_err_ae'] = 'Permesso già esistente per questa politica.';
$_lang['permission_err_nf'] = 'Permesso non trovato.';
$_lang['permission_err_ns'] = 'Permesso non specificato.';
$_lang['permission_err_remove'] = 'An error occurred while trying to delete this permission.';
$_lang['permission_err_save'] = 'Si è verificato un errore durante il tentativo di salvare questo permesso.';
$_lang['permission_new'] = 'Create Permission';
$_lang['permission_remove'] = 'Rimuovi Permesso';
$_lang['permission_remove_confirm'] = 'Are you sure you want to delete this permission?';
$_lang['permission_update'] = 'Edit Permission';
$_lang['permissions'] = 'Permessi';
$_lang['permissions_desc'] = 'Qui puoi definire specifichi permessi che questa politica conterrà. Tutti i gruppi di utenti con questa politica erediteranno questi permessi.';
$_lang['policies'] = 'Politiche Accesso';
$_lang['policy'] = 'Politica Accesso';
$_lang['policy_create'] = 'Crea Politica Accesso';
$_lang['policy_data'] = 'Dati Politica ';
$_lang['policy_desc'] = 'Le Politiche di Accesso sono generiche "istruzioni" che limitano o abilitano determinate azioni di Gestione.';
$_lang['policy_desc_name'] = 'Il nome della Policy di Accesso';
$_lang['policy_desc_description'] = 'Optional. A short description of the Access Policy. Also you might use lexicon keys here.';
$_lang['policy_desc_template'] = 'Il Template della Policy usato per questa Policy. Le Policies prendono le loro Liste di Permessi dai loro Template.';
$_lang['policy_desc_lexicon'] = 'Opzionale. Il Topic Lexicon che questa Policy usa per tradurre i permessi di cui è proprietaria.';
$_lang['policy_duplicate'] = 'Duplicare Politica';
$_lang['policy_duplicate_confirm'] = 'Sei sicuro di voler duplicare questa Politica e tutti i suoi dati?';
$_lang['policy_err_ae'] = 'Esiste già una Politica con il nome `[[+name]]`. Scegli un nome diverso.';
$_lang['policy_err_nf'] = 'Politica non trovata.';
$_lang['policy_err_ns'] = 'Politica non specificata.';
$_lang['policy_err_remove'] = 'An error occurred while trying to delete the Policy.';
$_lang['policy_err_save'] = 'Si è verificato un errore durante il tentativo di salvataggio della Politica.';
$_lang['policy_export'] = 'Esporta Policy';
$_lang['policy_import'] = 'Importa Policy';
$_lang['policy_import_msg'] = 'Selziona un file XML da cui importare una Policy. Deve essere nel corretto formato XML per le Policy.';
$_lang['policy_management'] = 'Politiche Accesso';
$_lang['policy_management_msg'] = 'Le Politiche di Accesso controllano i permessi per eseguire determinate azioni. Click destro sul nome per ulteriori attività';
$_lang['policy_name'] = 'Nome Politica';
$_lang['policy_property_create'] = 'Crea Proprietà Politica Accesso';
$_lang['policy_property_new'] = 'Create Policy Property';
$_lang['policy_property_remove'] = 'Elimina Proprietà Politica Accesso';
$_lang['policy_property_specify_name'] = 'Specifica un nome per la Proprietà della Politica:';
$_lang['policy_remove'] = 'Rimuovi Politica';
$_lang['policy_remove_confirm'] = 'Are you sure you want to delete this Access Policy?';
$_lang['policy_remove_multiple'] = 'Rimuovi Politiche';
$_lang['policy_remove_multiple_confirm'] = 'Are you sure you want to delete these Access Policies? This is irreversible.';
$_lang['policy_update'] = 'Edit Policy';
$_lang['policy_template'] = 'Template Politica';
$_lang['policy_template_desc'] = 'Un Template di Politica definisce quali Permessi saranno mostrati nella griglia dei Permessi durante la modifica di una specifica Politica. Puoi aggiungere o rimuovere Permessi specifici da questo template di seguito. Nota che rimuovendo un Permesso da un Template questo sarà rimosso da qualsiasi altra Politica che usa lo stesso Template.';
$_lang['policy_template_create'] = 'Crea Template di Politica';
$_lang['policy_template_desc_name'] = 'Il nome del Template della Policy di Accesso';
$_lang['policy_template_desc_description'] = 'Optional. A short description of the Access Policy Template. Also you might use lexicon keys here.';
$_lang['policy_template_lexicon'] = 'Lexicon Topic';
$_lang['policy_template_desc_lexicon'] = 'Opzionale. Il Topic Lexicon che questo Template di Policy userà per tradurre i permessi di cui è proprietario.';
$_lang['policy_template_desc_template_group'] = 'Il Gruppo di Template di Policy da usare. Questo è usato quando si selezionano delle Policies dal menu a tendina; di solito sono filtrate per Gruppi di template. Seleziona un appropriato gruppo per il tuo Template di Policy.';
$_lang['policy_template_duplicate'] = 'Duplica Template di Politica';
$_lang['policy_template_duplicate_confirm'] = 'Sei sicuro di voler duplicare questo Template di Politica?';
$_lang['policy_template_err_ae'] = 'Un Template di Politica con il nome `[[+name]]` esiste già. Scegli un nome diverso.';
$_lang['policy_template_err_nf'] = 'Template di Politica non trovato.';
$_lang['policy_template_err_ns'] = 'Template di Politica non specificato.';
$_lang['policy_template_err_remove'] = 'An error occurred while trying to delete the Policy Template.';
$_lang['policy_template_err_save'] = 'Si è verificato un errore durante il tentativo di salvare il Template di Politica.';
$_lang['policy_template_export'] = 'Esporta il Template della Policy';
$_lang['policy_template_import'] = 'Importa il Template della Policy';
$_lang['policy_template_import_msg'] = 'Seleziona un file XML da cui importare il Template della Policy. Deve essere nel corretto formato XML per il Template delle Policy.';
$_lang['policy_template_remove'] = 'Rimuovi  Template di Politica';
$_lang['policy_template_remove_confirm'] = 'Are you sure you want to delete this Policy Template? It will delete all Policies attached to this Template as well - this could break your MODX installation if any active Policies are attached to this Template.';
$_lang['policy_template_remove_multiple'] = 'Rimuovi i Template di Politica Selezionati';
$_lang['policy_template_remove_multiple_confirm'] = 'Are you sure you want to delete these Policy Templates? It will delete all Policies attached to these Templates as well - this could break your MODX installation if any active Policies are attached to these Templates.';
$_lang['policy_template_update'] = 'Edit Policy Template';
$_lang['policy_templates'] = 'Templates della Politica';
$_lang['policy_templates.intro_msg'] = 'Questa è una lista di Templates di Politica, definiscono liste di Permessi che sono selezionati o meno per determinate Politiche.';
$_lang['policy_template_administrator_desc'] = 'Context administration policy template with all permissions.';
$_lang['policy_template_resource_desc'] = 'Resource Policy Template with all attributes.';
$_lang['policy_template_object_desc'] = 'Object Policy Template with all attributes.';
$_lang['policy_template_element_desc'] = 'Element Policy Template with all attributes.';
$_lang['policy_template_mediasource_desc'] = 'Media Source Policy Template with all attributes.';
$_lang['policy_template_context_desc'] = 'Context Policy Template with all attributes.';
$_lang['policy_template_namespace_desc'] = 'Namespace Policy Template with all attributes.';
$_lang['policy_template_group_administrator_desc'] = 'All admin policy templates.';
$_lang['policy_template_group_object_desc'] = 'All Resource-based policy templates.';
$_lang['policy_template_group_resource_desc'] = 'All Object-based policy templates.';
$_lang['policy_template_group_element_desc'] = 'All Element-based policy templates.';
$_lang['policy_template_group_mediasource_desc'] = 'All Media Source-based policy templates.';
$_lang['policy_template_group_namespace_desc'] = 'All Namespace based policy templates.';
$_lang['policy_template_group_context_desc'] = 'All Context based policy templates.';
$_lang['policy_resource_desc'] = 'MODX Resource Policy with all attributes.';
$_lang['policy_administrator_desc'] = 'Context administration policy with all permissions.';
$_lang['policy_load_only_desc'] = 'A minimal policy with permission to load an object.';
$_lang['policy_load_list_and_view_desc'] = 'Provides load, list and view permissions only.';
$_lang['policy_object_desc'] = 'An Object policy with all permissions.';
$_lang['policy_element_desc'] = 'MODX Element policy with all attributes.';
$_lang['policy_content_editor_desc'] = 'Context administration policy with limited, content-editing related Permissions, but no publishing.';
$_lang['policy_media_source_admin_desc'] = 'Media Source administration policy.';
$_lang['policy_media_source_user_desc'] = 'Media Source user policy, with basic viewing and using - but no editing - of Media Sources.';
$_lang['policy_developer_desc'] = 'Context administration policy with most Permissions except Administrator and Security functions.';
$_lang['policy_context_desc'] = 'A standard Context policy that you can apply when creating Context ACLs for basic read/write and view_unpublished access within a Context.';
$_lang['policy_hidden_namespace_desc'] = 'Hidden Namespace policy, will not show Namespace in lists.';
