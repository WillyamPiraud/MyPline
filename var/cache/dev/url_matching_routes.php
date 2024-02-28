<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/heureu' => [[['_route' => 'app_heureu', '_controller' => 'App\\Controller\\HomeController::heureu'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/je-decouvre' => [[['_route' => 'app_je_decouvre', '_controller' => 'App\\Controller\\PageController::index'], null, null, null, false, false, null]],
        '/mes-objectifs' => [[['_route' => 'app_mes_objectifs', '_controller' => 'App\\Controller\\PageController::objectif'], null, null, null, false, false, null]],
        '/rythme-vital' => [[['_route' => 'app_rythme_vital', '_controller' => 'App\\Controller\\PageController::rythme_vital'], null, null, null, false, false, null]],
        '/lst_obligations_familiales' => [[['_route' => 'app_obligations_familiales', '_controller' => 'App\\Controller\\PageController::lst_obligations_familiales'], null, null, null, false, false, null]],
        '/lst_calendrier_tel' => [[['_route' => 'app_lst_calendrier_tel', '_controller' => 'App\\Controller\\PageController::lst_calendrier_tel'], null, null, null, false, false, null]],
        '/lst_calendrier_tel/add_tel' => [[['_route' => 'app_lst_calendrier_tel_add', '_controller' => 'App\\Controller\\PageController::lst_calendrier_tel_add'], null, null, null, false, false, null]],
        '/lst_calendrier_choses_a_faire' => [[['_route' => 'app_lst_calendrier_choses_a_faire', '_controller' => 'App\\Controller\\PageController::lst_calendrier_choses_a_faire'], null, null, null, false, false, null]],
        '/lst_calendrier_choses_a_faire/add_choses_a_faire' => [[['_route' => 'app_lst_calendrier_choses_a_faire_add', '_controller' => 'App\\Controller\\PageController::lst_calendrier_chosea_faire_add'], null, null, null, false, false, null]],
        '/lst_calendrier_evenement' => [[['_route' => 'app_lst_calendrier_evenement', '_controller' => 'App\\Controller\\PageController::lst_calendrier_evenement'], null, null, null, false, false, null]],
        '/lst_calendrier_evenement/add_evenement' => [[['_route' => 'app_lst_calendrier_evenement_add', '_controller' => 'App\\Controller\\PageController::lst_calendrie_evenement_add'], null, null, null, false, false, null]],
        '/lst_rdv' => [[['_route' => 'app_lst_rdv', '_controller' => 'App\\Controller\\PageController::lst_rdv'], null, null, null, false, false, null]],
        '/lst_calendrier_rdv/add_rdv' => [[['_route' => 'app_lst_calendrier_rdv_add', '_controller' => 'App\\Controller\\PageController::lst_calendrier_rdv_add'], null, null, null, false, false, null]],
        '/post_it_notes' => [[['_route' => 'app_post_it_notes', '_controller' => 'App\\Controller\\PageController::post_it_et_notes'], null, null, null, false, false, null]],
        '/post_it_notes/mes_notes' => [[['_route' => 'app_post_it_notes_mes_notes', '_controller' => 'App\\Controller\\PageController::mes_notes'], null, null, null, false, false, null]],
        '/post_it_notes/add_notes' => [[['_route' => 'app_lst_post_it_notes_add', '_controller' => 'App\\Controller\\PageController::lst_add_notes'], null, null, null, false, false, null]],
        '/liste_document' => [[['_route' => 'app_liste_document', '_controller' => 'App\\Controller\\PageController::mes_listes_documents'], null, null, null, false, false, null]],
        '/liste_document/liste' => [[['_route' => 'app_liste_document_liste', '_controller' => 'App\\Controller\\PageController::mes_listes'], null, null, null, false, false, null]],
        '/liste_document/add_liste' => [[['_route' => 'app_add_liste', '_controller' => 'App\\Controller\\PageController::add_liste'], null, null, null, false, false, null]],
        '/journalier' => [[['_route' => 'app_journalier', '_controller' => 'App\\Controller\\PageController::journalier'], null, null, null, false, false, null]],
        '/mes_routines/activite_professionnel' => [[['_route' => 'app_activite_professionnel', '_controller' => 'App\\Controller\\PageController::liste_activite_professionnelle'], null, null, null, false, false, null]],
        '/lst_loisirs_vacances' => [[['_route' => 'app_loisirs_vacances', '_controller' => 'App\\Controller\\PageController::lst_loisirs_vacances'], null, null, null, false, false, null]],
        '/lst_liens_sociaux' => [[['_route' => 'app_liens_sociaux', '_controller' => 'App\\Controller\\PageController::lst_liens_sociaux'], null, null, null, false, false, null]],
        '/objectif-finance' => [[['_route' => 'app_objectif_finance', '_controller' => 'App\\Controller\\PageController::objectif_finance'], null, null, null, false, false, null]],
        '/lst_donation' => [[['_route' => 'app_donation', '_controller' => 'App\\Controller\\PageController::lst_donation'], null, null, null, false, false, null]],
        '/lst_finance_revenus' => [[['_route' => 'app_finance_revenus', '_controller' => 'App\\Controller\\PageController::lst_finance_revenus'], null, null, null, false, false, null]],
        '/ajouter_mes_revenus' => [[['_route' => 'app_ajouter_mes_revenus', '_controller' => 'App\\Controller\\PageController::add_mes_revenus'], null, null, null, false, false, null]],
        '/ajouter_fond_urgence' => [[['_route' => 'app_ajouter_fond_urgence', '_controller' => 'App\\Controller\\PageController::add_fond_urgence'], null, null, null, false, false, null]],
        '/liste_plan_action/visualiser' => [[['_route' => 'app_liste_plan_action', '_controller' => 'App\\Controller\\PageController::liste_plan_action_visualiser'], null, null, null, false, false, null]],
        '/mes_objectifs/sante/lst_objectifs_sante' => [[['_route' => 'app_objectifs_sante', '_controller' => 'App\\Controller\\PageController::lst_objectifs_sante'], null, null, null, false, false, null]],
        '/mes_objectifs/activite/lst_objectifs_activity' => [[['_route' => 'app_objectifs_activity', '_controller' => 'App\\Controller\\PageController::lst_objectifs_activity'], null, null, null, false, false, null]],
        '/mes_objectifs/activite/activite-pro' => [[['_route' => 'app_objectifs_activite_pro', '_controller' => 'App\\Controller\\PageController::lst_objectifs_activite_pro'], null, null, null, false, false, null]],
        '/mes_objectifs/activite/activite-formation' => [[['_route' => 'app_objectifs_activite_formation', '_controller' => 'App\\Controller\\PageController::lst_objectifs_activite_formation'], null, null, null, false, false, null]],
        '/mes_objectifs/activite/activite-loisir' => [[['_route' => 'app_objectifs_activite_loisir', '_controller' => 'App\\Controller\\PageController::lst_objectifs_activite_loisir'], null, null, null, false, false, null]],
        '/mes_objectifs/activite/sociabilité' => [[['_route' => 'app_objectifs_sociabilite', '_controller' => 'App\\Controller\\PageController::lst_objectifs_sociabilite'], null, null, null, false, false, null]],
        '/mentions-legales' => [[['_route' => 'app_mentions_legales', '_controller' => 'App\\Controller\\PageController::mentions_legales'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/rythme_vital/besoins_vitaux' => [[['_route' => 'app_rythme_vital_besoins_vitaux', '_controller' => 'App\\Controller\\RythmeVitalController::index'], null, null, null, false, false, null]],
        '/rythme_vital/ajouter_besoin_vital' => [[['_route' => 'app_rythme_vital_ajouter_besoin_vital', '_controller' => 'App\\Controller\\RythmeVitalController::add_besoin_vital'], null, null, null, false, false, null]],
        '/rythme_vital/obligations_familiales' => [[['_route' => 'app_rythme_vital_obligations_familiales', '_controller' => 'App\\Controller\\RythmeVitalController::obligation_familiales'], null, null, null, false, false, null]],
        '/rythme_vital/ajouter_obligation_familiale' => [[['_route' => 'app_rythme_vital_ajouter_obligation_familiale', '_controller' => 'App\\Controller\\RythmeVitalController::add_obligation_familiale'], null, null, null, false, false, null]],
        '/rythme_vital/activite_professionnelle' => [[['_route' => 'app_rythme_vital_activite_professionnelle', '_controller' => 'App\\Controller\\RythmeVitalController::activite_professionnelle'], null, null, null, false, false, null]],
        '/rythme_vital/ajouter_activite_professionnelle' => [[['_route' => 'app_rythme_vital_ajouter_activite_professionnelle', '_controller' => 'App\\Controller\\RythmeVitalController::add_activite_professionnelle'], null, null, null, false, false, null]],
        '/rythme_vital/mes_loisirs' => [[['_route' => 'app_rythme_vital_mes_loisirs', '_controller' => 'App\\Controller\\RythmeVitalController::mes_loisirs'], null, null, null, false, false, null]],
        '/rythme_vital/ajouter_mes_loisirs' => [[['_route' => 'app_rythme_vital_ajouter_mes_loisirs', '_controller' => 'App\\Controller\\RythmeVitalController::add_mes_loisirs'], null, null, null, false, false, null]],
        '/rythme_vital/mes_liens_sociaux' => [[['_route' => 'app_rythme_vital_mes_liens_sociaux', '_controller' => 'App\\Controller\\RythmeVitalController::mes_liens_sociaux'], null, null, null, false, false, null]],
        '/rythme_vital/ajouter_mes_liens_sociaux' => [[['_route' => 'app_rythme_vital_ajouter_mes_liens_sociaux', '_controller' => 'App\\Controller\\RythmeVitalController::add_mes_liens_sociaux'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/ob(?'
                    .'|jectif(?'
                        .'|/(?'
                            .'|modifier/([^/]++)/([^/]++)(?'
                                .'|(*:217)'
                                .'|/([^/]++)(?'
                                    .'|(*:237)'
                                .')'
                            .')'
                            .'|supprimer/([^/]++)/([^/]++)(*:274)'
                            .'|ajout/([^/]++)/([^/]++)(?'
                                .'|/([^/]++)(?'
                                    .'|(*:320)'
                                .')'
                                .'|(*:329)'
                            .')'
                            .'|([^/]++)(*:346)'
                        .')'
                        .'|_activite/supprimer/([^/]++)/([^/]++)(*:392)'
                    .')'
                    .'|ligation_professionnel/mon_metier(?:/([^/]++))?(*:448)'
                .')'
                .'|/m(?'
                    .'|e(?'
                        .'|s(?'
                            .'|\\-objectifs/visualiser/(?'
                                .'|([^/]++)(*:504)'
                                .'|activite/([^/]++)(*:529)'
                                .'|sante/([^/]++)(*:551)'
                            .')'
                            .'|_(?'
                                .'|routines/activite_professionnel/temps_travail(?:/([^/]++)(?:/([^/]++))?)?(*:637)'
                                .'|metiers/(?'
                                    .'|add_metier_formation(?:/([^/]++))?(*:690)'
                                    .'|modify_metier_formation/([^/]++)(?:/([^/]++))?(*:744)'
                                .')'
                            .')'
                        .')'
                        .'|tier/delete/([^/]++)/([^/]++)(*:784)'
                    .')'
                    .'|odifier_(?'
                        .'|obligation_familiale/([^/]++)/([^/]++)(*:842)'
                        .'|l(?'
                            .'|oisir/([^/]++)/([^/]++)(*:877)'
                            .'|ien/([^/]++)/([^/]++)(*:906)'
                        .')'
                        .'|pda/([^/]++)/([^/]++)(*:936)'
                        .'|f(?'
                            .'|inance_loisir/([^/]++)/([^/]++)(*:979)'
                            .'|ond_urgence/([^/]++)(*:1007)'
                        .')'
                        .'|mes_revenus/([^/]++)(*:1037)'
                    .')'
                .')'
                .'|/l(?'
                    .'|st_(?'
                        .'|obligation_familiale/([^/]++)(*:1088)'
                        .'|calendrier_(?'
                            .'|tel/(?'
                                .'|modify_tel/([^/]++)(*:1137)'
                                .'|delete/([^/]++)(*:1161)'
                            .')'
                            .'|choses_a_faire/(?'
                                .'|modify_choses_a_faire/([^/]++)(*:1219)'
                                .'|delete/([^/]++)(*:1243)'
                            .')'
                            .'|evenement/(?'
                                .'|modify_evenement/([^/]++)(*:1291)'
                                .'|delete/([^/]++)(*:1315)'
                            .')'
                            .'|rdv/(?'
                                .'|modify_rdv/([^/]++)(*:1351)'
                                .'|delete/([^/]++)(*:1375)'
                            .')'
                        .')'
                        .'|finance_loisir/([^/]++)(*:1409)'
                    .')'
                    .'|i(?'
                        .'|ste(?'
                            .'|_document/(?'
                                .'|detail_todo/([^/]++)(*:1462)'
                                .'|liste/(?'
                                    .'|set_statut/([^/]++)/([^/]++)(*:1508)'
                                    .'|delete_task/([^/]++)/([^/]++)(*:1546)'
                                    .'|reset_tasks/([^/]++)(*:1575)'
                                .')'
                            .')'
                            .'|/supprimer/([^/]++)(*:1605)'
                        .')'
                        .'|en_sociaux/([^/]++)(*:1634)'
                    .')'
                    .'|oisir_vacance/([^/]++)(*:1666)'
                .')'
                .'|/ajouter_(?'
                    .'|obligation_familiale/([^/]++)(*:1717)'
                    .'|l(?'
                        .'|oisir/([^/]++)(*:1744)'
                        .'|ien/([^/]++)(*:1765)'
                    .')'
                    .'|pda/([^/]++)(*:1787)'
                    .'|finance_loisir/([^/]++)(*:1819)'
                .')'
                .'|/r(?'
                    .'|ythme(?'
                        .'|/([^/]++)(*:1851)'
                        .'|_vital/(?'
                            .'|m(?'
                                .'|odifier_(?'
                                    .'|besoin_vital/([^/]++)(*:1906)'
                                    .'|obligation_familiale/([^/]++)(*:1944)'
                                    .'|activite_professionnelle/([^/]++)(*:1986)'
                                    .'|mes_l(?'
                                        .'|oisirs/([^/]++)(*:2018)'
                                        .'|iens_sociaux/([^/]++)(*:2048)'
                                    .')'
                                .')'
                                .'|es_l(?'
                                    .'|oisirs/delete/([^/]++)(*:2088)'
                                    .'|iens_sociaux/delete/([^/]++)(*:2125)'
                                .')'
                            .')'
                            .'|besoin_vital/delete/([^/]++)(*:2164)'
                            .'|obligation_familiale/delete/([^/]++)(*:2209)'
                            .'|activite_professionnelle/delete/([^/]++)(*:2258)'
                        .')'
                    .')'
                    .'|endez_vous_valide/([^/]++)(*:2295)'
                .')'
                .'|/v(?'
                    .'|alider_(?'
                        .'|tel/([^/]++)(*:2332)'
                        .'|choses_a_faire/([^/]++)(*:2364)'
                        .'|evenement/([^/]++)(*:2391)'
                    .')'
                    .'|isualiser\\-plan\\-action/([^/]++)(*:2433)'
                .')'
                .'|/post_it_notes/modify_notes/([^/]++)(*:2479)'
                .'|/note/supprimer/([^/]++)(*:2512)'
                .'|/créer_tache/([^/]++)(*:2543)'
                .'|/journalier/(?'
                    .'|set_statut/([^/]++)(?'
                        .'|(*:2589)'
                        .'|/([^/]++)(*:2607)'
                    .')'
                    .'|modifier_tache/([^/]++)(?'
                        .'|(*:2643)'
                        .'|(?:/([^/]++))?(*:2666)'
                    .')'
                    .'|delete/([^/]++)(?'
                        .'|(*:2694)'
                        .'|/([^/]++)(*:2712)'
                    .')'
                    .'|report/([^/]++)(?'
                        .'|(*:2740)'
                        .'|/([^/]++)(*:2758)'
                    .')'
                    .'|([^/]++)(*:2776)'
                    .'|add_rdv/([^/]++)(*:2801)'
                    .'|modify_rdv/([^/]++)(*:2829)'
                .')'
                .'|/t(?'
                    .'|emps_travail/(?'
                        .'|add_routine_travail(?:/([^/]++)(?:/([^/]++))?)?(*:2907)'
                        .'|modify_routine_travail/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?(*:2975)'
                        .'|delete/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?(*:3027)'
                    .')'
                    .'|ache_pda/delete/([^/]++)/([^/]++)(*:3070)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        217 => [[['_route' => 'app_modifier_form_objectif', '_controller' => 'App\\Controller\\PageController::add_objectif'], ['secteur', 'id'], null, null, false, true, null]],
        237 => [
            [['_route' => 'app_modifier_form_objectif_mod_activite_loisir', '_controller' => 'App\\Controller\\PageController::add_objectif_activite'], ['secteur', 'idSecteur', 'id'], null, null, false, true, null],
            [['_route' => 'app_modifier_form_objectif_mod_activite', '_controller' => 'App\\Controller\\PageController::add_objectif_activite'], ['secteur', 'idSecteur', 'id'], null, null, false, true, null],
            [['_route' => 'app_modifier_form_objectif_activite', '_controller' => 'App\\Controller\\PageController::add_objectif_activite'], ['secteur', 'idSecteur', 'id'], null, null, false, true, null],
        ],
        274 => [[['_route' => 'app_objectif_delete', '_controller' => 'App\\Controller\\PageController::objectif_delete'], ['id', 'secteur'], null, null, false, true, null]],
        320 => [
            [['_route' => 'app_form_objectif_add_activite_loisir', '_controller' => 'App\\Controller\\PageController::add_objectif_activite'], ['secteur', 'idSecteur', 'typeActivity'], null, null, false, true, null],
            [['_route' => 'app_form_objectif_add_activite', '_controller' => 'App\\Controller\\PageController::add_objectif_activite'], ['secteur', 'idSecteur', 'typeActivity'], null, null, false, true, null],
        ],
        329 => [[['_route' => 'app_form_objectif_activite', '_controller' => 'App\\Controller\\PageController::add_objectif_activite'], ['secteur', 'idSecteur'], null, null, false, true, null]],
        346 => [[['_route' => 'app_form_objectif', '_controller' => 'App\\Controller\\PageController::add_objectif'], ['secteur'], null, null, false, true, null]],
        392 => [[['_route' => 'app_objectif_delete_activite', '_controller' => 'App\\Controller\\PageController::objectif_delete_activite'], ['id', 'idSecteur'], null, null, false, true, null]],
        448 => [[['_route' => 'app_mon_metier', 'type' => null, '_controller' => 'App\\Controller\\PageController::mon_metier'], ['type'], null, null, false, true, null]],
        504 => [[['_route' => 'app_mes_objectifs_visualiser', '_controller' => 'App\\Controller\\PageController::objectif_visualiser'], ['secteur'], null, null, false, true, null]],
        529 => [[['_route' => 'app_objectifs_visualiser_activity', '_controller' => 'App\\Controller\\PageController::objectif_visualiser_activite'], ['idSecteur'], null, null, false, true, null]],
        551 => [[['_route' => 'app_mes_objectifs_visualiser_activite', '_controller' => 'App\\Controller\\PageController::objectif_visualiser_activite'], ['idSecteur'], null, null, false, true, null]],
        637 => [[['_route' => 'app_activite_professionnel_temps_travail', 'type' => null, 'id' => null, '_controller' => 'App\\Controller\\PageController::liste_activite_professionnelle_temps_travail'], ['type', 'id'], null, null, false, true, null]],
        690 => [[['_route' => 'app_metier_formation_add', 'type' => null, '_controller' => 'App\\Controller\\PageController::lst_mes_metiers'], ['type'], null, null, false, true, null]],
        744 => [[['_route' => 'app_metier_formation_modify', 'type' => null, '_controller' => 'App\\Controller\\PageController::lst_mes_metiers'], ['id', 'type'], null, null, false, true, null]],
        784 => [[['_route' => 'app_metier_delete', '_controller' => 'App\\Controller\\PageController::app_liste_delete_metier'], ['id', 'type'], null, null, false, true, null]],
        842 => [[['_route' => 'app_modifier_obligation_familiale', '_controller' => 'App\\Controller\\PageController::add_obligation_familiale'], ['type', 'id'], null, null, false, true, null]],
        877 => [[['_route' => 'app_modifier_loisir', '_controller' => 'App\\Controller\\PageController::add_loisir'], ['type', 'id'], null, null, false, true, null]],
        906 => [[['_route' => 'app_modifier_lien', '_controller' => 'App\\Controller\\PageController::add_lien'], ['type', 'id'], null, null, false, true, null]],
        936 => [[['_route' => 'app_modifier_pda', '_controller' => 'App\\Controller\\PageController::add_pda'], ['id', 'id_pda'], null, null, false, true, null]],
        979 => [[['_route' => 'app_modifier_finance_loisir', '_controller' => 'App\\Controller\\PageController::add_finance_loisir'], ['type', 'id'], null, null, false, true, null]],
        1007 => [[['_route' => 'app_modifier_fond_urgence', '_controller' => 'App\\Controller\\PageController::add_fond_urgence'], ['id'], null, null, false, true, null]],
        1037 => [[['_route' => 'app_modifier_mes_revenus', '_controller' => 'App\\Controller\\PageController::add_mes_revenus'], ['id'], null, null, false, true, null]],
        1088 => [[['_route' => 'app_lst_obligation_familiale', '_controller' => 'App\\Controller\\PageController::lst_obligation_familiale'], ['type'], null, null, false, true, null]],
        1137 => [[['_route' => 'app_lst_calendrier_tel_modify', '_controller' => 'App\\Controller\\PageController::lst_calendrier_tel_add'], ['id'], null, null, false, true, null]],
        1161 => [[['_route' => 'app_lst_calendrier_tel_delete', '_controller' => 'App\\Controller\\PageController::lst_calendrier_tel_delete'], ['id'], null, null, false, true, null]],
        1219 => [[['_route' => 'app_lst_calendrier_choses_a_faire_modify', '_controller' => 'App\\Controller\\PageController::lst_calendrier_chosea_faire_add'], ['id'], null, null, false, true, null]],
        1243 => [[['_route' => 'app_lst_calendrier_choses_a_faire_delete', '_controller' => 'App\\Controller\\PageController::lst_calendrier_choses_a_faire_delete'], ['id'], null, null, false, true, null]],
        1291 => [[['_route' => 'app_lst_calendrier_evenement_modify', '_controller' => 'App\\Controller\\PageController::lst_calendrie_evenement_add'], ['id'], null, null, false, true, null]],
        1315 => [[['_route' => 'app_lst_calendrier_evenement_delete', '_controller' => 'App\\Controller\\PageController::lst_calendrier_evenement_delete'], ['id'], null, null, false, true, null]],
        1351 => [[['_route' => 'app_lst_calendrier_rdv_modify', '_controller' => 'App\\Controller\\PageController::lst_calendrier_rdv_add'], ['id'], null, null, false, true, null]],
        1375 => [[['_route' => 'app_lst_calendrier_rdv_delete', '_controller' => 'App\\Controller\\PageController::lst_calendrier_rdv_delete'], ['id'], null, null, false, true, null]],
        1409 => [[['_route' => 'app_finance_loisir', '_controller' => 'App\\Controller\\PageController::lst_finance_loisir'], ['type'], null, null, false, true, null]],
        1462 => [[['_route' => 'app_liste_document_detail_todo', '_controller' => 'App\\Controller\\PageController::detail_ma_liste'], ['id'], null, null, false, true, null]],
        1508 => [[['_route' => 'app_liste_document_liste_set_statut', '_controller' => 'App\\Controller\\PageController::set_statut_task'], ['id', 'id_todolist'], null, null, false, true, null]],
        1546 => [[['_route' => 'app_liste_document_liste_delete_task', '_controller' => 'App\\Controller\\PageController::delete_task'], ['id', 'id_todolist'], null, null, false, true, null]],
        1575 => [[['_route' => 'app_liste_document_liste_reset_task', '_controller' => 'App\\Controller\\PageController::deleteTasks'], ['id_todo'], null, null, false, true, null]],
        1605 => [[['_route' => 'app_delete_liste', '_controller' => 'App\\Controller\\PageController::liste_delete'], ['id'], null, null, false, true, null]],
        1634 => [[['_route' => 'app_lien_sociaux', '_controller' => 'App\\Controller\\PageController::lien_sociaux'], ['type'], null, null, false, true, null]],
        1666 => [[['_route' => 'app_loisir_vacance', '_controller' => 'App\\Controller\\PageController::loisir_vacance'], ['type'], null, null, false, true, null]],
        1717 => [[['_route' => 'app_ajouter_obligation_familiale', '_controller' => 'App\\Controller\\PageController::add_obligation_familiale'], ['type'], null, null, false, true, null]],
        1744 => [[['_route' => 'app_ajouter_loisir', '_controller' => 'App\\Controller\\PageController::add_loisir'], ['type'], null, null, false, true, null]],
        1765 => [[['_route' => 'app_ajouter_lien', '_controller' => 'App\\Controller\\PageController::add_lien'], ['type'], null, null, false, true, null]],
        1787 => [[['_route' => 'app_ajouter_pda', '_controller' => 'App\\Controller\\PageController::add_pda'], ['id'], null, null, false, true, null]],
        1819 => [[['_route' => 'app_ajouter_finance_loisir', '_controller' => 'App\\Controller\\PageController::add_finance_loisir'], ['type'], null, null, false, true, null]],
        1851 => [[['_route' => 'app_form_rythme_vital', '_controller' => 'App\\Controller\\PageController::add_rythme'], ['type'], null, null, false, true, null]],
        1906 => [[['_route' => 'app_rythme_vital_modifier_besoin_vital', '_controller' => 'App\\Controller\\RythmeVitalController::add_besoin_vital'], ['id'], null, null, false, true, null]],
        1944 => [[['_route' => 'app_rythme_vital_modifier_obligation_familiale', '_controller' => 'App\\Controller\\RythmeVitalController::add_obligation_familiale'], ['id'], null, null, false, true, null]],
        1986 => [[['_route' => 'app_rythme_vital_modifier_activite_professionnelle', '_controller' => 'App\\Controller\\RythmeVitalController::add_activite_professionnelle'], ['id'], null, null, false, true, null]],
        2018 => [[['_route' => 'app_rythme_vital_modifier_mes_loisirs', '_controller' => 'App\\Controller\\RythmeVitalController::add_mes_loisirs'], ['id'], null, null, false, true, null]],
        2048 => [[['_route' => 'app_rythme_vital_modifier_mes_liens_sociaux', '_controller' => 'App\\Controller\\RythmeVitalController::add_mes_liens_sociaux'], ['id'], null, null, false, true, null]],
        2088 => [[['_route' => 'app_rythme_vital_mes_loisirs_delete', '_controller' => 'App\\Controller\\RythmeVitalController::lst_mes_loisirs_delete'], ['id'], null, null, false, true, null]],
        2125 => [[['_route' => 'app_rythme_vital_mes_liens_sociaux_delete', '_controller' => 'App\\Controller\\RythmeVitalController::lst_mes_liens_sociaux_delete'], ['id'], null, null, false, true, null]],
        2164 => [[['_route' => 'app_rythme_vital_besoin_vital_delete', '_controller' => 'App\\Controller\\RythmeVitalController::lst_obligation_familiale_delete'], ['id'], null, null, false, true, null]],
        2209 => [[['_route' => 'app_rythme_vital_obligation_familiale_delete', '_controller' => 'App\\Controller\\RythmeVitalController::lst_obligation_familial_delete'], ['id'], null, null, false, true, null]],
        2258 => [[['_route' => 'app_rythme_vital_activite_professionnelle_delete', '_controller' => 'App\\Controller\\RythmeVitalController::lst_activite_professionnelle_delete'], ['id'], null, null, false, true, null]],
        2295 => [[['_route' => 'app_rendez_vous_valide', '_controller' => 'App\\Controller\\PageController::validerRDV'], ['id'], null, null, false, true, null]],
        2332 => [[['_route' => 'app_valider_tel', '_controller' => 'App\\Controller\\PageController::validerTel'], ['id'], null, null, false, true, null]],
        2364 => [[['_route' => 'app_valider_choses_a_faire', '_controller' => 'App\\Controller\\PageController::validerChosesAFaire'], ['id'], null, null, false, true, null]],
        2391 => [[['_route' => 'app_valider_evenement', '_controller' => 'App\\Controller\\PageController::validerEvenement'], ['id'], null, null, false, true, null]],
        2433 => [[['_route' => 'app_visualiser_plan_action', '_controller' => 'App\\Controller\\PageController::visualiser_plan_action'], ['id'], null, null, false, true, null]],
        2479 => [[['_route' => 'app_lst_post_it_notes_modify', '_controller' => 'App\\Controller\\PageController::lst_add_notes'], ['id'], null, null, false, true, null]],
        2512 => [[['_route' => 'app_delete_note', '_controller' => 'App\\Controller\\PageController::note_delete'], ['id'], null, null, false, true, null]],
        2543 => [[['_route' => 'create_task', '_controller' => 'App\\Controller\\PageController::créer_tache'], ['id_todolist'], null, null, false, true, null]],
        2589 => [[['_route' => 'app_journalier_set_statut', '_controller' => 'App\\Controller\\PageController::set_statut_journalier'], ['id'], null, null, false, true, null]],
        2607 => [[['_route' => 'app_journalier_date_set_statut', '_controller' => 'App\\Controller\\PageController::set_statut_date_journalier'], ['id', 'date'], null, null, false, true, null]],
        2643 => [[['_route' => 'app_journalier_modifier_tache_jour', '_controller' => 'App\\Controller\\PageController::modify_task'], ['id'], null, null, false, true, null]],
        2666 => [[['_route' => 'app_journalier_modifier_tache_date', 'date' => null, '_controller' => 'App\\Controller\\PageController::modify_task_date'], ['id', 'date'], null, null, false, true, null]],
        2694 => [[['_route' => 'app_journalier_delete', '_controller' => 'App\\Controller\\PageController::journalier_task_delete'], ['id'], null, null, false, true, null]],
        2712 => [[['_route' => 'app_journalier_date_delete', '_controller' => 'App\\Controller\\PageController::journalier_task_delete_date'], ['id', 'date'], null, null, false, true, null]],
        2740 => [[['_route' => 'app_journalier_report', '_controller' => 'App\\Controller\\PageController::journalier_task_report'], ['id'], null, null, false, true, null]],
        2758 => [[['_route' => 'app_journalier_date_report', '_controller' => 'App\\Controller\\PageController::journalier_task_date_report'], ['id', 'date'], null, null, false, true, null]],
        2776 => [[['_route' => 'app_journalier_date', '_controller' => 'App\\Controller\\PageController::journalierByDate'], ['date'], null, null, false, true, null]],
        2801 => [[['_route' => 'app_journalier_rdv_add', '_controller' => 'App\\Controller\\PageController::lst_journalier_rdv'], ['id_type'], null, null, false, true, null]],
        2829 => [[['_route' => 'app_journalier_rdv_modify', '_controller' => 'App\\Controller\\PageController::lst_journalier_rdv'], ['id'], null, null, false, true, null]],
        2907 => [[['_route' => 'app_routine_travail_add', 'type' => null, 'id_type' => null, '_controller' => 'App\\Controller\\PageController::lst_editer_temps_travail'], ['type', 'id_type'], null, null, false, true, null]],
        2975 => [[['_route' => 'app_routine_travail_modify', 'type' => null, 'id_type' => null, '_controller' => 'App\\Controller\\PageController::lst_editer_temps_travail'], ['id', 'type', 'id_type'], null, null, false, true, null]],
        3027 => [[['_route' => 'app_routine_travail_delete', 'type' => null, 'id_type' => null, '_controller' => 'App\\Controller\\PageController::routine_travail_delete'], ['id', 'type', 'id_type'], null, null, false, true, null]],
        3070 => [
            [['_route' => 'app_tache_pda_delete', '_controller' => 'App\\Controller\\PageController::tache_pda_delete'], ['id', 'id_objectif'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
