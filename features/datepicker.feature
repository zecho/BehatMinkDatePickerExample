Feature: Calculate the age of a person in number of hours using their date of birth
  So that I can impress my friends
  As a web user
  I wish to find out my age accurate to number of hours

  Scenario: Calculate the age in number of hours of a normal person
    Given I am on the homepage
    And I specify that my date of birth is the "11" of "November" "1983"
    When I ask for my age in number of hours to be calculated
    Then I should be told how many hours old I am