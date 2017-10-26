<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/8
 */

namespace Narmafzam\ArchiveBundle\DependencyInjection;

use Narmafzam\ArchiveBundle\Controller\Back\ContractController as BackContractController;
use Narmafzam\ArchiveBundle\Controller\Back\DocumentController as BackDocumentController;
use Narmafzam\ArchiveBundle\Controller\Back\LetterController as BackLetterController;
use Narmafzam\ArchiveBundle\Controller\Front\ContractController as FrontContractController;
use Narmafzam\ArchiveBundle\Controller\Front\DocumentController as FrontDocumentController;
use Narmafzam\ArchiveBundle\Controller\Front\LetterController as FrontLetterController;
use Narmafzam\ArchiveBundle\Form\Common\ContractAttachmentType;
use Narmafzam\ArchiveBundle\Form\Common\Type\ContractCommonLineChoicesType;
use Narmafzam\ArchiveBundle\Form\Common\ContractType;
use Narmafzam\ArchiveBundle\Form\Common\DocumentAttachmentType;
use Narmafzam\ArchiveBundle\Form\Common\DocumentType;
use Narmafzam\ArchiveBundle\Form\Common\LetterAttachmentType;
use Narmafzam\ArchiveBundle\Form\Common\LetterType;
use Narmafzam\ArchiveBundle\Form\Common\Type\ContractChoiceType;
use Narmafzam\ArchiveBundle\Form\Common\Type\ContractLineChoicesType;
use Narmafzam\ArchiveBundle\Form\Common\Type\ContractLineKindChoicesType;
use Narmafzam\ArchiveBundle\Form\Common\Type\ContractLineKindChoiceType;
use Narmafzam\ArchiveBundle\Form\Common\Type\ContractTemplateChoicesType;
use Narmafzam\ArchiveBundle\Form\Common\Type\ContractTemplateChoiceType;
use Narmafzam\ArchiveBundle\Model\Handler\ContractHandler;
use Narmafzam\ArchiveBundle\Model\Handler\DocumentHandler;
use Narmafzam\ArchiveBundle\Model\Handler\LetterHandler;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

class NarmafzamArchiveExtension extends ConfigurableExtension implements ExtensionInterface
{
    protected function loadInternal(array $mergedConfig, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(dirname(__DIR__ ) . '/Resources/config'));
        $loader->load('services.yml');

        // Contract

        if ($mergedConfig['contract']['entity']) {

            $def = $container->getDefinition(ContractHandler::class);
            $def->replaceArgument('$dataClass', $mergedConfig['contract']['entity']);

            $def = $container->getDefinition(ContractType::class);
            $def->replaceArgument('$dataClass', $mergedConfig['contract']['entity']);

            $def = $container->getDefinition(ContractChoiceType::class);
            $def->replaceArgument('$dataClass', $mergedConfig['contract']['entity']);

            $def = $container->getDefinition(BackContractController::class);
            $def->replaceArgument('$dataClass', $mergedConfig['contract']['entity']);

            $def = $container->getDefinition(FrontContractController::class);
            $def->replaceArgument('$dataClass', $mergedConfig['contract']['entity']);
        }

        if ($mergedConfig['contract']['form']['back']) {

            $def = $container->getDefinition(BackContractController::class);
            $def->replaceArgument('$formTypeClass', $mergedConfig['contract']['form']['back']);
        }

        if ($mergedConfig['contract']['form']['front']) {

            $def = $container->getDefinition(FrontContractController::class);
            $def->replaceArgument('$formTypeClass', $mergedConfig['contract']['form']['front']);
        }

        // ContractAttachment

        if ($mergedConfig['contract']['attachment']['entity']) {

            $def = $container->getDefinition(ContractAttachmentType::class);
            $def->replaceArgument('$dataClass', $mergedConfig['contract']['attachment']['entity']);
        }

        // ContractCommonLine

