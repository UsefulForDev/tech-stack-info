<?php


namespace App\Behat\Page\Front;


use FriendsOfBehat\PageObjectExtension\Page\SymfonyPageInterface;

interface HomepageInterface extends SymfonyPageInterface
{
    /**
     * @return mixed
     */
    public function getHomepageMessage();
}
