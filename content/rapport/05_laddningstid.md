---
---
Rapport kmom05 - laddningstid
=========================
Uppgiften var att välja tre webbplatser och sedan göra en utvärdering av deras laddningstid.

Urval
-----------------------
I undersökningen valdes tre olika webbplatser. Urvalet gjordes med utgångspunkt i IDG:s senaste undersökning från 2019, där de 100 bästa svenska sajterna, tjänsterna och apparna listades. Företagen som ligger bakom webbplatserna är svenska och verkar i huvudsak i Sverige. Urvalet för undersökningen begränsades till webbplatser inom e-handel, och företagen som valdes var NetOnNet, Caliroots och Sportamore.

Metod
-----------------------
För varje webbplats valdes tre sidor ut. Sidorna analyserades med Google Pagespeed, med mätvärden för både Mobile och Desktop. För varje sida, användes även Devtools flik "Networks", i vilken data om laddningstid, antal resurser och sidans totala storlek hämtades. För varje sida utfördes mätningen tre gånger och sedan beräknades genomsnittet.

Resultat
-----------------------
#### NetOnNet
[FIGURE src=image/Screenshot_2019-11-25-NetOnNet.png caption="Screenshot av NetOnNets startsida"]

##### netonnet.se/art/dator-surfplatta/laptop
<table>
    <tr>
        <th>Pagespeed mobile</th>
        <th>Pagespeed desktop</th>
        <th>Laddningstid (s)</th>
        <th>Antal resurser</th>
        <th>Storlek resurser (MB)</th>
    </tr>
    <tr>
        <td>35</td>
        <td>74</td>
        <td>5,40</td>
        <td>136</td>
        <td>3,87</td>
    </tr>
</table>

##### netonnet.se/art/ljud-och-bild/hogtalare
<table>
    <tr>
        <th>Pagespeed mobile</th>
        <th>Pagespeed desktop</th>
        <th>Laddningstid (s)</th>
        <th>Antal resurser</th>
        <th>Storlek resurser (MB)</th>
    </tr>
    <tr>
        <td>34</td>
        <td>72</td>
        <td>3,74</td>
        <td>109</td>
        <td>3,43</td>
    </tr>
</table>

##### netonnet.se/art/gaming
<table>
    <tr>
        <th>Pagespeed mobile</th>
        <th>Pagespeed desktop</th>
        <th>Laddningstid (s)</th>
        <th>Antal resurser</th>
        <th>Storlek resurser (MB)</th>
    </tr>
    <tr>
        <td>34</td>
        <td>72</td>
        <td>3,60</td>
        <td>111</td>
        <td>3,57</td>
    </tr>
</table>

##### Sammanfattande kommentar
Resultatet visar att Desktop är betydligt snabbare än Mobile, och att sidans hastighet ligger någonstans runt medel. Det finns ett antal åtgärder som skulle förbättra prestandan hos webbplatsen, bl.a. att: Minska svarstiderna från servern (tid till första byte), ta bort oanvänd CSS, ta bort resurser som blockerar renderingen, skicka bilder i modernare bildformat, använda bilder med rätt storlek och skjuta upp inläsningen av bilder som inte visas på skärmen. Webbplatsen innehåller mycket bilder, i huvudsak på produkter, och då bilder har en stor påverkan på hastigheten är det förståeligt att den blir lidande. Att fokusera på dessa åtgärder känns därmed särskilt viktigt.


#### Caliroots
[FIGURE src=image/Screenshot_2019-11-25-Caliroots.png caption="Screenshot av Caliroots startsida"]

##### caliroots.se/skor/s/72
<table>
    <tr>
        <th>Pagespeed mobile</th>
        <th>Pagespeed desktop</th>
        <th>Laddningstid (s)</th>
        <th>Antal resurser</th>
        <th>Storlek resurser (MB)</th>
    </tr>
    <tr>
        <td>60</td>
        <td>79</td>
        <td>2,70</td>
        <td>276</td>
        <td>7,76</td>
    </tr>
</table>