        if ($mergedConfig['contract']['common_line']['entity']) {

            $def = $container->getDefinition(ContractCommonLineChoicesType::class);
            $def->replaceArgument('$dataClass', $mergedConfig['contract']['common_line']['entity']);
        }

        // ContractLine

        if ($mergedConfig['contract']['line']['entity']) {

            $def = $container->getDefinition(ContractLineChoicesType::class);
            $def->replaceArgument('$dataClass', $mergedConfig['contract']['line']['entity']);
        }

        // ContractLineKind

        if ($mergedConfig['contract']['line_kind']['entity']) {

            $def = $container->getDefinition(ContractLineKindChoiceType::class);
            $def->replaceArgument('$dataClass', $mergedConfig['contract']['line_kind']['entity']);

            $def = $container->getDefinition(ContractLineKindChoicesType::class);
            $def->replaceArgument('$dataClass', $mergedConfig['contract']['line_kind']['entity']);
        }

        // ContractTemplate

        if ($mergedConfig['contract']['line_kind']['entity']) {

            $def = $container->getDefinition(ContractTemplateChoicesType::class);
            $def->replaceArgument('$dataClass', $mergedConfig['contract']['template']['entity']);

            $def = $container->getDefinition(ContractTemplateChoiceType::class);
            $def->replaceArgument('$dataClass', $mergedConfig['contract']['template']['entity']);
        }

        // Document

        if ($mergedConfig['document']['entity']) {

            $def = $container->getDefinition(DocumentHandler::class);
            $def->replaceArgument('$dataClass', $mergedConfig['document']['entity']);

            $def = $container->getDefinition(DocumentType::class);
            $def->replaceArgument('$dataClass', $mergedConfig['document']['entity']);

            $def = $container->getDefinition(BackDocumentController::class);
            $def->replaceArgument('$dataClass', $mergedConfig['document']['entity']);

            $def = $container->getDefinition(FrontDocumentController::class);
            $def->replaceArgument('$dataClass', $mergedConfig['document']['entity']);
        }

        if ($mergedConfig['document']['form']['back']) {

            $def = $container->getDefinition(BackDocumentController::class);
            $def->replaceArgument('$formTypeClass', $mergedConfig['document']['form']['back']);
        }

        if ($mergedConfig['document']['form']['front']) {

            $def = $container->getDefinition(FrontDocumentController::class);
            $def->replaceArgument('$formTypeClass', $mergedConfig['document']['form']['front']);
        }

        // DocumentAttachment

        if ($mergedConfig['document']['attachment']['entity']) {

            $def = $container->getDefinition(DocumentAttachmentType::class);
            $def->replaceArgument('$dataClass', $mergedConfig['document']['attachment']['entity']);
        }

        // Letter

        if ($mergedConfig['letter']['entity']) {

            $def = $container->getDefinition(LetterHandler::class);
            $def->replaceArgument('$dataClass', $mergedConfig['letter']['entity']);

            $def = $container->getDefinition(LetterType::class);
            $def->replaceArgument('$dataClass', $mergedConfig['letter']['entity']);

            $def = $container->getDefinition(BackLetterController::class);
            $def->replaceArgument('$dataClass', $mergedConfig['letter']['entity']);

            $def = $container->getDefinition(FrontLetterController::class);
            $def->replaceArgument('$dataClass', $mergedConfig['letter']['entity']);
        }

        if ($mergedConfig['letter']['form']['back']) {

            $def = $container->getDefinition(BackLetterController::class);
            $def->replaceArgument('$formTypeClass', $mergedConfig['letter']['form']['back']);
        }

        if ($mergedConfig['letter']['form']['front']) {

            $def = $container->getDefinition(FrontLetterController::class);
            $def->replaceArgument('$formTypeClass', $mergedConfig['letter']['form']['front']);
        }

        // LetterAttachment

        if ($mergedConfig['letter']['attachment']['entity']) {

            $def = $container->getDefinition(LetterAttachmentType::class);
            $def->replaceArgument('$dataClass', $mergedConfig['letter']['attachment']['entity']);
        }

    }
}