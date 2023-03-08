<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Command;

use Swaggest\ShopwareSdk\Context;
use Swaggest\ShopwareSdk\Internal\HeaderProvider;
use Swaggest\ShopwareSdk\Internal\ProviderFactory;
use Swaggest\ShopwareSdk\Internal\ShopwareClient;
use Swaggest\ShopwareSdk\Service\InfoService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

final class FetchSchemaCommand extends Command
{
    protected static $defaultName = 'shopware-app-sdk:fetch-schema';

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $clientId = $input->getOption('client-id');
        $clientSecret = $input->getOption('client-secret');
        $url = $input->getOption('url');

        $context = new Context(
            $clientId,
            $clientSecret,
            $url
        );

        $providerFactory = new ProviderFactory();
        $provider = $providerFactory->create($context);

        $client = new ShopwareClient($provider, new HeaderProvider());

        $infoService = new InfoService($client);

        $output = $input->getOption('output');

        if (false === \file_put_contents($output, $infoService->getEntitySchema($context))) {
            return 1;
        }

        return 0;
    }

    protected function configure(): void
    {
        $this
            ->setHelp('Fetch Shopware API entity schema')
            ->addOption('client-id', null, InputOption::VALUE_REQUIRED, 'Client ID')
            ->addOption('client-secret', null, InputOption::VALUE_REQUIRED, 'Client secret')
            ->addOption('url', null, InputOption::VALUE_OPTIONAL, 'URL', 'http://localhost:8000')
            ->addOption('output', null, InputOption::VALUE_OPTIONAL, 'Output file', __DIR__ . '/../Resources/entity-schema.json');
    }
}
