<?php

namespace IMS\Security;

use IMS\Security\Type;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class SecurityClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\Login $parameters
     * @return ResultInterface|Type\LoginResponse
     * @throws SoapException
     */
    public function login(\IMS\Security\Type\Login $parameters) : \IMS\Security\Type\LoginResponse
    {
        return $this->call('Login', $parameters);
    }

    /**
     * @param RequestInterface|Type\Logout $parameters
     * @return ResultInterface|Type\LogoutResponse
     * @throws SoapException
     */
    public function logout(\IMS\Security\Type\Logout $parameters) : \IMS\Security\Type\LogoutResponse
    {
        return $this->call('Logout', $parameters);
    }

    /**
     * @param RequestInterface|Type\ChangePassword $parameters
     * @return ResultInterface|Type\ChangePasswordResponse
     * @throws SoapException
     */
    public function changePassword(\IMS\Security\Type\ChangePassword $parameters) : \IMS\Security\Type\ChangePasswordResponse
    {
        return $this->call('ChangePassword', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetOperatorForToken $parameters
     * @return ResultInterface|Type\GetOperatorForTokenResponse
     * @throws SoapException
     */
    public function getOperatorForToken(\IMS\Security\Type\GetOperatorForToken $parameters) : \IMS\Security\Type\GetOperatorForTokenResponse
    {
        return $this->call('GetOperatorForToken', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetPrivileges $parameters
     * @return ResultInterface|Type\GetPrivilegesResponse
     * @throws SoapException
     */
    public function getPrivileges(\IMS\Security\Type\GetPrivileges $parameters) : \IMS\Security\Type\GetPrivilegesResponse
    {
        return $this->call('GetPrivileges', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetBranchesWithPrivilege $parameters
     * @return ResultInterface|Type\GetBranchesWithPrivilegeResponse
     * @throws SoapException
     */
    public function getBranchesWithPrivilege(\IMS\Security\Type\GetBranchesWithPrivilege $parameters) : \IMS\Security\Type\GetBranchesWithPrivilegeResponse
    {
        return $this->call('GetBranchesWithPrivilege', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckPrivilege $parameters
     * @return ResultInterface|Type\CheckPrivilegeResponse
     * @throws SoapException
     */
    public function checkPrivilege(\IMS\Security\Type\CheckPrivilege $parameters) : \IMS\Security\Type\CheckPrivilegeResponse
    {
        return $this->call('CheckPrivilege', $parameters);
    }

    /**
     * @param RequestInterface|Type\ValidateToken $parameters
     * @return ResultInterface|Type\ValidateTokenResponse
     * @throws SoapException
     */
    public function validateToken(\IMS\Security\Type\ValidateToken $parameters) : \IMS\Security\Type\ValidateTokenResponse
    {
        return $this->call('validateToken', $parameters);
    }

    /**
     * @param RequestInterface|Type\PutOperatorLog $parameters
     * @return ResultInterface|Type\PutOperatorLogResponse
     * @throws SoapException
     */
    public function putOperatorLog(\IMS\Security\Type\PutOperatorLog $parameters) : \IMS\Security\Type\PutOperatorLogResponse
    {
        return $this->call('PutOperatorLog', $parameters);
    }


}