##### caliroots.se/jackor/s/21
<table>
    <tr>
        <th>Pagespeed mobile</th>
        <th>Pagespeed desktop</th>
        <th>Laddningstid (s)</th>
        <th>Antal resurser</th>
        <th>Storlek resurser (MB)</th>
    </tr>
    <tr>
        <td>57</td>
        <td>67</td>
        <td>3,35</td>
        <td>284</td>
        <td>9,20</td>
    </tr>
</table>

##### caliroots.se/blackfriday/s/1875
<table>
    <tr>
        <th>Pagespeed mobile</th>
        <th>Pagespeed desktop</th>
        <th>Laddningstid (s)</th>
        <th>Antal resurser</th>
        <th>Storlek resurser (MB)</th>
    </tr>
    <tr>
        <td>39</td>
        <td>58</td>
        <td>3,83</td>
        <td>289</td>
        <td>12,73</td>
    </tr>
</table>

##### Sammanfattande kommentar
Även här är Desktop snabbare än Mobile, men skillnaden är något mindre. Hastigheten ligger runt medel, och enligt Google Pagespeed presterar sidan något bättre än föregående. Förbättringsåtgärder för webbplatsen är bl.a. att: Använda bilder med rätt storlek, skicka bilder i modernare bildformat, ta bort oanvänd CSS, ta bort resurser som blockerar renderingen, minska svarstiderna från servern (tid till första byte) och skjuta upp inläsningen av bilder som inte visas på skärmen. Webbplatsen innehåller liksom föregående webbplats mycket bilder, och optimering av deras användning skulle ha en positiv påverkan på prestandan.

#### Sportamore
[FIGURE src=image/Screenshot_2019-11-25-Sportamore.png caption="Screenshot av Sportamores startsida"]

##### sportamore.se/pa-fotterna/?gender=herr&ref=megatile1SE
<table>
    <tr>
        <th>Pagespeed mobile</th>
        <th>Pagespeed desktop</th>
        <th>Laddningstid (s)</th>
        <th>Antal resurser</th>
        <th>Storlek resurser (MB)</th>
    </tr>
    <tr>
        <td>15</td>
        <td>58</td>
        <td>16,28</td>
        <td>240</td>
        <td>6,30</td>
    </tr>
</table>

##### sportamore.se/sporter/alpint/?gender=herr&ref=ctaheroSE
<table>
    <tr>
        <th>Pagespeed mobile</th>
        <th>Pagespeed desktop</th>
        <th>Laddningstid (s)</th>
        <th>Antal resurser</th>
        <th>Storlek resurser (MB)</th>
    </tr>
    <tr>
        <td>14</td>
        <td>52</td>
        <td>8,97</td>
        <td>249</td>
        <td>7,1</td>
    </tr>
</table>

##### sportamore.se/black-friday/?ref=megatile2SE
<table>
    <tr>
        <th>Pagespeed mobile</th>
        <th>Pagespeed desktop</th>
        <th>Laddningstid (s)</th>
        <th>Antal resurser</th>
        <th>Storlek resurser (MB)</th>
    </tr>
    <tr>
        <td>16</td>
        <td>66</td>
        <td>7,59</td>
        <td>90</td>
        <td>6,1</td>
    </tr>
</table>

##### Sammanfattande kommentar
Även här är det tydligt att Mobile presterar sämre än Desktop. För Desktop är hastigheten runt medel, men för Mobile ligger den väldigt lågt. Bland de föreslagna förbättringsåtgärderna finns bl.a. att: Minska svarstiderna från servern (tid till första byte), ta bort resurser som blockerar renderingen, ta bort oanvänd CSS, skicka bilder i modernare bildformat, skjuta upp inläsningen av bilder som inte visas på skärmen, skicka bilder i modernare bildformat och koda bilder effektivt. Liksom i föregående fall är sidan bildintensiv, och deras användning bör effektiviseras för att öka hastigheten.

Analys
-----------------------
Ingen av webbplatserna kan betraktas som snabb, utan generellt ligger de runt medel. Webbplatserna och sidorna som undersöktes innehåller relativt många bilder, och detta verkar vara en av huvudanledningarna till att laddningshastigheten blir lidande. Enligt Google Pagespeed finns det en del åtgärder som skulle kunna förbättra hastigheten om man bl.a. använde bilder med rätt storlek, skickade bilder i modernare bildformat, sköt upp inläsningen av bilder som inte visas på skärmen, skickade bilder i modernare bildformat och kodade bilder effektivt. Detta är något som samtliga webbplatser bör undersöka närmare. Då de verkar inom e-handelssegmentet är det av stor vikt att sidorna laddar snabbt. En hög hastighet kan bidra till en bättre konverteringsgrad och är därmed avgörande för företagets lönsamhet.

