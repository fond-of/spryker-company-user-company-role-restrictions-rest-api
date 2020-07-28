<?php

namespace FondOfSpryker\Glue\CompanyUserCompanyRoleRestrictionsRestApi;

use FondOfSpryker\Glue\CompanyUserCompanyTypeRolesRestApi\Dependency\Client\CompanyUserCompanyTypeRolesRestApiToCompanyClientInterface;
use FondOfSpryker\Glue\CompanyUserCompanyTypeRolesRestApi\Dependency\Client\CompanyUserCompanyTypeRolesRestApiToCompanyRoleClientInterface;
use FondOfSpryker\Glue\CompanyUserCompanyTypeRolesRestApi\Dependency\Client\CompanyUserCompanyTypeRolesRestApiToCompanyTypeClientInterface;
use FondOfSpryker\Glue\CompanyUserCompanyTypeRolesRestApi\Processor\Validator\CompanyUserCompanyTypeRolesSearchValidator;
use FondOfSpryker\Glue\CompanyUserCompanyTypeRolesRestApi\Processor\Validator\CompanyUserCompanyTypeRolesSearchValidatorInterface;
use Spryker\Glue\Kernel\AbstractFactory;

class CompanyUserCompanyRoleRestrictionsRestApiFactory extends AbstractFactory
{
    /**
     * @return \FondOfSpryker\Glue\CompanyUserCompanyTypeRolesRestApi\Processor\Validator\CompanyUserCompanyTypeRolesSearchValidatorInterface
     */
    public function createCompanyUserCompanyTypeRoleSearchValidator(): CompanyUserCompanyTypeRolesSearchValidatorInterface
    {
        return new CompanyUserCompanyRolesFilter(

            $this->getConfig()
        );
    }

}
