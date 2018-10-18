# Magento 2 TroqerApi by Cesar Octavio

En el archivo de composer.json, agregar lo siguiente

```json
{
    "require":{
       "cesar-octavio/troquer-api":"*"
    },
    "repositories" : {  
        "0":{
                "type": "package",
                "package": {
                    "name": "cesar-octavio/troquer-api",
                    "version": "0.1.0",
                    "autoload": {
                        "files": [
                            "registration.php"
                        ],
                        "psr-4": {
                            "CesarOctavio\\TroquerApi\\": ""
                        }
                    },
                    "source": {
                        "url": "https://github.com/cesaroctaviods/troquer_api.git",
                        "type": "git",
                        "reference": "master"
                    }
                }
        }
    }
}
```