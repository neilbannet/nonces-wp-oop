<?php

/**
 * Created by PhpStorm.
 * User: zainu
 * Date: 22-Jan-18
 * Time: 08:06 AM
 */

/**
 *  WP Nonce Interface
 *
 *  A Nonce Interface Class
 *
 *  @author Zainu
 */

interface WP_Nonce_Interface
{

    /**
     * Get signature for ActionUrl property.
     *
     * @since 1.0.0
     *
     * @return string
     */
    public function getActionUrl();

    /**
     * Set signature for ActionUrl property. In this  we will
     * adding nonce action to URL
     *
     * @since 1.0.0
     * @param $url_params for the URL to add nonce action.
     * @return string
     */
    public function setActionUrl($url_params);


    /**
     * Get signature for Action property.
     *
     * @since 1.0.0
     *
     * @return string
     */
    public function getAction();

    /**
     * Set signature for Action property.
     *
     * @since 1.0.0
     *
     * @param $action_params for the nonce action name
     * @return string
     */
    public function setAction($action_params);

    /**
     * Get signature for ActionName property.
     *
     * @since 1.0.0
     *
     * @return string
     */
    public function getName();

    /**
     * Set signature for ActionName property.
     *
     * @since 1.0.0
     *
     * @param $name_params for the nonce name
     * @return string
     */
    public function setName($name_params);
}