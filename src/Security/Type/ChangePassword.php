<?php

namespace IMS\Security\Type;

class ChangePassword
{

    /**
     * @var \IMS\Security\Type\UsernameType
     */
    private $Username = null;

    /**
     * @var \IMS\Security\Type\PasswordType
     */
    private $OldPassword = null;

    /**
     * @var \IMS\Security\Type\PasswordType
     */
    private $NewPassword = null;

    /**
     * @return \IMS\Security\Type\UsernameType
     */
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * @param \IMS\Security\Type\UsernameType $Username
     * @return ChangePassword
     */
    public function withUsername($Username)
    {
        $new = clone $this;
        $new->Username = $Username;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PasswordType
     */
    public function getOldPassword()
    {
        return $this->OldPassword;
    }

    /**
     * @param \IMS\Security\Type\PasswordType $OldPassword
     * @return ChangePassword
     */
    public function withOldPassword($OldPassword)
    {
        $new = clone $this;
        $new->OldPassword = $OldPassword;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PasswordType
     */
    public function getNewPassword()
    {
        return $this->NewPassword;
    }

    /**
     * @param \IMS\Security\Type\PasswordType $NewPassword
     * @return ChangePassword
     */
    public function withNewPassword($NewPassword)
    {
        $new = clone $this;
        $new->NewPassword = $NewPassword;

        return $new;
    }


}

