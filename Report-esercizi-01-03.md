# Report di laboratorio — PHP (esercizi 01, 02 e 03)

**Studente:** Paolo [confermare cognome]  
**Classe:** 5EINF [confermare]  
**Data:** 5 ottobre 2026  
**Versione:** v0.1 — bozza da completare e verificare

> Bozza ricostruita dai file presenti nel progetto. Prima della consegna, verificare che gli obiettivi corrispondano alle tracce assegnate, aggiungere i dati mancanti, documentare prove realmente eseguite e inserire screenshot reali delle pagine e del codice.

# es01a - Generazione di una tabella pitagorica

## Obiettivo / Abstract

Realizzare una pagina web che mostri la tabella delle moltiplicazioni da 1 a 10, generando le righe e le celle con PHP.

## Progetto

La pagina è composta da una struttura HTML e da una tabella popolata dinamicamente. Un ciclo esterno scorre i moltiplicatori da 1 a 10; per ciascuno, un ciclo interno genera i prodotti con i valori da 1 a 10. Il foglio CSS separato cura la presentazione, con un layout adattabile agli schermi più stretti.

## Implementazione

Il file `Es.01-table/table.php` contiene i due cicli `for`. Per ogni coppia di valori viene stampato il prodotto nella cella corrispondente. Il file `Es.01-table/style.css` definisce colori, spaziature e adattamento mobile. Nel codice sono presenti commenti brevi che indicano la generazione della tabella.

**Repository:** [aggiungere il collegamento GitHub, se il repository è accessibile e previsto dalla consegna].  
**Screenshot:** [inserire uno screenshot della tabella visualizzata e uno della parte di codice con i cicli].

## Collaudo

**Prove da documentare dopo averle eseguite:** verificare che la tabella abbia 10 righe e 10 colonne; controllare alcuni prodotti, per esempio 1×1 = 1, 3×4 = 12 e 10×10 = 100; verificare la leggibilità su una finestra stretta.

**Esito osservato:** [completare con browser usato, risultati effettivi ed eventuali problemi riscontrati e risolti].

## Conclusioni e risultati

La pagina costruisce la tabella senza scrivere manualmente ogni cella e mostra come un ciclo annidato possa elaborare tutte le coppie di fattori. [Aggiungere una considerazione personale sull’esperienza e sulle difficoltà incontrate.]

# es02a - Saluto in base all’orario e rilevamento del browser

## Obiettivo / Abstract

Creare una pagina PHP che saluti l’utente in base all’ora corrente e mostri il browser rilevato a partire dalle informazioni inviate dal browser stesso.

## Progetto

Il programma usa il fuso orario `Europe/Rome`, ricava l’ora corrente e sceglie il saluto tramite condizioni. In seguito legge l’intestazione `HTTP_USER_AGENT` e cerca alcune stringhe identificative per riconoscere diversi browser. Il nome visualizzato nel saluto è assegnato nel codice.

## Implementazione

In `Es.02-greetings/greetings.php`, `DateTime` e `DateTimeZone` forniscono l’orario locale. Le condizioni selezionano “Buongiorno” dalle 8 alle 11, “Buonasera” dalle 12 alle 19 e “Buonanotte” nelle altre fasce. Una sequenza di controlli con `strpos` prova a identificare Edge, Opera, Samsung Internet, Firefox, Chrome o Safari; se nessuna corrispondenza viene trovata, viene mostrato un messaggio di mancato riconoscimento. La grafica è definita in `Es.02-greetings/style.css`.

**Nota da verificare rispetto alla traccia:** l’intervallo dalle 12 alle 19 è etichettato “Buonasera”; confermare che sia quello richiesto. Il nome impostato nel codice è “Paolo”: verificare che sia corretto e coerente con i dati da consegnare.

**Repository:** [aggiungere il collegamento GitHub, se previsto].  
**Screenshot:** [inserire uno screenshot della pagina e uno del codice delle condizioni e del riconoscimento browser].

## Collaudo

**Prove da documentare dopo averle eseguite:** controllare il saluto in ciascuna fascia oraria, verificare il riconoscimento con i browser disponibili e controllare il messaggio previsto per un browser non riconosciuto, se è possibile simulare il caso.

**Esito osservato:** [riportare data e ora della prova, browser effettivamente usato, risultato mostrato ed eventuali problemi].

## Conclusioni e risultati

La pagina combina data e ora, condizioni e lettura delle informazioni della richiesta HTTP per personalizzare il contenuto. Il riconoscimento tramite `User-Agent` dipende dal testo inviato dal browser. [Aggiungere una considerazione personale sull’esperienza.]

# es03a - Triangoli di asterischi

## Obiettivo / Abstract

Generare quattro forme triangolari composte da asterischi, usando cicli PHP annidati e spazi per allineare le righe.

## Progetto

Ogni figura viene costruita riga per riga. Il ciclo esterno determina il numero e la lunghezza delle righe; il ciclo interno stampa gli asterischi e, nelle figure allineate, gli spazi iniziali. Le quattro sezioni sono contrassegnate da (a), (b), (c) e (d).

## Implementazione

In `Es.03-triangle/triangle.php` i cicli `for` generano: (a) un triangolo crescente allineato a sinistra; (b) un triangolo decrescente allineato a sinistra; (c) righe decrescenti con spazi iniziali; (d) righe crescenti con spazi iniziali. Gli asterischi e gli spazi non separabili HTML (`&nbsp;`) sono stampati direttamente. `Es.03-triangle/style.css` imposta il contenitore e il carattere monospaziato per rendere più leggibile l’allineamento.

**Repository:** [aggiungere il collegamento GitHub, se previsto].  
**Screenshot:** [inserire uno screenshot con tutte e quattro le forme e uno del codice dei cicli].

## Collaudo

**Prove da documentare dopo averle eseguite:** verificare che ogni figura abbia 10 righe, che il numero di asterischi aumenti o diminuisca come previsto e che gli spazi iniziali producano l’allineamento desiderato.

**Esito osservato:** [completare con browser usato, risultati effettivi ed eventuali problemi di spaziatura o visualizzazione].

## Conclusioni e risultati

Le quattro figure sono generate con cicli annidati; la quantità di caratteri stampati in ogni iterazione determina forma e orientamento. [Aggiungere una considerazione personale su quale figura o ciclo sia stato più difficile da realizzare.]

## Dichiarazione sull’uso di strumenti

Questa bozza del report è stata organizzata con assistenza AI sulla base dei file del progetto. Lo studente deve verificare i contenuti, riscrivere le considerazioni personali e dichiarare l’eventuale assistenza AI secondo le regole dell’insegnante. Gli screenshot e gli esiti di collaudo vanno aggiunti dopo prove realmente effettuate.

## Checklist prima della consegna

- [ ] Confermare titolo e traccia originale di ciascun esercizio.
- [ ] Completare cognome, classe e data richiesta.
- [ ] Aggiungere screenshot autentici di codice e risultato.
- [ ] Inserire il link al repository, se richiesto.
- [ ] Eseguire e descrivere test reali, con input e output.
- [ ] Verificare commenti e correttezza del codice rispetto alla traccia.
- [ ] Aggiungere riflessioni personali e dichiarazione degli strumenti utilizzati.
