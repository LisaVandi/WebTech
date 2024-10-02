# HTML

HTML è un linguaggio di markup (marcatura) di tipo descrittivo, che identifica strutturalmente il tipo di ogni elemento del contenuto.

## Struttura

1. definito dal DOCTYPE html
2. html lang="it"
3. strutturato in:
   - head: intestazione del documento.
   - body: corpo del documento.
4. nell'head del documento, si hanno i metadati

### Metadati

Sono tutti elementi che possono avere degli attributi.

1. title: titolo che sarà mostrato nel tab della finestra del browser .
2. base: UNICO nel documento. Scopo di indicare il path base del documento, sia con href sia con target
3. link: per creare relazioni tra il documento e altri documenti. Scopo di creare la relazione con il CSS usato dal documento.
4. meta: usato per aggiungere altri metadati. Il tipo è specificaato dall'attributo name.
5. style: permette di includere stili nel documento.

### Elementi

Definiti da un tag di apertura, un contenuto e un tag di chiusura. I tag (markup che definiscono il ruolo che il contenuto ricopre nel documento Web) possono avere attributi: coppie nome-valore separate da "=".

#### Intestazione

Per definire l'intestazione di un documento, si usa il tag header. Ne possono essere presenti molteplici: vanno da h1 a h6 in base al loro rank.

#### Link di navigazione

Tramite il tag nav: può essere usato per menù, toolbar o altri set di link.

#### Sezione

Per definire una sezione del documento, si usa l'elemento section. Tipicamente, ha un'intestazione.

#### Articolo

Per definire informazioni indipenti e auto-contenute: article.

#### Aside

tag aside: definisce un contenuto a latere rispetto a quelli principali.
Può essere utilizzato per contenere i contenuti di una barra laterale (sidebar), ma anche per contenuti che sono collaterali, ma non si posizionano
necessariamente a lato (per esempio
citazioni o banner pubblicitari).

#### Footer

Per definire il footer di un documento o di una sezione. Solitamente, contiene le informazioni sull'autore, copright, ecc. Possono essere presenti più tag footer in ogni pagina Web.

### Phrasing

In questa categoria rientra il contenuto che rappresenta il testo del documento.

#### p

Paragrafo testuale

#### br/

Interruzione di linea: è un elemento vuoto. Non va usato per effetti grafici, ma solo se l'andata a capo fa parte del contenuto (es. poesie).

#### div

Scopo di rappresentare gli elementi iin esso annidati e specificare per loro gli attributi class, lang e title. L'attributo class serve per dare a un gruppo di elementi lo stesso stile di presentazione.

#### span

Elemento inline. Ha lo stesso ruolo di div a livello di testo.

#### main

Raggruppa gli elementi di struttura che rappresentano il contenuto principale del documento. Ogni documento deve avere un solo main.

#### a

Definisce un link ipertestuale, che viene utilizzato per collegare una pagina a un'altra.
Attributo:

- href: indica l'URI del link di destinazione.

#### strong

Testo in grassetto. Va sempre usato al posto del tag b (= bold)

#### em

Testo in corsivo. Da usare al posto del tag i (= italic).

### Embedded

Contenuto con lo scopo di importare risorse o contenuto dentro il documento.

#### img

Tag per definire le immagini inline.
Attributi obligatori:

- src: specifica l'URL del file contenente l'immagine.
- alt: testo alternativo, viene visualizzato in caso il browser non riesca a mostrare l’immagine e in caso di immagini disabilitate.
  Se alt="" => immagine decorativa.

#### figure e figcaption

Il tag figcaption definisce la didascalia di un'immagine.
Il tag figure raggruppa l'immagine e la sua didascalia.

#### video

Includere video in una pagina HTML.
Attributi:

- controls: aggiunge i controlli per il video: play, pausa, volume
- width: definisce la larghezza del video;
- heigth: se non specificato, viene calcolato mantenendo le proporzioni originali del video
- autoplay: per far partire automaticamente un video (abbinabile a controls)

Tramite l'elemento source, si possono proporre diversi formati (NON SUPPORTATO QUELLO DI YOUTUBE)

#### audio

Includere audio in una pagina HTML.

#### object

Definisce un oggetto incluso in un documento HTML. Utile per includere audio, video, animazioni e plug-in.
Attributi di audio e video.

#### canvas

Fornisce le API necessarie per la generazione e il rendering dinamico di grafica, diagrammi, immagini e animazioni.
L’elemento definisce un’area rettangolare in cui disegnare direttamente immagini bidimensionali e modificarle in relazione a eventi, tramite funzioni Javascript.

Attributi:

- width
- heigth
  (0,0) = angolo in alto a sinistra

#### map

Mappa = immagine in cui alcune aree sono interattive, attivano un link o altre azioni. Può essere:

- client-side
- server-side

### Elementi flow

#### Tabelle

Realizzate tramite l'elemento table: organizzate per righe (tag tr: table row), ogni riga è divisa in celle.
Caption: testo che sopra la tabella che la descrive

Celle:

##### td

celle normali tramite il tag td = table data.

##### th

celle di intestazione: tag th = table header.

Entrambe le tipologie di celle possono occupare più righe o colonne tramite gli attributi rowspan e colspan, seguiti da ="#colonne/righe da occupare"

Una cella può fare riferimento ad altre tramite l'attributo headers: deve avere come valore la lista degli id delle intestazioni per la cella SEPARATI DA SPAZIO.

#### Liste

Tre tipi:

##### unordered list

Tag ul, elemento della lista = list item => tag li

##### ordered list

Tag ol, elemento della lista = list item => tag li
Attributi che si possono specificare:

- start: valore iniziale dell'enumerazione (se ho un elenco, parte dal valore start)
- type: tipo di numerazione utilizzata
- reversed: numerazione è inversa

##### definition list

Tag dl. Sono liste associative, pensate per correlare un concetto con uno o più termini. A ogni termine, possono corrispondere più definizioni.
Gli elementi sono:

- dt = descriptive termins
- dd = definizioni.

### Interactive

#### Form

Parte di pagina Web che contiene controlli di input, creata con il tag form.
Attributi:

- ACTION: specifica l’URL dell’applicazione server-side
  che riceverà i dati.
- METHOD: specifica il metodo HTTP che deve essere
  usato per i dati, cioè:
  - GET: richiede di processare i dati a una specifica
    applicazione server.
    I dati, tutti testuali, sono visibili nell'URL.
  - POST: sottomette (invia) i dati da processare ad una
    specifica applicazione server.
    I dati sono inviati nel body del messaggio HTTP e non
    sono visibili, quindi è adatto al passaggio di dati
    riservati, come per esempio una password.
    NB: non è sicuro con HTTP.

Ogni controllo deve avere una label:
