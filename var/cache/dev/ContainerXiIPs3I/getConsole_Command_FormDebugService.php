<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\Command\\DebugCommand.php';

$this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->load('getForm_RegistryService.php')), array(0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 2 => 'Sonata\\BlockBundle\\Form\\Type', 3 => 'Sonata\\AdminBundle\\Form\\Type', 4 => 'Sonata\\AdminBundle\\Form\\Type\\Filter', 5 => 'Sonata\\CoreBundle\\Form\\Type'), array(0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 1 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 3 => 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType', 4 => 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType', 5 => 'Sonata\\AdminBundle\\Form\\Type\\AdminType', 6 => 'Sonata\\AdminBundle\\Form\\Type\\ModelType', 7 => 'Sonata\\AdminBundle\\Form\\Type\\ModelListType', 8 => 'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType', 9 => 'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType', 10 => 'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType', 11 => 'Sonata\\AdminBundle\\Form\\Type\\CollectionType', 12 => 'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType', 13 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType', 14 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType', 15 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType', 16 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType', 17 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType', 18 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType', 19 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType', 20 => 'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType', 21 => 'Sonata\\CoreBundle\\Form\\Type\\BooleanType', 22 => 'Sonata\\CoreBundle\\Form\\Type\\CollectionType', 23 => 'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType', 24 => 'Sonata\\CoreBundle\\Form\\Type\\DateRangeType', 25 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType', 26 => 'Sonata\\CoreBundle\\Form\\Type\\DatePickerType', 27 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType', 28 => 'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType', 29 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType', 30 => 'Sonata\\CoreBundle\\Form\\Type\\EqualType', 31 => 'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType', 32 => 'Sonata\\CoreBundle\\Form\\Type\\ColorType'), array(0 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 1 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 6 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 7 => 'Sonata\\AdminBundle\\Form\\Extension\\Field\\Type\\FormTypeFieldExtension', 8 => 'Sonata\\AdminBundle\\Form\\Extension\\Field\\Type\\MopaCompatibilityTypeFieldExtension', 9 => 'Sonata\\AdminBundle\\Form\\Extension\\ChoiceTypeExtension'), array(0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'));

$instance->setName('debug:form');

return $instance;