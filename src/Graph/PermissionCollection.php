<?php


namespace Office365\Graph;


use Office365\Runtime\ClientRuntimeContext;
use Office365\Runtime\ResourcePath;

class PermissionCollection extends EntityCollection
{

    public function __construct(ClientRuntimeContext $ctx, ResourcePath $resourcePath = null)
    {
        parent::__construct($ctx, $resourcePath, Permission::class);
    }

}