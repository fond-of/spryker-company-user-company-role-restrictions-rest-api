<?php

namespace FondOfSpryker\Glue\CompanyUserCompanyRoleRestrictionsRestApi;

use FondOfSpryker\Shared\CompanyUserCompanyTypeRolesRestApi\CompanyUserCompanyTypeRolesRestApiConstants;
use Spryker\Glue\Kernel\AbstractBundleConfig;

class CompanyUserCompanyRoleRestrictionsRestApiConfig extends AbstractBundleConfig
{
    /**
     * @param string $companyType
     *
     * @return array
     */
    public function getCompanyRolesTree(string $companyRole = ''): array
    {
        $companyRoles = $this->get(CompanyUserCompanyTypeRolesRestApiConstants::VALID_COMPANY_TYPE_COMPANY_ROLES_FOR_SEARCH_LIST, []);

        if ($companyRole === '') {
            return $companyRoles;
        }

        if (!isset($companyRoles[$companyType])) {
            return [];
        }

        return $companyRoles[$companyType];
    }
}
