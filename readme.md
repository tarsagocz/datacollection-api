# DataCollection API

## Installation

```
    composer require mfajfr/datacollection-api
```

## Using

### Connection
```php
define('URL', 'https://datacollection.xample');
define('API_TOKEN', '1234567890123456789012345678901234567890');

Connection::setConfiguration(new Configuration(URL, API_TOKEN));
```

### Working with Subscriber
```php
$subscriber = Subscriber::example(); // Create example subscriber (fake data)
$subscriber->store(); // Storing subscriber

$subscriber = Subscriber::findByListAndAccountId($subscriber->list, $subscriber->account_id)['subscriber']; // Finding subscriber

$subscriber->email = 'new' . $subscriber->email; // Set new property

$subscriber->updateByListAndAccountId(); // Updating subscriber
```