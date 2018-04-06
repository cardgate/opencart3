![CardGate](https://cdn.curopayments.net/thumb/200/logos/cardgate.png)

# CardGate module voor Opencart 3.X

## Support

Deze extensie is geschikt voor OpenCart versie **3.x**

## Voorbereiding
Voor het gebruik van deze module zijn CardGate RESTful gegevens nodig.  
Bezoek hiervoor [Mijn CardGate](https://my.cardgate.com/) en haal daar je  
RESTful API gebruikersnaam en wachtwoord op, of neem contact op met je accountmanager.  

## Installatie

1. Download en unzip het [cardgate.zip](https://github.com/cardgate/opencart3/releases/) bestand op je bureaublad.

2. Upload de **inhoud** van de zipfile naar de **gelijknamige mappen** op je webshop.

## Configuratie

1. Ga naar het **admin** gedeelte van je webshop en kies **Extenties, Betaalmethoden**.

2. Scroll naar de **CardGate Generic betaalmethode** and kies **Installeren**.

3. Klik nu op de **Edit** knop van de betaalmethode en ga naar de **General** tab.

4. Vul de **Site ID**, de **Merchant ID**, de **Merchant API key**, en de **Hash key** in.

5. Deze variabelen zijn de vinden bij **Sites** op [My CardGate](https://my.cardgate.com/).

6. Vul de andere waarden in, en stel de **Plugin Status** in op **Active**.

7. Ga naar de **Order Status** tab en vul de juiste **status waarden** in.

8. Klik nu op de  **Save** knop.

9. Kies nu de **CardGate betaalmethode** die je wilt gebruiken en klik op **Install**.

10. Klik op de **Edit** knop van deze betaalmethode en stel de  **Plugin Status** in op **Active**.

11. Herhaal **stappen 9 en 10** voor elke **betaalmethode** die je wilt **activeren**.

12. Ga naar [My CardGate](https://my.cardgate.com/), en kies **Sites** en selecteer de juiste site.

13. Ga naar **Technische koppeling** en vul dezelfde **Codeersleutel** in, die je ingevuld hebt bij de **CardGate Generic betaalmethode**.

14. Als je klaar bent met **testen** schakel dan alle **geactiveerde betaalmethoden** van **Test Mode** naar **Live mode** en sla het op (**Save**).

## Vereisten

Geen verdere vereisten.