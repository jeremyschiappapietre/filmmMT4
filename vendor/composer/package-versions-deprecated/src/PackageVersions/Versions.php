<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.2@c6522afe5540d5fc46675043d3ed5a45a740b27c',
  'doctrine/annotations' => '1.13.1@e6e7b7d5b45a2f2abc5460cc6396480b2b1d321f',
  'doctrine/cache' => '1.11.3@3bb5588cec00a0268829cc4a518490df6741af9d',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.2@a036d90c303f3163b5be8b8fde9b6755b2be4a3a',
  'doctrine/dbal' => '2.13.1@c800380457948e65bbd30ba92cc17cda108bf8c9',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.3.2@d6b3c37804539a24ba8a7d647a6144cab2f13242',
  'doctrine/doctrine-migrations-bundle' => '3.1.1@91f0a5e2356029575f3038432cc188b12f9d5da5',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.1.2@1c2780df6b58998f411e64973cfa464ba0a06e00',
  'doctrine/orm' => '2.9.1@f3e55fae9fdbdbc23897006bdbf016c20e11f6e9',
  'doctrine/persistence' => '2.2.1@d138f3ab5f761055cab1054070377cfd3222e368',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'knplabs/knp-components' => 'v3.4.0@d990ef101bab58a078b6eb7250e57f5c68af5604',
  'knplabs/knp-paginator-bundle' => 'v5.8.0@216b9d5708001788321916c5b7632da9fb9ef6ca',
  'laminas/laminas-code' => '4.3.0@1beb4447f9efd26041eba7eff50614e798c353fd',
  'laminas/laminas-eventmanager' => '3.3.1@966c859b67867b179fde1eff0cd38df51472ce4a',
  'laminas/laminas-zendframework-bridge' => '1.2.0@6cccbddfcfc742eb02158d6137ca5687d92cee32',
  'nikic/php-parser' => 'v4.10.5@4432ba399e47c66624bc73c8c0f811e5c109576f',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'sensio/framework-extra-bundle' => 'v6.2.6@6bd976c99ef3f78e31c9490a10ba6dd8901076eb',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/cache' => 'v4.4.24@9084b7312c3de1e6d621d60e00c5d42a4b77cfee',
  'symfony/cache-contracts' => 'v2.4.0@c0446463729b89dd4fa62e9aeecc80287323615d',
  'symfony/config' => 'v4.4.23@be9e601f17fc684ddfd6c675fdfcd04bb51fa928',
  'symfony/console' => 'v4.4.24@1b15ca1b1bedda86f98064da9ff5d800560d4c6d',
  'symfony/debug' => 'v4.4.22@45b2136377cca5f10af858968d6079a482bca473',
  'symfony/dependency-injection' => 'v4.4.24@8422396fb0b477ecbbe130907f90a0809b49c835',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/doctrine-bridge' => 'v4.4.24@3ed56b83120af2bdba31161b2ccc67a70d700a06',
  'symfony/dotenv' => 'v4.4.20@4952e5ce9e6df3d737b9e9c337bddf781180a213',
  'symfony/error-handler' => 'v4.4.23@21d75bfbdfdd3581a7f97080deb98926987f14a7',
  'symfony/event-dispatcher' => 'v4.4.20@c352647244bd376bf7d31efbd5401f13f50dad0c',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/filesystem' => 'v4.4.22@f0f06656a18304cdeacb2c4c0113a2b78a2b4c2a',
  'symfony/finder' => 'v4.4.24@a96bc19ed87c88eec78e1a4c803bdc1446952983',
  'symfony/flex' => 'v1.13.3@2597d0dda8042c43eed44a9cd07236b897e427d7',
  'symfony/form' => 'v4.4.37@e2d3b99a247e71dc3e3ff82c39ae6d5883dcd967',
  'symfony/framework-bundle' => 'v4.4.24@0e9b5cec25fb3de04fb51d8ec05eb35df1385096',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v4.4.23@2ffb43bd6c589a274ee1e93a5fd6b7ef1577b9c5',
  'symfony/http-kernel' => 'v4.4.24@59925ee79f2541b4c6e990843e1a42768e898254',
  'symfony/inflector' => 'v4.4.23@89dc6b7d1143c114e7e251ab965f4a751bfe7ad5',
  'symfony/intl' => 'v4.4.37@98e367e79b52962bca3c87b5469b3d08b295f3e1',
  'symfony/maker-bundle' => 'v1.31.1@4f57a44cef0b4555043160b8bf223fcde8a7a59a',
  'symfony/mime' => 'v4.4.24@7e8e9192500d0bae9f6aff60c842befc7d887b68',
  'symfony/options-resolver' => 'v4.4.37@41d1e741a292574887629369400820c9645e8a87',
  'symfony/polyfill-intl-icu' => 'v1.24.0@c023a439b8551e320cc3c8433b198e408a623af1',
  'symfony/polyfill-intl-idn' => 'v1.22.1@2d63434d922daf7da8dd863e7907e67ee3031483',
  'symfony/polyfill-intl-normalizer' => 'v1.22.1@43a0283138253ed1d48d352ab6d0bdb3f809f248',
  'symfony/polyfill-mbstring' => 'v1.22.1@5232de97ee3b75b0360528dae24e73db49566ab1',
  'symfony/polyfill-php72' => 'v1.22.1@cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9',
  'symfony/polyfill-php73' => 'v1.22.1@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.1@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/property-access' => 'v4.4.20@94a1d9837396c71a0d8c31686c16693a15651622',
  'symfony/proxy-manager-bridge' => 'v4.4.24@4f1a76bca5c9a0159f7cee17d25c77917b0580b1',
  'symfony/routing' => 'v4.4.24@b42c3631fd9e3511610afb2ba081ea7e38d9fa38',
  'symfony/security-bundle' => 'v4.4.23@a2416b9d4a6c1c8c4b162a9c84c60210fdda5b72',
  'symfony/security-core' => 'v4.4.24@c8b37f1583138cc53edbefe81f0fa274f548129c',
  'symfony/security-csrf' => 'v4.4.22@77289cc6cfe25113b4e7c780fa98e0d39a552eeb',
  'symfony/security-guard' => 'v4.4.23@d0326e1c4a833c9df598d08e1496cb6d79a443f3',
  'symfony/security-http' => 'v4.4.24@3d259bd550b2f059ee4666213d779fe9925bbc9b',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/stopwatch' => 'v4.4.20@c5572f6494fc20668a73b77684d8dc77e534d8cf',
  'symfony/translation' => 'v4.4.37@4ce00d6875230b839f5feef82e51971f6c886e00',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/twig-bridge' => 'v4.4.22@48b4ae9cf1b42d37710ea5857770c13f0b9d5579',
  'symfony/twig-bundle' => 'v4.4.24@9847d8e991f2afc2a1b3d8044017cf1656198684',
  'symfony/validator' => 'v4.4.37@e0af98b98085ed5307d0b85862763ef48b8d0220',
  'symfony/var-dumper' => 'v4.4.22@c194bcedde6295f3ec3e9eba1f5d484ea97c41a7',
  'symfony/var-exporter' => 'v4.4.23@11439b8e3264502293bd5e5ecd6957f70319f526',
  'symfony/web-profiler-bundle' => 'v4.4.23@ef4101cbc316b4514b480b8e84e96719f848c282',
  'symfony/yaml' => 'v4.4.24@8b6d1b97521e2f125039b3fcb4747584c6dfa0ef',
  'twig/twig' => 'v3.3.2@21578f00e83d4a82ecfa3d50752b609f13de6790',
  'paragonie/random_compat' => '2.*@9d7b190675e90538b15b45c51120939ff5042a61',
  'symfony/polyfill-ctype' => '*@9d7b190675e90538b15b45c51120939ff5042a61',
  'symfony/polyfill-iconv' => '*@9d7b190675e90538b15b45c51120939ff5042a61',
  'symfony/polyfill-php71' => '*@9d7b190675e90538b15b45c51120939ff5042a61',
  'symfony/polyfill-php70' => '*@9d7b190675e90538b15b45c51120939ff5042a61',
  'symfony/polyfill-php56' => '*@9d7b190675e90538b15b45c51120939ff5042a61',
  '__root__' => 'dev-main@9d7b190675e90538b15b45c51120939ff5042a61',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !(method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && (method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
