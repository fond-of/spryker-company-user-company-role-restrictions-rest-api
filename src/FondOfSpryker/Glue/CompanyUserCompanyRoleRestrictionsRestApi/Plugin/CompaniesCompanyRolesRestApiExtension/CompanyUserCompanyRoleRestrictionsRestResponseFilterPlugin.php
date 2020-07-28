<?php

namespace FondOfSpryker\Glue\CompanyUserCompanyRoleRestrictionsRestApi\Plugin\CompaniesCompanyRolesRestApiExtension;

use FondOfSpryker\Glue\CompaniesCompanyRolesRestApiExtension\Dependency\Plugin\CompaniesCompanyRolesRestResponseFilterPluginInterface;
use FondOfSpryker\Glue\CompaniesCompanyUsersRestApiExtension\Dependency\Plugin\CompanyCompanyUserSearchValidatorPluginInterface;
use Generated\Shared\Transfer\CompanyUserTransfer;
use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface;
use Spryker\Glue\Kernel\AbstractPlugin;

/**
 * @method \FondOfSpryker\Glue\CompanyUserCompanyTypeRolesRestApi\CompanyUserCompanyTypeRolesRestApiFactory getFactory()
 */
class CompanyUserCompanyRoleRestrictionsRestResponseFilterPlugin extends AbstractPlugin implements CompaniesCompanyRolesRestResponseFilterPluginInterface
{
    /**
     * @inheritDoc
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyUserTransfer $companyUserTransfer
     *
     * @return bool
     */
    public function filter(RestResponseInterface $restResponse): bool
    {
        return $this->getFactory()->createCompanyUserCompanyTypeRoleSearchValidator()->validate($companyUserTransfer);
    }
}
