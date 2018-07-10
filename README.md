# home24-acceptance_test

Acceptance test using php

Prerequisite:
Hardware: Ubuntu 16.04 linux system.

Installation steps:
Below are the steps need to be followed to run the acceptance test suite:

1) Install the php latest version

2) Install the other dependencies, At my system i found below need to be installed:
   * sudo apt-get install php7.0-curl
   * sudo apt-get install php7.0-mbstring
   * sudo apt-get install php7.0-xml

3) Install Codeception:
   * sudo curl -LsS http://codeception.com/codecept.phar -o /usr/local/bin/codecept
   * sudo chmod a+x /usr/local/bin/codecept

4) Check the version:
   * codecept --version

5) Create the project:
   * mkdir -p home24/acceptence_test
   * cd home24/acceptence_test
   * codecept bootstrap

6) I found PhantomJS webdriver to run the test and installed it using below command:
   * sudo mv phantomjs-2.1.1-linux-x86_64/ /usr/local/share
   * sudo ln -sf /usr/local/share/phantomjs-2.1.1-linux-x86_64/bin/phantomjs /usr/local/bin

7) To start PhantomJS WebDriver, just run a command in a separate terminal tab:
   * phantomjs --webdriver=4444 --ssl-protocol=any --ignore-ssl-errors=true

8) To finish configuration successfully, and to create our first acceptance test I should add a base URL and WebDriver into the configuration file “tests/acceptance.suite.yml”

LOGIN PAGE TEST:

To generate an acceptance test I ran a command in the folder with the test project.

 * codecept generate:cept acceptance LoginPage

Acceptance Test Cases:
1) On opening the login link 'https://www.home24.de/meinkundenkonto/kunde/login', Could i see the login page or not
2) Check if register option is there or not for new user
3) Fill the valid credential for user and check it should allow user to login and display 'Mein Kundenkonto' text.
4) Check if the login screen has the option of forgot password. Check for 'Passwort vergessen?' text.
5) Check if there is option of subscribing the home24 newsletter for new product. Verify for the 'Keine Angebote und Gutscheine verpassen!' string.
6) Check if user clicks the 'Welter' aka Regsiter button(elelment) it should redirect the user to registration page.
7) Check if Website shows that it is SSL enabled page, verify the 'Secure shopping through SSL encryption' message.
8) Check if website shows correct home24 logo.
9) Check for the invaild Email or/and password, It should not allow login.
10)Check if the login page has search option or not, fill search input field

I have tried to implent the few of above tests through php and codeception framework and executed the tests. It is my first hands on experience with both(php and codeception) of them.

