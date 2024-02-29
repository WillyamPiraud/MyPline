<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/ob(?'
                    .'|jectif(?'
                        .'|/(?'
                            .'|modifier/([^/]++)/([^/]++)(?'
                                .'|(*:55)'
                                .'|/([^/]++)(?'
                                    .'|(*:74)'
                                .')'
                            .')'
                            .'|supprimer/([^/]++)/([^/]++)(*:110)'
                            .'|ajout/([^/]++)/([^/]++)(?'
                                .'|/([^/]++)(?'
                                    .'|(*:156)'
                                .')'
                                .'|(*:165)'
                            .')'
                            .'|([^/]++)(*:182)'
                        .')'
                        .'|_activite/supprimer/([^/]++)/([^/]++)(*:228)'
                    .')'
                    .'|ligation_professionnel/mon_metier(?:/([^/]++))?(*:284)'
                .')'
                .'|/m(?'
                    .'|e(?'
                        .'|s(?'
                            .'|\\-objectifs/visualiser/(?'
                                .'|([^/]++)(*:340)'
                                .'|activite/([^/]++)(*:365)'
                                .'|sante/([^/]++)(*:387)'
                            .')'
                            .'|_(?'
                                .'|routines/activite_professionnel/temps_travail(?:/([^/]++)(?:/([^/]++))?)?(*:473)'
                                .'|metiers/(?'
                                    .'|add_metier_formation(?:/([^/]++))?(*:526)'
                                    .'|modify_metier_formation/([^/]++)(?:/([^/]++))?(*:580)'
                                .')'
                            .')'
                        .')'
                        .'|tier/delete/([^/]++)/([^/]++)(*:620)'
                    .')'
                    .'|odifier_(?'
                        .'|obligation_familiale/([^/]++)/([^/]++)(*:678)'
                        .'|l(?'
                            .'|oisir/([^/]++)/([^/]++)(*:713)'
                            .'|ien/([^/]++)/([^/]++)(*:742)'
                        .')'
                        .'|pda/([^/]++)/([^/]++)(*:772)'
                        .'|f(?'
                            .'|inance_loisir/([^/]++)/([^/]++)(*:815)'
                            .'|ond_urgence/([^/]++)(*:843)'
                        .')'
                        .'|mes_revenus/([^/]++)(*:872)'
                    .')'
                .')'
                .'|/l(?'
                    .'|st_(?'
                        .'|obligation_familiale/([^/]++)(*:922)'
                        .'|calendrier_(?'
                            .'|tel/(?'
                                .'|modify_tel/([^/]++)(*:970)'
                                .'|delete/([^/]++)(*:993)'
                            .')'
                            .'|choses_a_faire/(?'
                                .'|modify_choses_a_faire/([^/]++)(*:1050)'
                                .'|delete/([^/]++)(*:1074)'
                            .')'
                            .'|evenement/(?'
                                .'|modify_evenement/([^/]++)(*:1122)'
                                .'|delete/([^/]++)(*:1146)'
                            .')'
                            .'|rdv/(?'
                                .'|modify_rdv/([^/]++)(*:1182)'
                                .'|delete/([^/]++)(*:1206)'
                            .')'
                        .')'
                        .'|finance_loisir/([^/]++)(*:1240)'
                    .')'
                    .'|i(?'
                        .'|ste(?'
                            .'|_document/(?'
                                .'|detail_todo/([^/]++)(*:1293)'
                                .'|liste/(?'
                                    .'|set_statut/([^/]++)/([^/]++)(*:1339)'
                                    .'|delete_task/([^/]++)/([^/]++)(*:1377)'
                                    .'|reset_tasks/([^/]++)(*:1406)'
                                .')'
                            .')'
                            .'|/supprimer/([^/]++)(*:1436)'
                        .')'
                        .'|en_sociaux/([^/]++)(*:1465)'
                    .')'
                    .'|oisir_vacance/([^/]++)(*:1497)'
                .')'
                .'|/ajouter_(?'
                    .'|obligation_familiale/([^/]++)(*:1548)'
                    .'|l(?'
                        .'|oisir/([^/]++)(*:1575)'
                        .'|ien/([^/]++)(*:1596)'
                    .')'
                    .'|pda/([^/]++)(*:1618)'
                    .'|finance_loisir/([^/]++)(*:1650)'
                .')'
                .'|/r(?'
                    .'|ythme(?'
                        .'|/([^/]++)(*:1682)'
                        .'|_vital/(?'
                            .'|m(?'
                                .'|odifier_(?'
                                    .'|besoin_vital/([^/]++)(*:1737)'
                                    .'|obligation_familiale/([^/]++)(*:1775)'
                                    .'|activite_professionnelle/([^/]++)(*:1817)'
                                    .'|mes_l(?'
                                        .'|oisirs/([^/]++)(*:1849)'
                                        .'|iens_sociaux/([^/]++)(*:1879)'
                                    .')'
                                .')'
                                .'|es_l(?'
                                    .'|oisirs/delete/([^/]++)(*:1919)'
                                    .'|iens_sociaux/delete/([^/]++)(*:1956)'
                                .')'
                            .')'
                            .'|besoin_vital/delete/([^/]++)(*:1995)'
                            .'|obligation_familiale/delete/([^/]++)(*:2040)'
                            .'|activite_professionnelle/delete/([^/]++)(*:2089)'
                        .')'
                    .')'
                    .'|endez_vous_valide/([^/]++)(*:2126)'
                .')'
                .'|/v(?'
                    .'|alider_(?'
                        .'|tel/([^/]++)(*:2163)'
                        .'|choses_a_faire/([^/]++)(*:2195)'
                        .'|evenement/([^/]++)(*:2222)'
                    .')'
                    .'|isualiser\\-plan\\-action/([^/]++)(*:2264)'
                .')'
                .'|/post_it_notes/modify_notes/([^/]++)(*:2310)'
                .'|/note/supprimer/([^/]++)(*:2343)'
                .'|/créer_tache/([^/]++)(*:2374)'
                .'|/journalier/(?'
                    .'|set_statut/([^/]++)(?'
                        .'|(*:2420)'
                        .'|/([^/]++)(*:2438)'
                    .')'
                    .'|modifier_tache/([^/]++)(?'
                        .'|(*:2474)'
                        .'|(?:/([^/]++))?(*:2497)'
                    .')'
                    .'|delete/([^/]++)(?'
                        .'|(*:2525)'
                        .'|/([^/]++)(*:2543)'
                    .')'
                    .'|report/([^/]++)(?'
                        .'|(*:2571)'
                        .'|/([^/]++)(*:2589)'
                    .')'
                    .'|([^/]++)(*:2607)'
                    .'|add_rdv/([^/]++)(*:2632)'
                    .'|modify_rdv/([^/]++)(*:2660)'
                .')'
                .'|/t(?'
                    .'|emps_travail/(?'
                        .'|add_routine_travail(?:/([^/]++)(?:/([^/]++))?)?(*:2738)'
                        .'|modify_routine_travail/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?(*:2806)'
                        .'|delete/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?(*:2858)'
                    .')'
                    .'|ache_pda/delete/([^/]++)/([^/]++)(*:2901)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        55 => [[['_route' => 'app_modifier_form_objectif', '_controller' => 'App\\Controller\\PageController::add_objectif'], ['secteur', 'id'], null, null, false, true, null]],
        74 => [
            [['_route' => 'app_modifier_form_objectif_mod_activite_loisir', '_controller' => 'App\\Controller\\PageController::add_objectif_activite'], ['secteur', 'idSecteur', 'id'], null, null, false, true, null],
            [['_route' => 'app_modifier_form_objectif_mod_activite', '_controller' => 'App\\Controller\\PageController::add_objectif_activite'], ['secteur', 'idSecteur', 'id'], null, null, false, true, null],
            [['_route' => 'app_modifier_form_objectif_activite', '_controller' => 'App\\Controller\\PageController::add_objectif_activite'], ['secteur', 'idSecteur', 'id'], null, null, false, true, null],
        ],
        110 => [[['_route' => 'app_objectif_delete', '_controller' => 'App\\Controller\\PageController::objectif_delete'], ['id', 'secteur'], null, null, false, true, null]],
        156 => [
            [['_route' => 'app_form_objectif_add_activite_loisir', '_controller' => 'App\\Controller\\PageController::add_objectif_activite'], ['secteur', 'idSecteur', 'typeActivity'], null, null, false, true, null],
            [['_route' => 'app_form_objectif_add_activite', '_controller' => 'App\\Controller\\PageController::add_objectif_activite'], ['secteur', 'idSecteur', 'typeActivity'], null, null, false, true, null],
        ],
        165 => [[['_route' => 'app_form_objectif_activite', '_controller' => 'App\\Controller\\PageController::add_objectif_activite'], ['secteur', 'idSecteur'], null, null, false, true, null]],
        182 => [[['_route' => 'app_form_objectif', '_controller' => 'App\\Controller\\PageController::add_objectif'], ['secteur'], null, null, false, true, null]],
        228 => [[['_route' => 'app_objectif_delete_activite', '_controller' => 'App\\Controller\\PageController::objectif_delete_activite'], ['id', 'idSecteur'], null, null, false, true, null]],
        284 => [[['_route' => 'app_mon_metier', 'type' => null, '_controller' => 'App\\Controller\\PageController::mon_metier'], ['type'], null, null, false, true, null]],
        340 => [[['_route' => 'app_mes_objectifs_visualiser', '_controller' => 'App\\Controller\\PageController::objectif_visualiser'], ['secteur'], null, null, false, true, null]],
        365 => [[['_route' => 'app_objectifs_visualiser_activity', '_controller' => 'App\\Controller\\PageController::objectif_visualiser_activite'], ['idSecteur'], null, null, false, true, null]],
        387 => [[['_route' => 'app_mes_objectifs_visualiser_activite', '_controller' => 'App\\Controller\\PageController::objectif_visualiser_activite'], ['idSecteur'], null, null, false, true, null]],
        473 => [[['_route' => 'app_activite_professionnel_temps_travail', 'type' => null, 'id' => null, '_controller' => 'App\\Controller\\PageController::liste_activite_professionnelle_temps_travail'], ['type', 'id'], null, null, false, true, null]],
        526 => [[['_route' => 'app_metier_formation_add', 'type' => null, '_controller' => 'App\\Controller\\PageController::lst_mes_metiers'], ['type'], null, null, false, true, null]],
        580 => [[['_route' => 'app_metier_formation_modify', 'type' => null, '_controller' => 'App\\Controller\\PageController::lst_mes_metiers'], ['id', 'type'], null, null, false, true, null]],
        620 => [[['_route' => 'app_metier_delete', '_controller' => 'App\\Controller\\PageController::app_liste_delete_metier'], ['id', 'type'], null, null, false, true, null]],
        678 => [[['_route' => 'app_modifier_obligation_familiale', '_controller' => 'App\\Controller\\PageController::add_obligation_familiale'], ['type', 'id'], null, null, false, true, null]],
        713 => [[['_route' => 'app_modifier_loisir', '_controller' => 'App\\Controller\\PageController::add_loisir'], ['type', 'id'], null, null, false, true, null]],
        742 => [[['_route' => 'app_modifier_lien', '_controller' => 'App\\Controller\\PageController::add_lien'], ['type', 'id'], null, null, false, true, null]],
        772 => [[['_route' => 'app_modifier_pda', '_controller' => 'App\\Controller\\PageController::add_pda'], ['id', 'id_pda'], null, null, false, true, null]],
        815 => [[['_route' => 'app_modifier_finance_loisir', '_controller' => 'App\\Controller\\PageController::add_finance_loisir'], ['type', 'id'], null, null, false, true, null]],
        843 => [[['_route' => 'app_modifier_fond_urgence', '_controller' => 'App\\Controller\\PageController::add_fond_urgence'], ['id'], null, null, false, true, null]],
        872 => [[['_route' => 'app_modifier_mes_revenus', '_controller' => 'App\\Controller\\PageController::add_mes_revenus'], ['id'], null, null, false, true, null]],
        922 => [[['_route' => 'app_lst_obligation_familiale', '_controller' => 'App\\Controller\\PageController::lst_obligation_familiale'], ['type'], null, null, false, true, null]],
        970 => [[['_route' => 'app_lst_calendrier_tel_modify', '_controller' => 'App\\Controller\\PageController::lst_calendrier_tel_add'], ['id'], null, null, false, true, null]],
        993 => [[['_route' => 'app_lst_calendrier_tel_delete', '_controller' => 'App\\Controller\\PageController::lst_calendrier_tel_delete'], ['id'], null, null, false, true, null]],
        1050 => [[['_route' => 'app_lst_calendrier_choses_a_faire_modify', '_controller' => 'App\\Controller\\PageController::lst_calendrier_chosea_faire_add'], ['id'], null, null, false, true, null]],
        1074 => [[['_route' => 'app_lst_calendrier_choses_a_faire_delete', '_controller' => 'App\\Controller\\PageController::lst_calendrier_choses_a_faire_delete'], ['id'], null, null, false, true, null]],
        1122 => [[['_route' => 'app_lst_calendrier_evenement_modify', '_controller' => 'App\\Controller\\PageController::lst_calendrie_evenement_add'], ['id'], null, null, false, true, null]],
        1146 => [[['_route' => 'app_lst_calendrier_evenement_delete', '_controller' => 'App\\Controller\\PageController::lst_calendrier_evenement_delete'], ['id'], null, null, false, true, null]],
        1182 => [[['_route' => 'app_lst_calendrier_rdv_modify', '_controller' => 'App\\Controller\\PageController::lst_calendrier_rdv_add'], ['id'], null, null, false, true, null]],
        1206 => [[['_route' => 'app_lst_calendrier_rdv_delete', '_controller' => 'App\\Controller\\PageController::lst_calendrier_rdv_delete'], ['id'], null, null, false, true, null]],
        1240 => [[['_route' => 'app_finance_loisir', '_controller' => 'App\\Controller\\PageController::lst_finance_loisir'], ['type'], null, null, false, true, null]],
        1293 => [[['_route' => 'app_liste_document_detail_todo', '_controller' => 'App\\Controller\\PageController::detail_ma_liste'], ['id'], null, null, false, true, null]],
        1339 => [[['_route' => 'app_liste_document_liste_set_statut', '_controller' => 'App\\Controller\\PageController::set_statut_task'], ['id', 'id_todolist'], null, null, false, true, null]],
        1377 => [[['_route' => 'app_liste_document_liste_delete_task', '_controller' => 'App\\Controller\\PageController::delete_task'], ['id', 'id_todolist'], null, null, false, true, null]],
        1406 => [[['_route' => 'app_liste_document_liste_reset_task', '_controller' => 'App\\Controller\\PageController::deleteTasks'], ['id_todo'], null, null, false, true, null]],
        1436 => [[['_route' => 'app_delete_liste', '_controller' => 'App\\Controller\\PageController::liste_delete'], ['id'], null, null, false, true, null]],
        1465 => [[['_route' => 'app_lien_sociaux', '_controller' => 'App\\Controller\\PageController::lien_sociaux'], ['type'], null, null, false, true, null]],
        1497 => [[['_route' => 'app_loisir_vacance', '_controller' => 'App\\Controller\\PageController::loisir_vacance'], ['type'], null, null, false, true, null]],
        1548 => [[['_route' => 'app_ajouter_obligation_familiale', '_controller' => 'App\\Controller\\PageController::add_obligation_familiale'], ['type'], null, null, false, true, null]],
        1575 => [[['_route' => 'app_ajouter_loisir', '_controller' => 'App\\Controller\\PageController::add_loisir'], ['type'], null, null, false, true, null]],
        1596 => [[['_route' => 'app_ajouter_lien', '_controller' => 'App\\Controller\\PageController::add_lien'], ['type'], null, null, false, true, null]],
        1618 => [[['_route' => 'app_ajouter_pda', '_controller' => 'App\\Controller\\PageController::add_pda'], ['id'], null, null, false, true, null]],
        1650 => [[['_route' => 'app_ajouter_finance_loisir', '_controller' => 'App\\Controller\\PageController::add_finance_loisir'], ['type'], null, null, false, true, null]],
        1682 => [[['_route' => 'app_form_rythme_vital', '_controller' => 'App\\Controller\\PageController::add_rythme'], ['type'], null, null, false, true, null]],
        1737 => [[['_route' => 'app_rythme_vital_modifier_besoin_vital', '_controller' => 'App\\Controller\\RythmeVitalController::add_besoin_vital'], ['id'], null, null, false, true, null]],
        1775 => [[['_route' => 'app_rythme_vital_modifier_obligation_familiale', '_controller' => 'App\\Controller\\RythmeVitalController::add_obligation_familiale'], ['id'], null, null, false, true, null]],
        1817 => [[['_route' => 'app_rythme_vital_modifier_activite_professionnelle', '_controller' => 'App\\Controller\\RythmeVitalController::add_activite_professionnelle'], ['id'], null, null, false, true, null]],
        1849 => [[['_route' => 'app_rythme_vital_modifier_mes_loisirs', '_controller' => 'App\\Controller\\RythmeVitalController::add_mes_loisirs'], ['id'], null, null, false, true, null]],
        1879 => [[['_route' => 'app_rythme_vital_modifier_mes_liens_sociaux', '_controller' => 'App\\Controller\\RythmeVitalController::add_mes_liens_sociaux'], ['id'], null, null, false, true, null]],
        1919 => [[['_route' => 'app_rythme_vital_mes_loisirs_delete', '_controller' => 'App\\Controller\\RythmeVitalController::lst_mes_loisirs_delete'], ['id'], null, null, false, true, null]],
        1956 => [[['_route' => 'app_rythme_vital_mes_liens_sociaux_delete', '_controller' => 'App\\Controller\\RythmeVitalController::lst_mes_liens_sociaux_delete'], ['id'], null, null, false, true, null]],
        1995 => [[['_route' => 'app_rythme_vital_besoin_vital_delete', '_controller' => 'App\\Controller\\RythmeVitalController::lst_obligation_familiale_delete'], ['id'], null, null, false, true, null]],
        2040 => [[['_route' => 'app_rythme_vital_obligation_familiale_delete', '_controller' => 'App\\Controller\\RythmeVitalController::lst_obligation_familial_delete'], ['id'], null, null, false, true, null]],
        2089 => [[['_route' => 'app_rythme_vital_activite_professionnelle_delete', '_controller' => 'App\\Controller\\RythmeVitalController::lst_activite_professionnelle_delete'], ['id'], null, null, false, true, null]],
        2126 => [[['_route' => 'app_rendez_vous_valide', '_controller' => 'App\\Controller\\PageController::validerRDV'], ['id'], null, null, false, true, null]],
        2163 => [[['_route' => 'app_valider_tel', '_controller' => 'App\\Controller\\PageController::validerTel'], ['id'], null, null, false, true, null]],
        2195 => [[['_route' => 'app_valider_choses_a_faire', '_controller' => 'App\\Controller\\PageController::validerChosesAFaire'], ['id'], null, null, false, true, null]],
        2222 => [[['_route' => 'app_valider_evenement', '_controller' => 'App\\Controller\\PageController::validerEvenement'], ['id'], null, null, false, true, null]],
        2264 => [[['_route' => 'app_visualiser_plan_action', '_controller' => 'App\\Controller\\PageController::visualiser_plan_action'], ['id'], null, null, false, true, null]],
        2310 => [[['_route' => 'app_lst_post_it_notes_modify', '_controller' => 'App\\Controller\\PageController::lst_add_notes'], ['id'], null, null, false, true, null]],
        2343 => [[['_route' => 'app_delete_note', '_controller' => 'App\\Controller\\PageController::note_delete'], ['id'], null, null, false, true, null]],
        2374 => [[['_route' => 'create_task', '_controller' => 'App\\Controller\\PageController::créer_tache'], ['id_todolist'], null, null, false, true, null]],
        2420 => [[['_route' => 'app_journalier_set_statut', '_controller' => 'App\\Controller\\PageController::set_statut_journalier'], ['id'], null, null, false, true, null]],
        2438 => [[['_route' => 'app_journalier_date_set_statut', '_controller' => 'App\\Controller\\PageController::set_statut_date_journalier'], ['id', 'date'], null, null, false, true, null]],
        2474 => [[['_route' => 'app_journalier_modifier_tache_jour', '_controller' => 'App\\Controller\\PageController::modify_task'], ['id'], null, null, false, true, null]],
        2497 => [[['_route' => 'app_journalier_modifier_tache_date', 'date' => null, '_controller' => 'App\\Controller\\PageController::modify_task_date'], ['id', 'date'], null, null, false, true, null]],
        2525 => [[['_route' => 'app_journalier_delete', '_controller' => 'App\\Controller\\PageController::journalier_task_delete'], ['id'], null, null, false, true, null]],
        2543 => [[['_route' => 'app_journalier_date_delete', '_controller' => 'App\\Controller\\PageController::journalier_task_delete_date'], ['id', 'date'], null, null, false, true, null]],
        2571 => [[['_route' => 'app_journalier_report', '_controller' => 'App\\Controller\\PageController::journalier_task_report'], ['id'], null, null, false, true, null]],
        2589 => [[['_route' => 'app_journalier_date_report', '_controller' => 'App\\Controller\\PageController::journalier_task_date_report'], ['id', 'date'], null, null, false, true, null]],
        2607 => [[['_route' => 'app_journalier_date', '_controller' => 'App\\Controller\\PageController::journalierByDate'], ['date'], null, null, false, true, null]],
        2632 => [[['_route' => 'app_journalier_rdv_add', '_controller' => 'App\\Controller\\PageController::lst_journalier_rdv'], ['id_type'], null, null, false, true, null]],
        2660 => [[['_route' => 'app_journalier_rdv_modify', '_controller' => 'App\\Controller\\PageController::lst_journalier_rdv'], ['id'], null, null, false, true, null]],
        2738 => [[['_route' => 'app_routine_travail_add', 'type' => null, 'id_type' => null, '_controller' => 'App\\Controller\\PageController::lst_editer_temps_travail'], ['type', 'id_type'], null, null, false, true, null]],
        2806 => [[['_route' => 'app_routine_travail_modify', 'type' => null, 'id_type' => null, '_controller' => 'App\\Controller\\PageController::lst_editer_temps_travail'], ['id', 'type', 'id_type'], null, null, false, true, null]],
        2858 => [[['_route' => 'app_routine_travail_delete', 'type' => null, 'id_type' => null, '_controller' => 'App\\Controller\\PageController::routine_travail_delete'], ['id', 'type', 'id_type'], null, null, false, true, null]],
        2901 => [
            [['_route' => 'app_tache_pda_delete', '_controller' => 'App\\Controller\\PageController::tache_pda_delete'], ['id', 'id_objectif'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
