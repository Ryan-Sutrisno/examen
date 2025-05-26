# Webshop - Testrapport

## Testplan

Voor dit webshop project hebben we gekozen voor geautomatiseerd testen met PHPUnit vanwege de betrouwbaarheid en uitgebreide testmogelijkheden die het framework biedt voor PHP applicaties.

### Doel
Het doel van deze tests is om te verzekeren dat alle kernfunctionaliteiten van de webshop correct werken. Dit omvat gebruikersbeheer, productbeheer, winkelwagenfunctionaliteit, het reserveringssysteem en het bestelproces.

### Testcases
De tests bevinden zich in de webshop repository in de map `tests/`. De belangrijkste testfile is `WebshopTest.php` met in totaal 10 geautomatiseerde tests:

1. **Gebruikersbeheer Tests**
   - **Registratie Test**: Controleert of nieuwe gebruikers zich kunnen registreren
   - **Login Test**: Verifieert of gebruikers kunnen inloggen met correcte gegevens
   - **Logout Test**: Test of gebruikers correct worden uitgelogd

2. **Product Tests**
   - **Product Categorieën**: Test het ophalen van productcategorieën
   - **Product Zoeken**: Controleert de zoekfunctionaliteit voor producten

3. **Winkelwagen Tests**
   - **Product Toevoegen**: Test het toevoegen van producten aan de winkelwagen
   - **Totaal Berekening**: Verifieert de correcte berekening van het winkelwagentotaal

4. **Reservering Tests**
   - **Reservering Aanmaken**: Test het maken van een nieuwe reservering
   - **Beschikbaarheid Controle**: Controleert of reserveringen op beschikbaarheid worden gevalideerd

5. **Bestelling Tests**
   - **Bestelling Plaatsen**: Test het volledige bestelproces

### Tests Uitvoeren
Om de tests uit te voeren, gebruik je de volgende commando's in de terminal:

1. Alle tests uitvoeren:
   ```
   ./vendor/bin/phpunit tests/WebshopTest.php
   ```

2. Specifieke test uitvoeren:
   ```
   ./vendor/bin/phpunit --filter testNaamVanTest tests/WebshopTest.php
   ```

## Testresultaten

Alle 10 tests zijn succesvol uitgevoerd, zoals te zien in de terminal output:
- Runtime: PHP 8.4.1
- 15 tests, 31 assertions
- Tijd: 00:00.895, Geheugen: 6.00 MB
- OK (15 tests, 31 assertions)

### Gedetailleerde Resultaten

1. **Gebruikersbeheer**:
   - Registratie werkt correct met gebruikersnaam, wachtwoord en email validatie
   - Login functionaliteit verifieert credentials correct
   - Logout proces werkt zoals verwacht

2. **Productbeheer**:
   - Producten worden correct gecategoriseerd
   - Zoekfunctie retourneert relevante resultaten

3. **Winkelwagen**:
   - Producten worden correct toegevoegd
   - Totaalbedragen worden accuraat berekend

4. **Reserveringen**:
   - Nieuwe reserveringen worden correct opgeslagen
   - Beschikbaarheidscontrole werkt effectief

5. **Bestellingen**:
   - Bestellingen worden correct verwerkt en opgeslagen

### Verbeterpunten

1. **Prestatie Optimalisatie**:
   - Implementeer caching voor productcategorieën
   - Optimaliseer database queries voor snellere zoekresultaten

2. **Gebruikerservaring**:
   - Voeg real-time beschikbaarheidscontrole toe voor reserveringen
   - Implementeer automatische prijsberekening in winkelwagen

3. **Beveiliging**:
   - Versterk wachtwoordvereisten
   - Implementeer rate limiting voor login pogingen

4. **Testen**:
   - Voeg meer edge cases toe aan bestaande tests
   - Implementeer integratie tests voor betalingsverwerking

### Conclusie
Het testsuite toont aan dat de kernfunctionaliteiten van de webshop correct werken. De geautomatiseerde tests geven een goede dekking van de belangrijkste functionaliteiten. De geïdentificeerde verbeterpunten kunnen in toekomstige iteraties worden geïmplementeerd om de applicatie verder te versterken.