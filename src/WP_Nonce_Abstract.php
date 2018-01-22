<?php
/**
 * Created by PhpStorm.
 * User: zainu
 * Date: 22-Jan-18
 * Time: 08:52 AM
 */

/**
 * The abstract class for the implementing nonce interface.
 */

abstract class WP_Nonce_Abstract implements WP_Nonce_Interface {
    /**
     * Getting Nonce ActionUrl property
     *
     * @return string action value
     */

    public function getActionUrl()
    {
        return $this->nonce;
    }

    /**
     * Setting Nonce ActionUrl property
     *
     * @param $url_params for the URL to add nonce action.
     * @return string action value
     */

    public function setActionUrl($url_params)
    {
        $this->nonce = $url_params;
        return $this ->getActionUrl();
    }


    /**
     * Getting action property
     *
     * @return string action value
     */

    public function getAction()
    {
        return $this->action;
    }

    /**
     * Setting action property
     *
     * @param $action_params for the nonce action name
     * @return string action value
     */

    public function setAction($action_params)
    {
        $this->action = $action_params;
        return $this ->getAction();
    }

    /**
     * Getting Name property
     *
     * @return string action value
     */

    public function getName()
    {
        return $this->name;
    }

    /**
     * Setting Name property
     *
     * @param $name_params for the nonce name
     * @return string action value
     */

    public function setName($name_params)
    {
        $this->name = $name_params;
        return $this ->getName();
    }


}