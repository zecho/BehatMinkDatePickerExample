<?php

namespace Application;

use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\FormServiceProvider;
use Silex\Provider\ValidatorServiceProvider;
use Silex\Provider\TranslationServiceProvider;
use Silex\Provider\SessionServiceProvider;

class ApplicationBuilder
{
    /**
     * @return Application
     */
    public function buildApplication()
    {
        $application = new Application();
        $application['debug'] = true;

        $application->register(new TwigServiceProvider(), ['twig.path' => __DIR__.'/../../views',]);
        $application->register(new FormServiceProvider());
        $application->register(new ValidatorServiceProvider());
        $application->register(new SessionServiceProvider());
        $application->register(new TranslationServiceProvider(), ['locale' => 'en']);

        return $application;
    }
}
