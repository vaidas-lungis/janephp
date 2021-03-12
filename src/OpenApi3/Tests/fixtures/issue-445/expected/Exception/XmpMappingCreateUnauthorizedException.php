<?php

namespace PicturePark\API\Exception;

class XmpMappingCreateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}