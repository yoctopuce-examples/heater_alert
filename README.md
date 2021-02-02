# Heater Alert

This is a simple php script that use Yoctopuce PHP Library to send and email when a home heater 
is stopped. See more detail on our web site : http://www.yoctopuce.com/EN/XXXX 

## Installations
- edit the source to change the password dans the email used by the script.
- upload this script to your server
- run ``composer install`` to install Yoctopuce library
- Connect to the web interface of the YoctoHub.
- Click on the *configure* button of the YoctoHub.
- Click on the *edit* button of ``Callback URL`` settings.
- Set the type of Callback to ``Yocto-API Callback``.
- Set the *callback URL* to the URL where this script is installed
- Set the security to ``MD5 Signature`` and enter the password used in the code.
- Click on the *test* button.
- Click on the *Save* button.