Ett återkommande åtgärdsförslag var att ta bort oanvänd css. Det bör vara relativt enkelt att åtgärda genom att använda någon typ utav kompilator som tar bort all onödig css-"kod". Ytterligare en stor hastighetstjuv för samtliga webbplatser var svarstiderna från servern (tid till första byte). Möjligtvis beror detta på att jag befinner mig på andra sidan jordklotet, och webbplatsernas servrar är placerade i Sverige. Då kunderna för webbplatserna i huvudsak finns i Sverige bör detta inte vara ett stort problem. Om teorin stämmer är resultatet från undersökningen något orättvist, och sidorna presterar utifrån ett kundperspektiv bättre än vad undersökningen ger sken av.

Rangordning
-----------------------
Om man jämför de genomsnittliga värdena för webbplatserna har NetOnNet bäst rating för Desktop, på 73. På andra plats kommer Caliroots på 68, och sist Sportamore på 59. För Mobile kommer Caliroots först på 52, NetOnNet på andra plats på 34 och återigen sist Sportamore på 15. Caliroots har den lägsta laddningstiden på 3,29 sekunder, därefter kommer NetOnNet på 4,25 sekunder, och sist Sportamore på 10,94 sekunder. Caliroots är den som kräver mest resurser, med ett genomsnitt på 9,90 MB (289 st). På andra plats kommer NetOnNet på 6,62 MB (119 st), tätt följt av Sportamore på 6,5 MB (193 st).

Utifrån detta är det enkelt att se vilken webbplats som presterar sämst, vilket är Sportamore. Första platsen är inte lika klar, men det finns mycket som pekar på att Caliroots är den bästa. NetOnNet har en något bättre rating för Desktop, men Caliroots kompenserar för detta genom att prestera betydligt bättre på Mobile. Det gör att den känns mer modernt anpassad. Mätningarna i Devtools visar att webbplatsen har snabbare laddningstid, detta trots att sidan kräver mer resurser än NetOnNet. Om man hade kunnat sänka resursanvändningen hade den kunnat bli ännu snabbare.

Diskussion kring gränsvärde på laddningstid
-----------------------
Att sidan laddar snabbt är viktigt för att besökarna ska stanna kvar och inte lämna den. Jag upplever inte att någon av sidorna är direkt snabb. Sportamore tappar säkerligen kunder genom att ha en så långsam sida, särskilt på Mobile. De borde vara medvetna om hur betydelsefulla mobila enheter är idag. Då det är en ganska stor webbutik är det lite märkligt att den inte är mer optimerad.

Caliroots är inte snabb, men jag tycker ändå att den är godkänd. För att en sida ska upplevas som snabb bör laddningstiden vara någon mindre, under tre sekunder. Enligt Google lämnar 53 % av besökarna sidan om den inte laddar på den tiden. Det tycker jag är ett lämpligt riktmärke.

Referenser
-----------------------
IDG: [https://topp100.idg.se/2.39772/1.714254/topp100-2019-sveriges-basta-sajter](https://topp100.idg.se/2.39772/1.714254/topp100-2019-sveriges-basta-sajter)

think with Google: [https://think.storage.googleapis.com/docs/mobile-page-speed-new-industry-benchmarks.pdf](https://think.storage.googleapis.com/docs/mobile-page-speed-new-industry-benchmarks.pdf)

Rådata från undersökningen: [https://docs.google.com/spreadsheets/d/14Xa4Tfa_AJufgt_SLVaaykyN5We6Rn5FMqJg5y-2DOs/edit?usp=sharing](https://docs.google.com/spreadsheets/d/14Xa4Tfa_AJufgt_SLVaaykyN5We6Rn5FMqJg5y-2DOs/edit?usp=sharing)

Övrigt
-----------------------
Undersökningen och författandet av rapporten utfördes av Richard Stegersjö.
