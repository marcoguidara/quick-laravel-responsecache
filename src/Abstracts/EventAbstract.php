<?php

namespace MarcoGuidara\QuickResponseCache\Abstracts;

abstract class EventAbstract
{
    public const ALLOWED = [
        'created',
        'updated',
        'deleted',
        // 'restored',
        // 'forceDeleted',
        'pivotAttached',
        'pivotDetached',
        'pivotUpdated',
    ];
}
