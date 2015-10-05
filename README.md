# api-tester
A script to test API clients. 

Using the API Tester is easy:

1. Clone the repository to your development server.
2. Start PHP's built-in development server.
3. Run your unit tests.


## Clone the repository

Clone the repository to your development server _outside_ of your web root directory. 

```
$ cd ~/projects

~/projects$ git clone https://github.com/jstewmc/api-tester.git
```

## Start PHP's development server

Use PHP's [built-in web server](http://php.net/manual/en/features.commandline.webserver.php) (requires PHP 5.4.0+) to run our script:

```
# navigate to the repo's directory
$ cd ~/projects/api-tester

# start the server
~/projects/api-tester$ php -S localhost:8000

<php-version> Development Server started at <datetime>
Listening on localhost:8000
Document root is /path/to/repo
Press Ctrl-C to quit
```

## Run unit tests

Run your tests with URLs that point to `localhost:8000` using the `format`, `code`, and `output` parameters:

- `format`, the response's Content-Type 
  - accepts "json" or "xml"
  - optional; if omitted, defaults to "json"
- `code`, the HTTP response code
  - accepts any valid HTTP code
  - optional; if omitted, defaults to 200
- `output`, the response's content
  - should be url encoded
  - optional; if omitted, defaults to "" (empty)

For example, the URL below: 

```
http://localhost:8000?format=json&code=200&output=%7B%22foo%22%3A%22bar%22%7D
``` 

would produce the following output with `Content-Type: application/json` and HTTP status `200`:

```
{"foo":"bar"}
```

## About

In October 2015, I needed a way to test my [API client](https://github.com/jstewmc/api). I made do with public APIs and websites, but it was a pain. Then, it hit me. I should just make a script that responds exactly how I tell it to respond, and the API Tester library was born.

## Version

### dev-master

## Author

[Jack Clayton](mailto:clayjs0@gmail.com)

## License

[MIT](LICENSE)
