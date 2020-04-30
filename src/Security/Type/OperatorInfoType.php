<?php

namespace IMS\Security\Type;

class OperatorInfoType
{

    /**
     * @var \IMS\Security\Type\OperatorKeyType
     */
    private $OperatorKey = null;

    /**
     * @var \IMS\Security\Type\UsernameType
     */
    private $Username = null;

    /**
     * @var \IMS\Security\Type\OperatorNameType
     */
    private $Name = null;

    /**
     * @var \IMS\Security\Type\EmailAddressType
     */
    private $EmailAddress = null;

    /**
     * @var \IMS\Security\Type\TimeZoneType
     */
    private $TimeZone = null;

    /**
     * @var \IMS\Security\Type\LanguageType
     */
    private $Language = null;

    /**
     * @var \DateTime
     */
    private $LastActivityTime = null;

    /**
     * @var bool
     */
    private $Disabled = null;

    /**
     * @var bool
     */
    private $ForcePasswordChange = null;

    /**
     * @var bool
     */
    private $ExemptFromPasswordExpiry = null;

    /**
     * @var \DateTime
     */
    private $ExpireTime = null;

    /**
     * @var \DateTime
     */
    private $BlockedUntil = null;

    /**
     * @var \IMS\Security\Type\BranchType
     */
    private $DefaultBranch = null;

    /**
     * @return \IMS\Security\Type\OperatorKeyType
     */
    public function getOperatorKey()
    {
        return $this->OperatorKey;
    }

    /**
     * @param \IMS\Security\Type\OperatorKeyType $OperatorKey
     * @return OperatorInfoType
     */
    public function withOperatorKey($OperatorKey)
    {
        $new = clone $this;
        $new->OperatorKey = $OperatorKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\UsernameType
     */
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * @param \IMS\Security\Type\UsernameType $Username
     * @return OperatorInfoType
     */
    public function withUsername($Username)
    {
        $new = clone $this;
        $new->Username = $Username;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\OperatorNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\OperatorNameType $Name
     * @return OperatorInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\EmailAddressType
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }

    /**
     * @param \IMS\Security\Type\EmailAddressType $EmailAddress
     * @return OperatorInfoType
     */
    public function withEmailAddress($EmailAddress)
    {
        $new = clone $this;
        $new->EmailAddress = $EmailAddress;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\TimeZoneType
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }

    /**
     * @param \IMS\Security\Type\TimeZoneType $TimeZone
     * @return OperatorInfoType
     */
    public function withTimeZone($TimeZone)
    {
        $new = clone $this;
        $new->TimeZone = $TimeZone;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\LanguageType
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param \IMS\Security\Type\LanguageType $Language
     * @return OperatorInfoType
     */
    public function withLanguage($Language)
    {
        $new = clone $this;
        $new->Language = $Language;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getLastActivityTime()
    {
        return $this->LastActivityTime;
    }

    /**
     * @param \DateTime $LastActivityTime
     * @return OperatorInfoType
     */
    public function withLastActivityTime($LastActivityTime)
    {
        $new = clone $this;
        $new->LastActivityTime = $LastActivityTime;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDisabled()
    {
        return $this->Disabled;
    }

    /**
     * @param bool $Disabled
     * @return OperatorInfoType
     */
    public function withDisabled($Disabled)
    {
        $new = clone $this;
        $new->Disabled = $Disabled;

        return $new;
    }

    /**
     * @return bool
     */
    public function getForcePasswordChange()
    {
        return $this->ForcePasswordChange;
    }

    /**
     * @param bool $ForcePasswordChange
     * @return OperatorInfoType
     */
    public function withForcePasswordChange($ForcePasswordChange)
    {
        $new = clone $this;
        $new->ForcePasswordChange = $ForcePasswordChange;

        return $new;
    }

    /**
     * @return bool
     */
    public function getExemptFromPasswordExpiry()
    {
        return $this->ExemptFromPasswordExpiry;
    }

    /**
     * @param bool $ExemptFromPasswordExpiry
     * @return OperatorInfoType
     */
    public function withExemptFromPasswordExpiry($ExemptFromPasswordExpiry)
    {
        $new = clone $this;
        $new->ExemptFromPasswordExpiry = $ExemptFromPasswordExpiry;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getExpireTime()
    {
        return $this->ExpireTime;
    }

    /**
     * @param \DateTime $ExpireTime
     * @return OperatorInfoType
     */
    public function withExpireTime($ExpireTime)
    {
        $new = clone $this;
        $new->ExpireTime = $ExpireTime;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getBlockedUntil()
    {
        return $this->BlockedUntil;
    }

    /**
     * @param \DateTime $BlockedUntil
     * @return OperatorInfoType
     */
    public function withBlockedUntil($BlockedUntil)
    {
        $new = clone $this;
        $new->BlockedUntil = $BlockedUntil;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BranchType
     */
    public function getDefaultBranch()
    {
        return $this->DefaultBranch;
    }

    /**
     * @param \IMS\Security\Type\BranchType $DefaultBranch
     * @return OperatorInfoType
     */
    public function withDefaultBranch($DefaultBranch)
    {
        $new = clone $this;
        $new->DefaultBranch = $DefaultBranch;

        return $new;
    }


}

