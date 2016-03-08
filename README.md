# bus-stop
Get the times of the next few buses departing from a stop of your choice. Demo here: https://bupk.es/demo/bus-stop/

Just drop this code onto somewhere that runs PHP (and has in internet connection) and you should be fine...

Uses the API from transportapi.com - currently the code uses the 'free' API key but you can sign up for your own at https://developer.transportapi.com/. To set it to a stop of your choice you need to find the correct "atco code" (no, I'd never heard of those before either...). You can find more information about finding yours here: https://data.gov.uk/dataset/naptan

Improvements and plans...
 
- I need to put some comments on it.

- I'd ideally like to get a countdown rather than just saying what time the next bus is due. Probably JS.

- Long-term I would like to get this hooked up to a Web Bluetooth thing. https://developers.google.com/web/updates/2015/07/interact-with-ble-devices-on-the-web?hl=en

