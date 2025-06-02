# Sistema di Gestione Stazioni di Ricarica per Veicoli Elettrici

Un'applicazione web completa per la gestione delle stazioni di ricarica per veicoli elettrici realizzata con PHP, MySQL, HTML, CSS e JavaScript.

## Funzionalità

- Registrazione e autenticazione utenti
- Sistema di prenotazione per le stazioni di ricarica
- Monitoraggio in tempo reale della disponibilità delle stazioni
- Dashboard amministrativa per la gestione delle stazioni
- Dashboard utente con cronologia ricariche e statistiche
- Sistema automatico di notifica per la scadenza delle prenotazioni

## Installazione

1. Installare XAMPP sul sistema se non è già presente (https://www.apachefriends.org/download.html)
2. Clonare o scaricare questo repository nella cartella htdocs di XAMPP (es. `C:\xampp\htdocs\ev-charging-system` su Windows o `/Applications/XAMPP/htdocs/ev-charging-system` su macOS)
3. Avviare i servizi Apache e MySQL nel Pannello di Controllo XAMPP
4. Aprire il browser e navigare su `http://localhost/phpmyadmin`
5. Creare un nuovo database chiamato `ev_charging_db`
6. Importare il file `db/schema.sql` nel database appena creato
7. Navigare su `http://localhost/ev-charging-system` nel browser per accedere all'applicazione

## Accesso Amministratore

Credenziali amministratore predefinite:
- Username: admin@example.com
- Password: Admin123!

## Struttura dei File

```
/ev-charging-system
    /assets - Contiene file CSS, JavaScript e immagini
    /config - File di connessione al database e configurazione
    /includes - Componenti PHP riutilizzabili e funzioni
    /pages - Tutte le pagine dell'applicazione
    /db - Schema del database e script di inizializzazione
    index.php - Punto di ingresso dell'applicazione
```

## Licenza

Questo progetto è rilasciato sotto la Licenza MIT - vedere il file LICENSE per i dettagli.