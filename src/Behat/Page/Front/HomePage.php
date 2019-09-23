<?php


namespace App\Behat\Page\Front;


use FriendsOfBehat\PageObjectExtension\Page\SymfonyPage;

class HomePage extends SymfonyPage implements HomepageInterface
{

    public function getRouteName(): string
    {
        return 'tech_homepage';
    }

    /**
     * @return mixed
     */
    public function getHomepageMessage()
    {
        $element = $this->getDocument()->findById('#welcome');
        return $element->getText();
    }
}
