<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for changePassword StructType.
 */
class ChangePassword extends AbstractStructBase
{
    /**
     * The newPassword.
     *
     * @var string
     */
    public $newPassword;

    /**
     * Constructor method for changePassword.
     *
     * @uses ChangePassword::setNewPassword()
     *
     * @param string $newPassword
     */
    public function __construct($newPassword = null)
    {
        $this
            ->setNewPassword($newPassword);
    }

    /**
     * Get newPassword value.
     *
     * @return string|null
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * Set newPassword value.
     *
     * @param string $newPassword
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ChangePassword
     */
    public function setNewPassword($newPassword = null)
    {
        // validation for constraint: string
        if (!is_null($newPassword) && !is_string($newPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newPassword, true), gettype($newPassword)), __LINE__);
        }
        $this->newPassword = $newPassword;

        return $this;
    }
}
