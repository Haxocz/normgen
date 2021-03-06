<?php

namespace Minetro\Normgen\Resolver;

use Minetro\Normgen\Entity\Table;

interface IMapperResolver extends IFilenameResolver
{

    /**
     * @param Table $table
     * @return string
     */
    function resolveMapperFilename(Table $table);

    /**
     * @param Table $table
     * @return string
     */
    function resolveMapperNamespace(Table $table);

    /**
     * @param Table $table
     * @return string
     */
    function resolveMapperName(Table $table);
}