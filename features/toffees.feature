Feature: Toffees
  In order to become cool I must get some toffees, eat them and keep track of how many are remaining

  Rules:
  - Its YOLO... No RULES rulez

  Scenario: Receiving Toffees and not eathing any toffee
    Given I receive 10 toffees
    When I eat the 0 toffees
    Then I should have 10 toffees remaining
    And I should have eaten 0 toffees

  Scenario: Receiving Toffees and eathing some toffees
    Given I receive 10 toffees
    When I eat the 3 toffees
    Then I should have 7 toffees remaining
    And I should have eaten 3 toffees