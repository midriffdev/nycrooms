<?php
/**
 * WP Ultimate CSV Importer plugin file.
 *
 * Copyright (C) 2010-2020, Smackcoders Inc - info@smackcoders.com
 */

namespace Smackcoders\FCSV;

if ( ! defined( 'ABSPATH' ) )
exit; // Exit if accessed directly

class LangFR {
        private static $france_instance = null , $media_instance;

        public static function getInstance() {
                if (LangFR::$france_instance == null) {
                        LangFR::$france_instance = new LangFR;
                        return LangFR::$france_instance;
                }
                return LangFR::$france_instance;
        }

        public static function contents(){
                $response = array('ImportUpdate' => 'Import',
                'Dashboard' => 'Tableau de bord',
                        'Manager' => 'Directeur',
                        'Export' => 'Exportation',
                        'Settings' => 'Réglages',
                        'Support' => 'Soutien',
                        'UploadfromDesktop' => 'Upload depuis le bureau',
                        'UploadfromFTPSFTP' => 'Upload depuis FTP / SFTP',
                        'UploadfromURL' => 'Télécharger depuis une URL',
                        'ChoosFileintheServer' => 'Choisissez le fichier du serveur',
                        'Drag&Dropyourfilesor' => 'Glissez-déposez vos fichiers ou',
                        'Browse' => 'Feuilleter',
                        'NewItem' => 'Nouvel article',
                        'ExistingItems' => 'Articles existants',
                        'ImportEachRecordAs'=> 'Importer chaque enregistrement en tant que',
                        'Continue' => 'Continuer',
                        'Search' => 'Chercher',
                        'FromDate' => 'Partir de la date',
                        'ToDate' => 'À ce jour',
                        'SEARCH' => 'CHERCHER',
                        'SavedTemplate' => 'Modèle enregistré',
                        'TEMPLATES' => 'GABARITS',
                        'MATCHEDCOLUMNSCOUNT' => 'COMPTE DE COLONNES CORRESPONDANTES',
                        'MODULE' => 'MODULE',
                        'CREATEDTIME' => 'TEMPS CRÉÉ',
                        'ACTION' => 'ACTION',
                        'USETEMPLATE' => 'UTILISE LE MODÈLE',
                        'CREATENEWMAPPING' => 'CREER UN NOUVEAU MAPPING',
                        'BACK' => 'RETOUR',
                        'ADVANCEDMODE' => 'MODE AVANCÉ',
                        'DRAGDROPMODE' => 'DRAG & DROP MODE',
                        'WordpressFields' => 'Champs Wordpress',
                        'WPFIELDS' => 'WP champs',
                        'CSVHEADER' => 'En-tête CSV',
                        'Action' => 'Action',
                        'Name' => 'prénom',
                        'HINT' => 'ALLUSION',
                        'Example' => 'Exemple',
                        'WordPressCoreFields' => 'WordPress Core Fields',
                        'ACFFreeFields' => "Champs libres d'ACF",
                        'ACFFields' => 'Champs ACF',
                        'ACFGroupFields' => 'Champs du groupe ACF',
                        'ACFProFields' => 'ACF Pro Fields',
                        'ACFRepeaterFields' => 'Champs de répéteur ACF',
                        'TypesCustomFields' => 'Types de champs personnalisés',
                        'PodsFields' => 'Champs de pods',
                        'CustomFieldSuite' => 'Suite de terrain personnalisée',
                        'AllInOneSeoFields' => 'Tout en un Seo Fields',
                        'YoastSeoFields' => 'Yoast Seo Fields',
                        'BillingAndShippingInformation' => "Informations de facturation et d'expédition",
                        'CustomFieldsWPMemberFields' => 'Champs personnalisés Champs de membre WP',
                        'CustomFieldsMemberFields' => 'Champs personnalisés',
                        'ProductMetaFields' => 'Produit Metafields',
                        'WPECommerceCustomFields' => 'WP Custom Commerce Champs',
                        'EventsManagerFields' => "Champs du gestionnaire d'événements",
                        'CMB2CustomFields' => 'Champs personnalisés CMB2',
                        'CourseSettingsFields' => 'Champs des paramètres du cours',
                        'CurriculumSettingsFields' => 'Champs des paramètres du programme',
                        'QuizSettingsFields' => 'Champs des paramètres du quiz',
                        'LessonSettingsFields' => 'Champs des paramètres de la leçon',
                        'QuestionSettingsFields' => 'Champs des paramètres des questions',
                        'OrderSettingsFields' => 'Champs des paramètres de commande',
                        'WordPressCustomFields' => 'Champs personnalisés WordPress',
                        'TermsandTaxonomies' => 'Termes et Taxonomies',
                        'IsSerialized' => 'Est sérialisé',
                        'NoCustomFieldsFound' => 'Aucun champ personnalisé trouvé', 
                        'MediaUploadFields' => 'Champs de téléchargement de média',
                        'UploadMedia' => 'Télécharger un média',
                        'UploadedListofFiles' => 'Liste des fichiers téléchargés',
                        'UploadedMediaFileLists' => 'Listes de fichiers multimédias téléchargées',
                        'SavethismappingasTemplate' => 'Enregistrer ce mappage en tant que modèle',
                        'Save' => 'sauvegarder',
                        'Doyouneedtoupdatethecurrentmapping' => 'Avez-vous besoin de mettre à jour le mappage actuel?',
                        'Savethecurrentmappingasnewtemplate' => 'Enregistrer le mappage actuel en tant que nouveau modèle',
                        'Back' => 'Retour',
                        'Size' => 'Taille',
                        'MediaHandling' => 'Gestion des médias',
                        'Downloadexternalimagestoyourmedia' => 'Téléchargez des images externes sur votre média',
                        'ImageHandling' => 'Traitement des images',
                        'Usemediaimagesifalreadyavailable' => 'Utiliser des images de média si déjà disponibles',
                        'Doyouwanttooverwritetheexistingimages' => 'Voulez-vous écraser les images existantes',
                        'ImageSizes' => "Tailles d'image",
                        'Thumbnail' => 'La vignette',
                        'Medium' => 'Moyen',
                        'MediumLarge' => 'Moyen large',
                        'Large' => 'Grand',
                        'Custom' => 'Douane',
                        'Slug' => 'Limace',
                        'Width' => 'Largeur',
                        'Height' => 'la taille',
                        'Addcustomsizes' => 'Ajouter des tailles personnalisées',
                        'PostContentImageOption' => 'Options image de contenu de publication',
                        'DownloadPostContentExternalImagestoMedia' => 'Télécharger le contenu externe ImagestoMedia',
                        'MediaSEOAdvancedOptions' => 'Media SEO & Options avancées',
                        'SetimageTitle' => "Définir le titre de l'image",
                        'SetimageCaption' => "Définir la légende de l'image",
                        'SetimageAltText' => "Définir l'image Alt Text",
                        'SetimageDescription' => "Définir l'image Description",
                        'Changeimagefilenameto' => 'Changer le nom du fichier image en',
                        'ImportconfigurationSection' => "Section de configuration d'importation",
                        'EnablesafeprestateRollback' => 'Activer la restauration sécurisée',
                        'Backupbeforeimport' => 'Sauvegarde avant importation',
                        'DoyouwanttoSWITCHONMaintenancemodewhileimport' => "Voulez-vous passer en mode maintenance lors de l'importation",
                        'Doyouwanttohandletheduplicateonexistingrecords' => 'Voulez-vous gérer le doublon sur les enregistrements existants',
                        'Mentionthefieldswhichyouwanttohandleduplicates' => 'Mentionnez les champs que vous souhaitez gérer en double',
                        'DoyouwanttoUpdateanexistingrecords' => 'Voulez-vous mettre à jour des enregistrements existants',
                        'Updaterecordsbasedon' => 'Mettre à jour les enregistrements en fonction de',
                        'DoyouwanttoSchedulethisImport' => 'Voulez-vous planifier cette importation',
                        'ScheduleDate' => "Date de l'horaire",
                        'ScheduleFrequency' => "Fréquence d'horaire",
                        'TimeZone' => 'Fuseau horaire',
                        'ScheduleTime' => 'Horaire',
                        'Schedule' => 'Programme',
                        'Import' => 'Importation',
                        'Format' => 'Format',
                        'OneTime' => 'Une fois',
                        'Daily' => 'du quotidien',
                        'Weekly' => 'Hebdomadaire',
                        'Monthly' => 'Mensuel',
                        'Hourly' => 'Toutes les heures',
                        'Every30mins'=> 'Toutes les 30 minutes',
                        'Every15mins' => 'Toutes les 15 minutes',
                        'Every10mins' => 'Toutes les 10 minutes',
                        'Every5mins' => 'Toutes les 5 minutes',
                        'FileName' => 'Nom de fichier',
                        'FileSize' => 'Taille du fichier',
                        'Process' => 'Processus',
                        'Totalnoofrecords' => "Nombre total d'enregistrements",
                        'CurrentProcessingRecord' => 'Enregistrement en cours de traitement',
                        'RemainingRecord' => 'Enregistrement restant',
                        'Completed' => 'Terminé',
                        'TimeElapsed' => 'Temps écoulé',
                        'approximate' => 'approximatif',
                        'DownloadLog' => 'Télécharger le journal',
                        'NoRecord' => 'Aucun enregistrement',
                        'UploadedCSVFileLists' => 'Listes de fichiers CSV téléchargées',
                        'Hostname' => "Nom d'hôte",
                        'HostPort' => 'Port hôte',
                        'HostUsername' => "Nom d'utilisateur de l'hôte",
                        'HostPassword' => 'Mot de passe hôte',
                        'HostPath' => "Chemin de l'hôte",
                        'DefaultPort' => 'Port par défaut',
                        'FTPUsername' => "Nom d'utilisateur FTP",
                        'FTPPassword' => 'Mot de passe FTP',
                        'ConnectionType' => 'Type de connexion',
                        'ImportersActivity' => 'Activité des importateurs',
                        'ImportStatistics' => "Statistiques d'importation",
                        'FileManager' => 'Gestionnaire de fichiers',
                        'SmartSchedule' => 'Horaire intelligent',
                        'ScheduledExport' => 'Export planifié',
                        'Templates' => 'Modèles',
                        'LogManager' => 'Gestionnaire de journaux',
                        'NotSelectedAnyTab' => 'Pas sélectionné aucun onglet',
                        'EventInfo' => "Informations sur l'événement",
                        'EventDate' => "Date de l'événement",
                        'EventStatus' => "Statut de l'événement",
                        'Actions' => 'actes',
                        'Date' => 'Rendez-vous amoureux',
                        'Purpose' => 'Objectif',
                        'Revision' => 'Révision',
                        'Select' => 'Sélectionner',
                        'Inserted' => 'Inséré',
                        'Updated' => 'Mis à jour',
                        'Skipped' => 'Sauté',
                        'Noeventsfound' => 'Aucun événement trouvé',
                        'ScheduleInfo' => 'Informations sur les horaires',
                        'ScheduledDate' => 'Date prévue',
                        'ScheduledTime' => 'Heure prévue',
                        'Youhavenotscheduledanyevent' => "Vous n'avez programmé aucun événement",
                        'Frequency' => 'La fréquence',
                        'Time' => 'Temps',
                        'EditSchedule' => 'Modifier le calendrier',
                        'SaveChanges' => 'Sauvegarder les modifications',
                        'TemplateInfo' => 'Informations sur le modèle',
                        'TemplateName' => 'Nom du modèle',
                        'Module' => 'Module',
                        'CreatedTime' => 'Temps créé',
                        'NoTemplateFound' => 'Aucun modèle trouvé',
                        'Download' => 'Télécharger',
                        'NoLogRecordFound' => 'Aucun enregistrement de journal trouvé',
                        'GeneralSettings' => 'réglages généraux',
                        'DatabaseOptimization' => 'Optimisation de la base de données',
                        'SecurityandPerformance' => 'Sécurité et performance',
                        'Documentation' => 'Documentation',
                        'MediaReport' => 'Rapport de presse',
                        'DropTable' => 'Drop Table',
                        'Ifenabledplugindeactivationwillremoveplugindatathiscannotberestored' => 'Si la désactivation du plugin est activée, les données du plugin seront supprimées, cela ne pourra pas être restauré.',
                        'Scheduledlogmails' => 'Journaux de journal planifiés',
                        'Enabletogetscheduledlogmails' => 'Activer pour obtenir les mails de journal programmés.',
                        'Sendpasswordtouser' => "Envoyer le mot de passe à l'utilisateur",
                        'Enabletosendpasswordinformationthroughemail' => 'Activer pour envoyer les informations de mot de passe par email.',
                        'WoocommerceCustomattribute' => 'Attribut personnalisé Woocommerce',
                        'Enablestoregisterwoocommercecustomattribute' => "Permet d'enregistrer l'attribut personnalisé woocommerce.",
                        'PleasemakesurethatyoutakenecessarybackupbeforeproceedingwithdatabaseoptimizationThedatalostcantbereverted' => 'Assurez-vous d’effectuer la sauvegarde nécessaire avant de procéder à l’optimisation de la base de données. Les données perdues ne peuvent pas être annulées.',
                        'DeleteallorphanedPostPageMeta' => 'Supprimer tous les messages orphelins de page / méta',
                        'Deleteallunassignedtags' => 'Supprimer toutes les balises non attribuées',
                        'DeleteallPostPagerevisions' => 'Supprimer toutes les révisions de publication / page',
                        'DeleteallautodraftedPostPage' => 'Supprimer tous les articles / pages auto-rédigés',
                        'DeleteallPostPageintrash' => 'Supprimer tous les articles / pages dans la corbeille',
                        'DeleteallCommentsintrash' => 'Supprimer tous les commentaires dans la corbeille',
                        'DeleteallUnapprovedComments' => 'Supprimer tous les commentaires non approuvés',
                        'DeleteallPingbackComments' => 'Supprimer tous les commentaires Pingback',
                        'DeleteallTrackbackComments' => 'Supprimer tous les commentaires de trackback',
                        'DeleteallSpamComments' => 'Supprimer tous les commentaires de spam',
                        'RunDBOptimizer' => 'Exécuter DB Optimizer',
                        'DatabaseOptimizationLog' => "Journal d'optimisation de base de données",
                        'noofOrphanedPostPagemetahasbeenremoved' => 'Le nombre de méta de poste / page orphelin a été supprimé.',
                        'noofUnassignedtagshasbeenremoved' => 'Le nombre de tags non affectés a été supprimé.',
                        'noofPostPagerevisionhasbeenremoved' => 'le nombre de révisions de page de publication a été supprimé',
                        'noofAutodraftedPostPagehasbeenremoved' => 'le nombre de messages / pages auto-rédigé a été supprimé',
                        'noofPostPageintrashhasbeenremoved' => 'Le nombre de publications / pages dans la corbeille a été supprimé.',
                        'noofSpamcommentshasbeenremoved' => 'Le nombre de commentaires de spam a été supprimé.',
                        'noofCommentsintrashhasbeenremoved' => 'Le nombre de commentaires dans la corbeille a été supprimé.',
                        'noofUnapprovedcommentshasbeenremoved' => 'Le nombre de commentaires non approuvés a été supprimé.',
                        'noofPingbackcommentshasbeenremoved' => 'Le nombre de commentaires Pingback a été supprimé.',
                        'noofTrackbackcommentshasbeenremoved' => 'nombre de commentaires Trackback a été supprimé.',
                        'Allowauthorseditorstoimport' => 'Autoriser les auteurs / éditeurs à importer',
                        'Thisenablesauthorseditorstoimport' => 'Cela permet aux auteurs / éditeurs d’importer.',
                        'MinimumrequiredphpinivaluesIniconfiguredvalues' => 'Minimum requis php.ini (valeurs configurées Ini)',
                        'Variables' => 'Variables',
                        'SystemValues' => 'Valeurs du système',
                        'MinimumRequirements' => 'Exigences minimales',
                        'RequiredtoenabledisableLoadersExtentionsandmodules' => 'Requis pour activer / désactiver les chargeurs, les extensions et les modules:',
                        'DebugInformation' => 'Informations de débogage:',
                        'SmackcodersGuidelines' => 'Directives de Smackcoders',
                        'DevelopmentNews' => 'Nouvelles sur le développement',
                        'WhatsNew' => 'Quoi de neuf?',
                        'YoutubeChannel' => 'Chaîne Youtube',
                        'OtherWordPressPlugins' => 'Autres plugins WordPress',
                        'Count' => 'Compter',
                        'ImageType' => "Type d'image",
                        'Status' => 'Statut',
                        'Loading' => 'Chargement',
                        'LoveWPUltimateCSVImporterGivea5starreviewon' => 'Love WP Ultimate CSV Importateur, Donnez 5 avis sur',
                        'ContactSupport' => 'Contactez le support',
                        'Email' => 'Email',
                        'Supporttype' => 'Type de support',
                        'BugReporting' => 'Rapport de bogue',
                        'FeatureEnhancement' => 'Amélioration des fonctionnalités',
                        'Message' => 'Message',
                        'Send' => 'Envoyer',
                        'NewsletterSubscription' => 'Inscription à la Newsletter',
                        'Subscribe' => 'Souscrire',
                        'Note' => 'Remarque',
                        'SubscribetoSmackcodersMailinglistafewmessagesayear' => "S'abonner à la liste de diffusion Smackcoders (quelques messages par an)",
                        'Pleasedraftamailto' => "S'il vous plaît rédiger un mail à",
                        'Ifyoudoesnotgetanyacknowledgementwithinanhour' => "Si vous ne recevez aucun accusé de réception dans l'heure qui suit!",
                        'Selectyourmoduletoexportthedata' => 'Sélectionnez votre module pour exporter les données',
                        'Toexportdatabasedonthefilters' => 'Pour exporter des données basées sur les filtres',
                        'ExportFileName' => "Nom du fichier d'exportation",
                        'AdvancedSettings' => 'Réglages avancés',
                        'ExportType' => "Type d'exportation",
                        'SplittheRecord' => 'Fractionner le disque',
                        'AdvancedFilters'=> 'Filtres avancés',
                        'Exportdatawithautodelimiters' => 'Exporter des données avec des délimiteurs automatiques',
                        'Delimiters' => 'Les délimiteurs',
                        'OtherDelimiters' => 'Autres délimiteurs',
                        'Exportdataforthespecificperiod' => 'Exporter les données pour la période spécifique',
                        'StartFrom' => 'Commencer à partir de',
                        'EndTo' => 'Fin à',
                        'Exportdatawiththespecificstatus' => 'Exporter des données avec le statut spécifique',
                        'All' => 'Tout',
                        'Publish' => 'Publier',
                        'Sticky' => 'Gluant',
                        'Private' => 'Privé',
                        'Protected' => 'Protégé',
                        'Draft' => 'Brouillon',
                        'Pending' => 'en attendant',
                        'Exportdatabyspecificauthors' => 'Exporter des données par des auteurs spécifiques',
                        'Authors' => 'Auteurs',
                        'ExportdatabasedonspecificInclusions' => "Exporter des données en fonction d'inclusions spécifiques",
                        'DoyouwanttoSchedulethisExport' => 'Voulez-vous planifier cette exportation',
                        'SelectTimeZone' => 'Sélectionnez TimeZone',
                        'ScheduleExport' => "Calendrier d'exportation",
                        'DataExported' => 'Données exportées',

		        );
                return $response;
        }
}

