<?php

namespace ContainerNTMSer1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_RegistryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Form\\ActionType' => ['privates', 'App\\Form\\ActionType', 'getActionTypeService', true],
            'App\\Form\\ActiviteProfessionnelleType' => ['privates', 'App\\Form\\ActiviteProfessionnelleType', 'getActiviteProfessionnelleTypeService', true],
            'App\\Form\\BesoinVitalRepasType' => ['privates', 'App\\Form\\BesoinVitalRepasType', 'getBesoinVitalRepasTypeService', true],
            'App\\Form\\BesoinVitalType' => ['privates', 'App\\Form\\BesoinVitalType', 'getBesoinVitalTypeService', true],
            'App\\Form\\CalendrierChosesAFaireType' => ['privates', 'App\\Form\\CalendrierChosesAFaireType', 'getCalendrierChosesAFaireTypeService', true],
            'App\\Form\\CalendrierEvenementType' => ['privates', 'App\\Form\\CalendrierEvenementType', 'getCalendrierEvenementTypeService', true],
            'App\\Form\\CalendrierTelType' => ['privates', 'App\\Form\\CalendrierTelType', 'getCalendrierTelTypeService', true],
            'App\\Form\\FondUrgenceType' => ['privates', 'App\\Form\\FondUrgenceType', 'getFondUrgenceTypeService', true],
            'App\\Form\\JournalierRendezVousType' => ['privates', 'App\\Form\\JournalierRendezVousType', 'getJournalierRendezVousTypeService', true],
            'App\\Form\\JournalierType' => ['privates', 'App\\Form\\JournalierType', 'getJournalierTypeService', true],
            'App\\Form\\MesLiensSociauxType' => ['privates', 'App\\Form\\MesLiensSociauxType', 'getMesLiensSociauxTypeService', true],
            'App\\Form\\MesLoisirsType' => ['privates', 'App\\Form\\MesLoisirsType', 'getMesLoisirsTypeService', true],
            'App\\Form\\MesRevenusType' => ['privates', 'App\\Form\\MesRevenusType', 'getMesRevenusTypeService', true],
            'App\\Form\\NotesType' => ['privates', 'App\\Form\\NotesType', 'getNotesTypeService', true],
            'App\\Form\\ObjectifFinanceLoisirType' => ['privates', 'App\\Form\\ObjectifFinanceLoisirType', 'getObjectifFinanceLoisirTypeService', true],
            'App\\Form\\ObjectifType' => ['privates', 'App\\Form\\ObjectifType', 'getObjectifTypeService', true],
            'App\\Form\\ObligationFamilialeType' => ['privates', 'App\\Form\\ObligationFamilialeType', 'getObligationFamilialeTypeService', true],
            'App\\Form\\ObligationMetierType' => ['privates', 'App\\Form\\ObligationMetierType', 'getObligationMetierTypeService', true],
            'App\\Form\\ObligationTempoType' => ['privates', 'App\\Form\\ObligationTempoType', 'getObligationTempoTypeService', true],
            'App\\Form\\ObligationType' => ['privates', 'App\\Form\\ObligationType', 'getObligationTypeService', true],
            'App\\Form\\PlanActionType' => ['privates', 'App\\Form\\PlanActionType', 'getPlanActionTypeService', true],
            'App\\Form\\RegistrationFormType' => ['privates', 'App\\Form\\RegistrationFormType', 'getRegistrationFormTypeService', true],
            'App\\Form\\RendezVousType' => ['privates', 'App\\Form\\RendezVousType', 'getRendezVousTypeService', true],
            'App\\Form\\ReportTaskType' => ['privates', 'App\\Form\\ReportTaskType', 'getReportTaskTypeService', true],
            'App\\Form\\RoutineTravailType' => ['privates', 'App\\Form\\RoutineTravailType', 'getRoutineTravailTypeService', true],
            'App\\Form\\ToDoListType' => ['privates', 'App\\Form\\ToDoListType', 'getToDoListTypeService', true],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType', 'getCrudFormTypeService', true],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType', 'getFileUploadTypeService', true],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType', 'getFiltersFormTypeService', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => ['privates', 'form.type.color', 'getForm_Type_ColorService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['privates', 'form.type.file', 'getForm_Type_FileService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', true],
        ], [
            'App\\Form\\ActionType' => '?',
            'App\\Form\\ActiviteProfessionnelleType' => '?',
            'App\\Form\\BesoinVitalRepasType' => '?',
            'App\\Form\\BesoinVitalType' => '?',
            'App\\Form\\CalendrierChosesAFaireType' => '?',
            'App\\Form\\CalendrierEvenementType' => '?',
            'App\\Form\\CalendrierTelType' => '?',
            'App\\Form\\FondUrgenceType' => '?',
            'App\\Form\\JournalierRendezVousType' => '?',
            'App\\Form\\JournalierType' => '?',
            'App\\Form\\MesLiensSociauxType' => '?',
            'App\\Form\\MesLoisirsType' => '?',
            'App\\Form\\MesRevenusType' => '?',
            'App\\Form\\NotesType' => '?',
            'App\\Form\\ObjectifFinanceLoisirType' => '?',
            'App\\Form\\ObjectifType' => '?',
            'App\\Form\\ObligationFamilialeType' => '?',
            'App\\Form\\ObligationMetierType' => '?',
            'App\\Form\\ObligationTempoType' => '?',
            'App\\Form\\ObligationType' => '?',
            'App\\Form\\PlanActionType' => '?',
            'App\\Form\\RegistrationFormType' => '?',
            'App\\Form\\RendezVousType' => '?',
            'App\\Form\\ReportTaskType' => '?',
            'App\\Form\\RoutineTravailType' => '?',
            'App\\Form\\ToDoListType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.form.transformation_failure_handling'] ?? $container->load('getForm_TypeExtension_Form_TransformationFailureHandlingService'));
            yield 1 => ($container->privates['form.type_extension.form.http_foundation'] ?? $container->load('getForm_TypeExtension_Form_HttpFoundationService'));
            yield 2 => ($container->privates['form.type_extension.form.validator'] ?? $container->load('getForm_TypeExtension_Form_ValidatorService'));
            yield 3 => ($container->privates['form.type_extension.upload.validator'] ?? $container->load('getForm_TypeExtension_Upload_ValidatorService'));
            yield 4 => ($container->privates['form.type_extension.csrf'] ?? $container->load('getForm_TypeExtension_CsrfService'));
            yield 5 => ($container->privates['form.type_extension.form.password_hasher'] ?? $container->load('getForm_TypeExtension_Form_PasswordHasherService'));
            yield 6 => ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EaCrudFormTypeExtension'] ?? $container->load('getEaCrudFormTypeExtensionService'));
        }, 7), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.repeated.validator'] ??= new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension());
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.submit.validator'] ??= new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension());
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.password.password_hasher'] ?? $container->load('getForm_TypeExtension_Password_PasswordHasherService'));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\CollectionTypeExtension'] ??= new \EasyCorp\Bundle\EasyAdminBundle\Form\Extension\CollectionTypeExtension());
        }, 1)], new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_guesser.validator'] ?? $container->load('getForm_TypeGuesser_ValidatorService'));
            yield 1 => ($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService'));
        }, 2))], new \Symfony\Component\Form\ResolvedFormTypeFactory());
    }
}
