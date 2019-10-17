# VamanAI Laravel Sentiment Text Analysis


[![CircleCI](https://circleci.com/gh/vamanai/laravel-sentiment-analysis.svg?style=svg)](https://circleci.com/gh/vamanai/laravel-sentiment-analysis)
 [![License](https://poser.pugx.org/vamanai/sentiment/license)](https://packagist.org/packages/vamanai/sentiment)
  [![Total Downloads](https://poser.pugx.org/vamanai/sentiment/downloads)](https://packagist.org/packages/vamanai/sentiment)
   

### Introduction

[VamanAI](https://vamanai.com)
 Sentiment proviced an exessive, fluent ready to use laravel package to perform Text or Sentiment analysis on 
text. 

### Pre-requisites

You should have a valid account on [VamanAI.com](https://vamanai.com/register). After creating a free account
you need to generate your [API token](https://vamanai.com/user/profile#/api) which will be used in the package for user identifications/roles. 
You can [generate your free API token](https://vamanai.com/user/profile#/api)) from [here](https://vamanai.com/user/profile#/api).

You also need following packages if not already installed-

` "guzzlehttp/guzzle": "^6.3",` <br/>
 `"symfony/psr-http-message-bridge": "0.2"`

## Installation

`composer require vamanai/sentiment`

### Basic Usage

`use Sentiment\classes\Vaman;` <br/>

##### Sample call <br/>
`Vaman::sentiment('I love you');`

##### Sample output

`{"text":"I love you","sentiment":"0.8943807601928711"}`

## License 

VamanAI Sentiment is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT)    