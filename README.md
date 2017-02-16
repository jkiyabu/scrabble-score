# Scrabble Score

#### Website for practicing unit testing with PHP for Epicodus, 02.16.2017

#### By Patrick McGreevy & Jayeson Kiyabu

## Description

This website calculates the [Scrabble](https://en.wikipedia.org/wiki/Scrabble) score for a given word.


## Setup/Installation Requirements
1. Set project root as working directory in CLI.
2. Run `$ composer install --prefer-source --no-interaction`.
3. Run `$ cd web`.
4. Run `$ php -S localhost:8000`.
5. Visit **`localhost:8000`** in web browser.


## Technologies Used

HTML

CSS

Bootstrap

JavaScript

jQuery

PHP

Silex

Twig

Composer

JSON

## Specs

|Behavior|Input|Output|
|--------|-----|------|
|It calculates the score of an empty string as 0|''|0|
|It calculates the score of words with only (A, E, I, O, U, L, N, R, S, T) by counting the number of letters.|'letters'|7|
|It calculates the score of of any word.|'quickly'|25|
|It is case-insensitive.|'Quickly'|25|


## Known Bugs

_No known bugs or issues_

### License

Copyright (c) 2017 _**Patrick McGreevy**_ & _**Jayeson Kiyabu**_

This software is licensed under the MIT license.
