<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit929f09571a5cf00b729952671ac7a171
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hummingbird\\Core\\' => 17,
            'Hummingbird\\Admin\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hummingbird\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Hummingbird\\Admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin',
        ),
    );

    public static $classMap = array (
        'Hummingbird\\Admin\\AJAX' => __DIR__ . '/../..' . '/admin/class-ajax.php',
        'Hummingbird\\Admin\\Admin' => __DIR__ . '/../..' . '/admin/class-admin.php',
        'Hummingbird\\Admin\\Ajax\\Gzip' => __DIR__ . '/../..' . '/admin/ajax/class-gzip.php',
        'Hummingbird\\Admin\\Notices' => __DIR__ . '/../..' . '/admin/class-notices.php',
        'Hummingbird\\Admin\\Page' => __DIR__ . '/../..' . '/admin/class-page.php',
        'Hummingbird\\Admin\\Pages\\Advanced' => __DIR__ . '/../..' . '/admin/pages/class-advanced.php',
        'Hummingbird\\Admin\\Pages\\Caching' => __DIR__ . '/../..' . '/admin/pages/class-caching.php',
        'Hummingbird\\Admin\\Pages\\Dashboard' => __DIR__ . '/../..' . '/admin/pages/class-dashboard.php',
        'Hummingbird\\Admin\\Pages\\Minification' => __DIR__ . '/../..' . '/admin/pages/class-minification.php',
        'Hummingbird\\Admin\\Pages\\Performance' => __DIR__ . '/../..' . '/admin/pages/class-performance.php',
        'Hummingbird\\Admin\\Pages\\React\\Gzip' => __DIR__ . '/../..' . '/admin/pages/react/class-gzip.php',
        'Hummingbird\\Admin\\Pages\\Settings' => __DIR__ . '/../..' . '/admin/pages/class-settings.php',
        'Hummingbird\\Admin\\Pages\\Upgrade' => __DIR__ . '/../..' . '/admin/pages/class-upgrade.php',
        'Hummingbird\\Admin\\Pages\\Uptime' => __DIR__ . '/../..' . '/admin/pages/class-uptime.php',
        'Hummingbird\\Core\\Api\\API' => __DIR__ . '/../..' . '/core/api/class-api.php',
        'Hummingbird\\Core\\Api\\Exception' => __DIR__ . '/../..' . '/core/api/class-exception.php',
        'Hummingbird\\Core\\Api\\Hub' => __DIR__ . '/../..' . '/core/api/class-hub.php',
        'Hummingbird\\Core\\Api\\Request\\Cloudflare' => __DIR__ . '/../..' . '/core/api/request/class-cloudflare.php',
        'Hummingbird\\Core\\Api\\Request\\Minify' => __DIR__ . '/../..' . '/core/api/request/class-minify.php',
        'Hummingbird\\Core\\Api\\Request\\Request' => __DIR__ . '/../..' . '/core/api/request/class-request.php',
        'Hummingbird\\Core\\Api\\Request\\Varnish' => __DIR__ . '/../..' . '/core/api/request/class-varnish.php',
        'Hummingbird\\Core\\Api\\Request\\WPMUDEV' => __DIR__ . '/../..' . '/core/api/request/class-wpmudev.php',
        'Hummingbird\\Core\\Api\\Rest' => __DIR__ . '/../..' . '/core/api/class-rest.php',
        'Hummingbird\\Core\\Api\\Service\\Cloudflare' => __DIR__ . '/../..' . '/core/api/service/class-cloudflare.php',
        'Hummingbird\\Core\\Api\\Service\\Minify' => __DIR__ . '/../..' . '/core/api/service/class-minify.php',
        'Hummingbird\\Core\\Api\\Service\\Performance' => __DIR__ . '/../..' . '/core/api/service/class-performance.php',
        'Hummingbird\\Core\\Api\\Service\\Service' => __DIR__ . '/../..' . '/core/api/service/class-service.php',
        'Hummingbird\\Core\\Api\\Service\\Uptime' => __DIR__ . '/../..' . '/core/api/service/class-uptime.php',
        'Hummingbird\\Core\\Api\\Service\\Varnish' => __DIR__ . '/../..' . '/core/api/service/class-varnish.php',
        'Hummingbird\\Core\\Core' => __DIR__ . '/../..' . '/core/class-core.php',
        'Hummingbird\\Core\\Filesystem' => __DIR__ . '/../..' . '/core/class-filesystem.php',
        'Hummingbird\\Core\\Installer' => __DIR__ . '/../..' . '/core/class-installer.php',
        'Hummingbird\\Core\\Integration\\Builders' => __DIR__ . '/../..' . '/core/integration/class-builders.php',
        'Hummingbird\\Core\\Integration\\Divi' => __DIR__ . '/../..' . '/core/integration/class-divi.php',
        'Hummingbird\\Core\\Integration\\Gutenberg' => __DIR__ . '/../..' . '/core/integration/class-gutenberg.php',
        'Hummingbird\\Core\\Integration\\Opcache' => __DIR__ . '/../..' . '/core/integration/class-opcache.php',
        'Hummingbird\\Core\\Integration\\SiteGround' => __DIR__ . '/../..' . '/core/integration/class-siteground.php',
        'Hummingbird\\Core\\Integration\\WPH' => __DIR__ . '/../..' . '/core/integration/class-wph.php',
        'Hummingbird\\Core\\Integration\\Wpengine' => __DIR__ . '/../..' . '/core/integration/class-wpengine.php',
        'Hummingbird\\Core\\Logger' => __DIR__ . '/../..' . '/core/class-logger.php',
        'Hummingbird\\Core\\Module' => __DIR__ . '/../..' . '/core/class-module.php',
        'Hummingbird\\Core\\Module_Server' => __DIR__ . '/../..' . '/core/class-module-server.php',
        'Hummingbird\\Core\\Modules\\Advanced' => __DIR__ . '/../..' . '/core/modules/class-advanced.php',
        'Hummingbird\\Core\\Modules\\Caching' => __DIR__ . '/../..' . '/core/modules/class-caching.php',
        'Hummingbird\\Core\\Modules\\Caching\\Async_Request' => __DIR__ . '/../..' . '/core/modules/caching/class-async-request.php',
        'Hummingbird\\Core\\Modules\\Caching\\Background_Process' => __DIR__ . '/../..' . '/core/modules/caching/class-background-process.php',
        'Hummingbird\\Core\\Modules\\Caching\\Preload' => __DIR__ . '/../..' . '/core/modules/caching/class-preload.php',
        'Hummingbird\\Core\\Modules\\Cloudflare' => __DIR__ . '/../..' . '/core/modules/class-cloudflare.php',
        'Hummingbird\\Core\\Modules\\Gravatar' => __DIR__ . '/../..' . '/core/modules/class-gravatar.php',
        'Hummingbird\\Core\\Modules\\Gzip' => __DIR__ . '/../..' . '/core/modules/class-gzip.php',
        'Hummingbird\\Core\\Modules\\Minify' => __DIR__ . '/../..' . '/core/modules/class-minify.php',
        'Hummingbird\\Core\\Modules\\Minify\\Errors_Controller' => __DIR__ . '/../..' . '/core/modules/minify/class-errors-controller.php',
        'Hummingbird\\Core\\Modules\\Minify\\Housekeeper' => __DIR__ . '/../..' . '/core/modules/minify/class-housekeeper.php',
        'Hummingbird\\Core\\Modules\\Minify\\Minify_Group' => __DIR__ . '/../..' . '/core/modules/minify/class-minify-group.php',
        'Hummingbird\\Core\\Modules\\Minify\\Minify_Groups_List' => __DIR__ . '/../..' . '/core/modules/minify/class-minify-groups-list.php',
        'Hummingbird\\Core\\Modules\\Minify\\Scanner' => __DIR__ . '/../..' . '/core/modules/minify/class-scanner.php',
        'Hummingbird\\Core\\Modules\\Minify\\Sources_Collector' => __DIR__ . '/../..' . '/core/modules/minify/class-sources-collector.php',
        'Hummingbird\\Core\\Modules\\Minify\\URI_Rewriter' => __DIR__ . '/../..' . '/core/modules/minify/class-uri-rewriter.php',
        'Hummingbird\\Core\\Modules\\Page_Cache' => __DIR__ . '/../..' . '/core/modules/class-page-cache.php',
        'Hummingbird\\Core\\Modules\\Performance' => __DIR__ . '/../..' . '/core/modules/class-performance.php',
        'Hummingbird\\Core\\Modules\\Rss' => __DIR__ . '/../..' . '/core/modules/class-rss.php',
        'Hummingbird\\Core\\Modules\\Uptime' => __DIR__ . '/../..' . '/core/modules/class-uptime.php',
        'Hummingbird\\Core\\Pro\\Admin\\Pro_Admin' => __DIR__ . '/../..' . '/core/pro/admin/class-pro-admin.php',
        'Hummingbird\\Core\\Pro\\Modules\\Cleanup_Cron' => __DIR__ . '/../..' . '/core/pro/modules/class-cleanup-cron.php',
        'Hummingbird\\Core\\Pro\\Modules\\Reporting_Cron' => __DIR__ . '/../..' . '/core/pro/modules/class-reporting-cron.php',
        'Hummingbird\\Core\\Pro\\Modules\\Reports' => __DIR__ . '/../..' . '/core/pro/modules/class-reports.php',
        'Hummingbird\\Core\\Pro\\Modules\\Uptime_Reports' => __DIR__ . '/../..' . '/core/pro/modules/class-uptime-reports.php',
        'Hummingbird\\Core\\Pro\\Pro' => __DIR__ . '/../..' . '/core/pro/class-pro.php',
        'Hummingbird\\Core\\Pro\\Pro_AJAX' => __DIR__ . '/../..' . '/core/pro/class-pro-ajax.php',
        'Hummingbird\\Core\\Settings' => __DIR__ . '/../..' . '/core/class-settings.php',
        'Hummingbird\\Core\\Traits\\Smush' => __DIR__ . '/../..' . '/core/traits/trait-smush.php',
        'Hummingbird\\Core\\Utils' => __DIR__ . '/../..' . '/core/class-utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit929f09571a5cf00b729952671ac7a171::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit929f09571a5cf00b729952671ac7a171::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit929f09571a5cf00b729952671ac7a171::$classMap;

        }, null, ClassLoader::class);
    }
}
