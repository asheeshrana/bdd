<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private $toffeesEaten;
    private $toffeesReceived;
    private $toffeesRemaining;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->toffeesEaten = $this->toffeesReceived = $this->toffeesRemaining = 0;
    }

    /**
     * @Given I receive :n toffees
     */
    public function toffeesIReceived($n) {
        $this->toffeesReceived = intval($n);
        $this->toffeesRemaining = intval($n);
    }

     /**
     * @When I eat the :n toffees
     */
    public function iAteSomeToffees($n)
    {
        $this->toffeesEaten = intval($n);
        $this->toffeesRemaining = $this->toffeesRemaining - intval($n);
    }

     /**
     * @Then I should have :n toffees remaining
     */
    public function iShouldHaveRemaining($n)
    {
        PHPUnit_Framework_Assert::assertSame(
            intval($n),
            $this->toffeesRemaining
        );
    }

     /**
     * @Then I should have eaten :n toffees
     */
    public function iShouldHaveEaten($n)
    {
        PHPUnit_Framework_Assert::assertSame(
            intval($n),
            $this->toffeesEaten
        );
    }
}
