# webopoly
Webopoly, the world's leading drinking game made by the WEB students in Kufstein!

# What is Webopoly?
Webopoly is a fun game you either can play alone (why not?) or together in a group of max. 8 people.

#So, what are the rules?
The rules are very simple.

1. You have to "roll the dice".
2. Your emoji will automatically move forward.
3. Depending on the field you are now at, you either have to:
  -Drink something
  -Do something
  -Answer a question

You decide if you get the point or not. So, please be honest to yourself.

Winner is the person with the highest score.


## Konfiguration

Passen Sie bitte die Dateien /.htaccess, /includes/dbconfig.php und /includes/config.php entsprechend an. 

## Grundsätzliche Nutzung

### Routen

Sie müssen in der Datei includes/routes.php entsprechende Routen definieren. Also bekannt geben für welche URL welcher Controller zu nutzen ist.

### View & Controller
Jeder View braucht einen eigenen Controller! Views liegen im Verzeichnis /includes/views/. Controller liegen im Verzeichnis /includes/views/controllers/

### Model
Häufig macht es Sinn, dass Sie für jede Tabelle ein eigenes Model schreiben. Models finden Sie in /includes/models/

### REST Klassen

Jeder Restservice hat auch eine eigene Klasse und erbt von RESTClass. Einen Restservice machen Sie in der Datei /includes/restservices.php bekannt.
Der Aufruf eines Restservices User über die API würde über /api/user/ erfolgen. (Die Klasse wird im REST Servicerequest dann Kleingeschrieben)

#### GET Request

Holen von Daten / Views. Ruft die Methode getRequest auf - in $data finden Sie alle übergebenen Parameter (Variablen des GET Requests)

#### POST Request

Erzeugen von Daten. z.B. das anlegen eines neuen Nutzers. Ruft die Methode createRequest auf - in $data finden Sie alle übergebenen Parameter (Variablen des POST Requests)

#### PUT Request

Speichern von Daten. z.B. das speichern von Daten nach ändern eines Nutzers. Ruft die Methode saveRequest auf - in $data finden Sie alle übergebenen Parameter (Variablen des PUT Requests)

#### DELETE Request

Löschen von Daten. z.B. das löschen von Nutzern. Ruft die Methode deleteRequest auf - in $data finden Sie alle übergebenen Parameter (Variablen des DELETE Requests)

## Tutorial

Ein kleines Tutorial um mit der Erweiterung und Nutzung dieses kleinen Frameworks warm zu werden finden Sie hier:
https://github.com/danielhoover/baseproject/wiki/Tutorial