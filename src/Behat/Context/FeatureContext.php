<?php


namespace App\Behat\Context;
use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext
{
    /**
     * @Given I go to :arg1                    # FeatureContext::visit()
     */
    public function iGoToFeaturecontextVisit($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see :arg1 # FeatureContext::assertPageContainsText()
     */
    public function iShouldSeeFeaturecontextAssertpagecontainstext($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I follow :arg1                     # FeatureContext::clickLink()
     */
    public function iFollowFeaturecontextClicklink($arg1)
    {
        throw new PendingException();
    }
}
