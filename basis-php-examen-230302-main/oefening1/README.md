MOVIES DB 
----------
###### (20 punten)

- importeer lokaal 230302_movies.sql in je database (zie submap /sql).

- Je zou op index.php een tabel moeten te zien krijgen van alle movies gesorteerd volgens beste score eerst maar er is een bug waardoor dit niet lukt -> fix it!

- Elke rij heeft een edit en delete link, maar dat doet voorlopig nog niets -> zorg ervoor dat dit werkt.

  - DELETE
    - dit houdt in dat de waarde van 'published' in de databank op 0 gezet moet worden
    - vraag bevestiging aan de gebruiker alvorens uit te voeren

  - EDIT
    - voorzie op edit.php een formulier waarop volgende velden pre-filled een aanpasbaar zijn:
      - name -> text
      - studio -> text
      - genre -> dropdown met volgende opties:
        - Romance
        - Comedy
        - Drama
        - Animation
        - Fantasy
        - Action
        - SciFi
        - Horror
      - score -> nummer van 0 tot 100
      - year -> nummer tussen 1900 en het huidig jaar
      - published -> checkbox
    - voorzie een "save" button
    - voorzie de nodige validatie!!!
    - na succesvolle bewerking moet de gebruiker opnieuw de homepagina te zien krijgen. Bovenaan deze pagina wordt dan getoond "your changes to *name* were saved!" waarbij *name* de naam vam de aangepast film is. 

- Schrijf de code zo performant mogelijk, hou rekening met leesbaarheid en documenteer waar nodig!

- Succes!
