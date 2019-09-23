@homepage
Feature: Viewing homepage
  In order to be up-to-date with the newest products
  As a Visitor
  I want to be able to view top technologies

  @ui
  Scenario: Viewing homepage
    When I view homepage
    Then I should be on homepage
    Then I should see top 10 technologies
