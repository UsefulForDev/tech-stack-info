<?php


namespace App\Behat\Context\Ui\Front;

use App\Behat\Page\Front\HomepageInterface;
use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Webmozart\Assert\Assert;

class HomePageContext implements Context
{
    /** @var HomepageInterface */
    private $homePage;

    /**
     * HomePageContext constructor.
     * @param HomepageInterface $homePage
     */
    public function __construct(HomepageInterface $homePage)
    {
        $this->homePage = $homePage;
    }


    /**
     * @When I view homepage
     */
    public function iViewHomepage()
    {
        $this->homePage->open();
    }

    /**
     * @Then I should be on homepage
     */
    public function iShouldBeOnHomepage()
    {
        $this->homePage->verify();
    }

    /**
     * @Then I should see top :arg1 technologies
     */
    public function iShouldSeeTopTechnologies($arg1)
    {
        Assert::same($this->homePage->getHomepageMessage(), 'Hello HomeController! ✅');
    }
}
