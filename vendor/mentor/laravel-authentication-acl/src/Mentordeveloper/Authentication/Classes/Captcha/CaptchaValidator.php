<?php  namespace Mentordeveloper\Authentication\Classes\Captcha; 
/**
 * Class CaptchaValidator
 *
 * @author mentor beschi mentordeveloper@gmail.com
 */
abstract class CaptchaValidator implements CaptchaValidatorInterface
{
    protected $error_message = "The captcha is not valid, please try again.";

    public function validateCaptcha($attribute, $value)
    {
        return $value == $this->getValue();
    }

    /**
     * @return mixed
     */
    public function getErrorMessage()
    {
        return $this->error_message;
    }

    abstract public function getValue();

    abstract public function getImageSrcTag();
}