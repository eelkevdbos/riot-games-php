riot-games-php
==============

Riot Games API wrapper in for PHP

#Usage

```php
RiotGames\RiotApi::setRequestClientResolver(function() {

   return new GuzzleHttp\Client(array(
       'base_url' => RiotGames\RiotApi::BASE_URL
   ));

});

$league = RiotGames\RiotApi::game('LeagueOfLegends');

//list of champions
$champions = $league->champion->all();
```
