<?php
namespace Sentiment\Tests;

//use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Sentiment\SentimentServiceProvider;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    protected function getPackageProviders($app)
    {
        return [SentimentServiceProvider::class];
    }
}