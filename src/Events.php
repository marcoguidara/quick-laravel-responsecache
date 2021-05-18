<?php

abstract class Events
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
