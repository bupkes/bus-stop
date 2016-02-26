# brighton-bus-stop
Get the times of the next few buses departing from a stop of your choice. Demo here: http://bupk.es/demo/brighton-bus-stop/

Just drop this code onto somewhere that runs PHP (and has in internet connection) and you should be fine...

Uses the API from transportapi.com - currently the code uses the 'free' API key but you can sign up for your own at https://developer.transportapi.com/. To set it to a stop of your choice you need to find the correct "atco code" (no, I'd never heard of those before either...). You can find more information about finding yours here: https://data.gov.uk/dataset/naptan

Improvements and plans...
 
- I need to put some comments on it.

- At the moment it just seems to bring up the first service available (so in the example code it's seeing the next number 28 but not the next 29). This is a pretty basic error that I should be sorting out soon.

- I'd ideally like to get a countdown rather than just saying what time the next bus is due. Probably JS.

- Long-term I would like to get this hooked up to a Web Bluetooth thing. https://developers.google.com/web/updates/2015/07/interact-with-ble-devices-on-the-web?hl=en

