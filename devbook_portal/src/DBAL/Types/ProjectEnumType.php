<?php
namespace App\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class ProjectEnumType extends AbstractEnumType
{
    public const DESKTOP = 'DESKTOP';
    public const MOBILE = 'MOBILE';
    public const GAME = 'GAMES';
    public const WEB = 'WEB';
    public const RD = 'R&D';

    protected static $choices = [
        self::DESKTOP => 'DESKTOP',
        self::MOBILE => 'MOBILE',
        self::GAME => 'GAMES',
        self::WEB => 'WEB',
        self::RD => 'R&D'
    ];
}
?>