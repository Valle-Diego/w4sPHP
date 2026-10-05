Es 1 — PHP Hello World

Studente: Diego Valle
Classe: 5EINF
Data: 28 settembre - 5 ottobre 2026  
Versione: v0.1 — bozza da completare e verificare



es01 - Generazione di una tabella pitagorica

Obiettivo

Realizzare una pagina web che mostri la tabella delle moltiplicazioni da 1 a 10, generando le righe e le celle con PHP.

Progetto

La pagina è composta da una struttura HTML e da una tabella popolata dinamicamente. Un ciclo esterno scorre i moltiplicatori da 1 a 10; per ciascuno, un ciclo interno genera i prodotti con i valori da 1 a 10. Il foglio CSS separato cura la presentazione.

Implementazione

Il file "Es.01-table/table.php" contiene i due cicli "for". Per ogni coppia di valori viene stampato il prodotto nella cella corrispondente.  Nel codice sono presenti commenti brevi che indicano la generazione della tabella.

Link: https://w4s.filippobilardo.it/~valle.diego/index.html/table.php
Screenshot: [inserire uno screenshot della tabella visualizzata e uno della parte di codice con i cicli].

Collaudo
Prove eseguite: 
	- Verificato che la tabella abbia 10 righe e 10 colonne.
	- Controllato alcuni prodotti, per esempio 1×1 = 1, 3×4 = 12 e 10×10 = 100.
	- Verificata la leggibilità su una finestra stretta.

Esito osservato: 
	- La tabella ha il numero corretto di righe e colonne.
	- I prodotti sono corretti.
	- La leggibilità è ottima anche da mobile.

Conclusioni e risultati

La pagina costruisce la tabella senza scrivere manualmente ogni cella e mostra come un ciclo annidato possa elaborare tutte le coppie di fattori.

es02 - Saluto in base all’orario e rilevamento del browser

Obiettivo

Creare una pagina PHP che saluti l’utente in base all’ora corrente e mostri il browser rilevato a partire dalle informazioni inviate dal browser stesso.

Progetto

Il programma usa il fuso orario "Europe/Rome", ricava l’ora corrente e sceglie il saluto tramite condizioni. In seguito legge l’intestazione "HTTP_USER_AGENT" e cerca alcune stringhe identificative per riconoscere diversi browser. Il nome visualizzato nel saluto è assegnato nel codice.

Implementazione

In "Es.02-greetings/greetings.php", "DateTime" e "DateTimeZone" forniscono l’orario locale. Le condizioni selezionano “Buongiorno” dalle 8 alle 11, “Buonasera” dalle 12 alle 19 e “Buonanotte” nelle altre fasce. Una sequenza di controlli con "strpos" prova a identificare Edge, Opera, Samsung Internet, Firefox, Chrome o Safari; se nessuna corrispondenza viene trovata, viene mostrato un messaggio di mancato riconoscimento.

Link: https://w4s.filippobilardo.it/~valle.diego/index.html/greetings.php
Screenshot: [inserire uno screenshot della pagina e uno del codice delle condizioni e del riconoscimento browser].

Collaudo

Prove eseguite:
	- Controllato il saluto in ciascuna fascia oraria.
	- Verificato il riconoscimento con i browser disponibili.
	- Controllato il messaggio previsto per un browser non riconosciuto.

Esito osservato:
	- In ogni fascia oraria il saluto è corretto
	- Il browser visualizzato corrisponde a quello usato in tutti i casi di test
	- Se il browser non fa parte di quelli inseriti viene restituito il messaggio di errore

Conclusioni e risultati

La pagina combina data e ora, condizioni e lettura delle informazioni della richiesta HTTP per personalizzare il contenuto. Il riconoscimento tramite "User-Agent" dipende dal testo inviato dal browser. 

es03 - Triangoli di asterischi

Obiettivo

Generare quattro forme triangolari composte da asterischi, usando cicli PHP annidati e spazi per allineare le righe.

Progetto

Ogni figura viene costruita riga per riga. Il ciclo esterno determina il numero e la lunghezza delle righe; il ciclo interno stampa gli asterischi e, nelle figure allineate, gli spazi iniziali. Le quattro sezioni sono contrassegnate da (a), (b), (c) e (d).

Implementazione

In "Es.03-triangle/triangle.php" i cicli "for" generano: (a) un triangolo crescente allineato a sinistra; (b) un triangolo decrescente allineato a sinistra; (c) un triangolo decrescente allineato a destra; (d) un triangolo crescente allineato a destra. Gli asterischi e gli spazi non separabili HTML ("&nbsp;") sono stampati direttamente.

Link: https://w4s.filippobilardo.it/~valle.diego/index.html/triangle.php
Screenshot: [inserire uno screenshot con tutte e quattro le forme e uno del codice dei cicli].

Collaudo

Prove eseguite: 
	- Verificato che ogni figura abbia 10 righe.
	- Verificato che il numero di asterischi aumenti o diminuisca come previsto.
	- Verificato che gli spazi iniziali producano l’allineamento desiderato.

Esito osservato:
	- Ogni triangolo ha 10 righe
	- Il trend degli asterischi è corretto secondo le indicazioni
	- Gli spazi sono posizionati in modo corretto

Conclusioni e risultati

Le quattro figure sono generate con cicli annidati; la quantità di caratteri stampati in ogni iterazione determina forma e orientamento.

Dichiarazione sull’uso di strumenti

Questa bozza del report è stata organizzata con assistenza AI sulla base dei file del progetto. Lo studente ha verificato i contenuti, riscritto le considerazioni personali, controllato la sintassi e eseguito le prove in prima persona. Gli screenshot e gli esiti di collaudo sono stati aggiunti dopo prove realmente effettuate.
