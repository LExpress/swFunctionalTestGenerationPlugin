# Functional Test Generation

This plugin contains a specific filter which just records user's interactions in a symfony Functional Test format.

So mainly you navigate accross your application, submit your forms and click on links, and boom ... you have a functional test *almost* ready to use.

Please read the original blog post : [swFilterFunctionalTest](http://rabaix.net/en/articles/2009/01/27/functional-test-generation-with-symfony-1-2 "Functional Test Generation with symfony 1.2")

## Installation

* Install swFunctionalTestGenerationPlugin

  - via composer : require": { "lexpress/sw-functional-test-generation-plugin": "*" }
  - via git : https://github.com/LExpress/swFunctionalTestGenerationPlugin.git

* Clear your cache

        php symfony cc

* Edit the filters.yml file and add these configuration lines after the rendering filter

    ````yml
    functional_test:
      class: swFilterFunctionalTest
    ````

* Enable module `swFunctionalTestSave` in your settings.yml

    ````yml
    .settings
      enabled_modules:
        - swFunctionalTestSave
    ````

* Make sure the debug panel is enabled


## Usage

* Enable the functional test in the debug bar
* Perform a scenario on your project
* once done, copy-paste the generated code into a test file or save it via the form

## Know issue

* When you perform an ajax request, do an http request or reload your page just after to see your ajax request in the generated code
