<?php

namespace MarcoGuidara\QuickResponseCache\Abstracts;

abstract class EventAbstract
{
    public const ELOQUENT = [
        'created',
        'updated',
        'deleted',
        'pivotAttached',
        'pivotDetached',
        'pivotUpdated',
    ];

    public const SOFT_DELETE = [
        'restored',
        'forceDeleted',
    ];
}
