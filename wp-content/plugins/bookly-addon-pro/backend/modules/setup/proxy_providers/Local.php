<?php
namespace BooklyPro\Backend\Modules\Setup\ProxyProviders;

use Bookly\Backend\Modules\Setup\Proxy;

class Local extends Proxy\Pro
{
    /**
     * @inheritDoc
     */
    public static function prepareOptions( $options )
    {
        $options['l10n']['add_staff'] = __( 'Add staff', 'bookly' );

        return $options;
    }
}